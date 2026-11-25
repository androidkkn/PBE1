No projeto de filmes, o CRUD acontece em FilmeRepository.php. As páginas da pasta public recebem as ações de cadastrar, listar, buscar por ID, editar e excluir. O repositório executa essas operações no banco.

As regras de negócio ficam na classe Filme. O título e o gênero são obrigatórios, o ano precisa ter quatro dígitos e a avaliação é opcional. Quando preenchida, a nota deve ficar entre 0 e 10 e pode ter uma casa decimal.

No projeto original, a classe Cliente representa os dados do cliente. O ClienteRepository é quem acessa o banco. Assim, cada classe tem sua responsabilidade e é possível criar um objeto Cliente sem abrir uma conexão.

Na edição, o sistema busca o filme pelo ID, preenche o formulário e valida os dados antes de salvar. Na exclusão, aparece uma única confirmação na listagem. Se a pessoa cancelar, o filme continua na lista. Os testes com PostgreSQL confirmaram que dados inválidos são rejeitados e que apenas o filme escolhido é excluído.

Para o desafio, usei como exemplo um cadastro de diretores. O novo cadastro pode reaproveitar a interface do repositório, a conexão com o banco e as mesmas operações do CRUD. O que muda é o modelo, os campos, a tabela, as consultas e os formulários. O FilmeRepository segue atendendo o cadastro de filmes, e o novo DiretorRepository ficaria responsável pelos diretores.
