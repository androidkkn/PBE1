## Exercícios de apropriação

### Onde ocorre o CRUD?

No projeto de filmes, o CRUD acontece em FilmeRepository.php. As páginas da pasta public recebem as ações de cadastrar, listar, buscar por ID, editar e excluir. O repositório executa essas operações no banco.

### Onde está a regra de negócio?

As regras de negócio ficam na classe Filme. O título e o gênero são obrigatórios, o ano precisa ter quatro dígitos e a avaliação é opcional. Quando preenchida, a nota deve ficar entre 0 e 10 e pode ter uma casa decimal.

### Por que a classe Cliente não acessa o banco diretamente?

No projeto original, a classe Cliente representa os dados do cliente. O ClienteRepository é quem acessa o banco. Assim, cada classe tem sua responsabilidade e é possível criar um objeto Cliente sem abrir uma conexão.

## Exercícios de aplicação

### Como funciona a edição?

O sistema busca o filme pelo ID, preenche o formulário e valida os dados antes de salvar.

### Como funciona a exclusão?

Aparece uma única confirmação na listagem. Se a pessoa cancelar, o filme continua na lista.

### O que foi testado?

Os testes com PostgreSQL confirmaram que dados inválidos são rejeitados e que apenas o filme escolhido é excluído.

## Desafio profissional

Usei como exemplo um cadastro de diretores.

### O repositório pode ser reutilizado?

A interface do repositório pode ser reaproveitada. O FilmeRepository segue atendendo o cadastro de filmes, e um novo DiretorRepository ficaria responsável pelos diretores.

### O que muda?

Mudam o modelo, os campos, a tabela, as consultas e os formulários.

### O que permanece igual?

A conexão com o banco, a interface do repositório e as operações do CRUD.
