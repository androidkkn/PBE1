<header>
    <!-- Título exibido no topo das páginas. -->
    <h1>Nexus</h1>
    <?php

    // Verifica se existe um nome salvo no cookie do navegador.
    if (isset($_COOKIE['nome'])) {
        // Exibe uma mensagem personalizada para o usuário.
        echo "Seja bem vindo " . $_COOKIE['nome'];
    } else {
        // Mensagem exibida antes de o cookie ser criado.
        echo "Cookie ainda não setado";
    };
    
    ?>
    <!-- Links de navegação do cabeçalho. -->
    <nav>
        <a href="index.php">Login</a> <a href="*"> Sobre</a>
    </nav>
    <hr>        
</header>