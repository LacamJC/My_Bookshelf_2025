# Projeto - My Bookshelf 2025

## 1. Introdução

O projeto My Bookshelf é uma implementação de um **sistema de cadastro de livros** que foi desenvolvido de ponta a ponta desde a *prototipação da interface*, *validação do protótipo*, *desenvolvimento do front-end* a *implementação back-end*.

## 2. Proposta

Implementar um projeto de **cadastro de livros**. O projeto deve ter uma **tela de login** para permitir que apenas usuários cadastrados tenham acesso. O sistema deve contar com a **lista de livros** com opções para *cadastrar um novo livro*, *alterar um livro já existente* e *remover um livro*.

Deve-se utilizar todo o conhecimento obtido no livro *Programando em Orientação a Objetos com PHP*. O projeto deve ser feito utilizando todos os **conceitos aprendidos** até agora.

É importante tomar cuidado com a experiência do usuário, ou seja, utilizar campos com *labels*, *placeholders* e *mensagens de erro* bem definidas. A aplicação será o seu cartão de visitas. Se a sua aplicação **entregar valor** e tiver uma ótima **experiência de utilização**, o cliente voltará. Caso contrário, o cliente **não retornará** à sua aplicação.

Lembre-se que tudo **contará na avaliação**. A consistência nos *nomes dos componentes* da aplicação, a consistência na *escrita do código* (variáveis, funções e objetos), a *consistência na escrita do HTML e CSS*, os *commits e as mensagens utilizadas* entre outras **boas práticas**.

O **campos necessários** para o cadastro são:

- Título - (texto)
- Autor(es) - (texto) (separado por vírgula)
- Número de páginas (numérico)
- Gênero (lista de seleção múltipla)
- Publicação Nacional? (sim ou não)
- Capa (imagem)
- Editora - (texto)
- Descrição (caixa de texto)

## 3. Execução do Projeto

### 3.1 Prototipação e Validação da Interface

* criação de protótipos de baixa fidelidade (desktop)
* criação do mapa do site utilizando
* criação e validação do protótipo navegável utilizando algum aplicativo

### 3.2 Desenvolvimento Front-End

* criação das páginas HTML utilizando marcação semântica
* criação dos estilos CSS utilizando BEM para componentização
* criação dos componentes CSS em módulos separados
* pode-se utilizar diretamente o Bootstrap, porém, pode-se utilizar os conceitos

### 3.3 Desenvolvimento Back-End

* o desenvolvimento back-end deve usar apenas PHP
* não poderá ser usado frameworks ou bibliotecas terceiras
* pode-se utilizar orientação a objetos ou programação procedural
* o código deve estar organizado e com responsabilidades bem definidas



<hr>

# Checklist

## 1. Prototipação e Validação da Interface  
- [ ] Protótipos de baixa fidelidade (desktop) concluídos  
- [ ] Mapa do site criado  
- [ ] Protótipo navegável criado e validado com usuários

## 2. Desenvolvimento Front-End  
- [X] Páginas HTML criadas com marcação semântica (header, main, footer etc)  
- [ ] Estilos CSS organizados usando metodologia BEM (componentização)  
- [ ] Estilos CSS divididos em módulos/componentes separados  
- [X] Utilização do Bootstrap (se for o caso) ou criação de estilos próprios coerentes  
- [X] Validação de formulários no front-end com mensagens claras e acessíveis  
- [X] Uso de ícones (Bootstrap Icons ou semelhantes) para melhorar UX

## 3. Desenvolvimento Back-End  
- [X] Sistema de autenticação implementado (login/logout)  
- [X] Cadastro de usuários funcionando e seguro (validação, sanitização)  
- [X] CRUD completo para livros:  
  - [X] Listar livros com paginação  
  - [X] Cadastrar novo livro com upload de imagem (capa)  
  - [X] Editar livros existentes  
  - [X] Excluir livros  
- [X] Estrutura do banco criada conforme o modelo (tabela livros, usuários)  
- [X] Implementação orientada a objetos aplicada corretamente (ex: LivroGateway, Controllers, etc)  
- [X] Tratamento de erros e exceções adequado  
- [X] Validação e sanitização dos dados no back-end  
- [X] Mensagens de erro claras para o usuário (ex: falha no cadastro, login inválido)  
- [X] Implementação de sessão para manter usuário logado  
- [X] URLs amigáveis com roteamento (Router) funcionando sem erros

## 4. Boas Práticas e Organização  
- [X] Código PHP organizado e consistente (nomeclaturas, indentação, responsabilidades)  
- [X] Código front-end consistente (nomes de classes, indentação, semântica)  
- [X] Arquivos CSS/JS e assets organizados em pastas apropriadas  
- [X] Commit no Git com mensagens claras e frequentes  
- [X] README atualizado com instruções para rodar o projeto  
- [ ] Tratamento de segurança (ex: evitar SQL Injection, XSS)  
- [ ] Uso de prepared statements ou equivalente para consultas (se possível)  
- [X] Validação tanto no front quanto no back-end para evitar dados inconsistentes  
- [X] Responsividade para diferentes dispositivos  

## Extras que podem ser implementados para elevar o nível do projeto  
- [ ] Sistema de permissões para diferentes tipos de usuários (admin, comum)  
- [ ] Filtros e buscas na lista de livros  
- [ ] Upload de imagens com tratamento de tamanho e formato  
- [ ] Testes automatizados (unitários ou funcionais)  
- [ ] Documentação do código e API (se houver)  

