<?php

namespace Api\Services;

use Api\Core\LoggerTXT;
use Api\Core\Response;
use Api\Database\Connection;
use Api\Database\LivroGateway;
use Exception;


class LivroService
{

    public static function all()
    {
        try {
            $conn = Connection::open('database');
            LivroGateway::setConnection($conn);


            $total = LivroGateway::countAll(); // Corrigido aqui
            $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;


            $limit = 4;
            $offset = ($page - 1) * $limit;

            $livros = LivroGateway::paginate($limit, $offset);
            $totalPages = ceil($total / $limit);

            if ($page > $totalPages or $page < 1) {
                Response::redirect('livros?page=1', 'Indice de paginação não encontrado', 'warning');
            }

            return [
                'livros' => $livros,
                'total' => $total,
                'page' => $page,
                'totalPages' => $totalPages,
                'limit' => $limit,
                'offset' => $offset
            ];
        } catch (Exception $e) {
            echo $e->getMessage();
            LoggerTXT::log('LivroService@all: ' . $e->getMessage(), 'Error');
            Response::redirect('home', 'Desculpe tivemos um problema, tente novamente mais tarde', 'danger');
        }
    }

    public static function store($dados)
    {
        try {
            $conn = Connection::open('database');
            LivroGateway::setConnection($conn);
            $livro = new LivroGateway;

            foreach ($dados as $chave => $valor) {
                $livro->$chave = $valor;
            };
            $livro->save();
        } catch (Exception $e) {
            echo $e->getMessage();
            LoggerTXT::log("LivroService@store: {$e->getMessage()}", 'Error');
            return Response::redirect('livros/cadastrar', 'Erro ao cadastrar livro, tente novamente em instantes', 'danger');
        }
    }



    public static function findById($id)
    {
        try {
            $conn = Connection::open('database');
            LivroGateway::setConnection($conn);

            $livro = LivroGateway::findById($id);
            if (!isset($livro->id)) {
                Response::redirect('home', 'Desculpe, não encontramos o livro que está procurando', 'warning');
            }

            return $livro;
        } catch (Exception $e) {
            LoggerTXT::log('LivroService@findById: ' . $e->getMessage(), 'Error');
            Response::redirect('home', 'Desculpe, ocorreu um erro ao buscar o livro que está procurando', 'warning');
        }
    }

    public static function delete($id)
    {
        try {
            $conn = Connection::open('database');
            LivroGateway::setConnection($conn);
            $livro = self::findById($id);
            $capa_path = $livro->capa_path;
            if (LivroGateway::delete($id)) {
                if (file_exists($capa_path) and strcmp($capa_path, 'uploads/placeholder.png')) {
                    if (unlink($capa_path)) {
                        LoggerTXT::log('LivroService@delete: Apagando arquivo da capa do livro', 'Success');
                    } else {
                        LoggerTXT::log('LivroService@delete: Erro ao apagar capa do livro', 'Error');;
                    }
                }

                LoggerTXT::log('LivroService@delete: Registro do livro apagado com sucesso', 'Success');
                return true;
            }
        } catch (Exception $e) {
            LoggerTXT::log("LivroService@delete: {$e->getMessage()}", 'Error');
            Response::redirect('livros', 'Erro ao deletar livro, tente novamente mais tarde', 'danger');
        }
    }
}
