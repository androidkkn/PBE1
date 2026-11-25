<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
</head>

<body>
    <header>
        <!-- Explicar o codigo -->
        <h1>Conversor de Real para dolar</h1>
    </header>
    <main>
        <div>
            <form action="" method="post">
                <!-- input do valor da moeda que o real vai ser convertido -->
                <label for="VD">Valor do dolar atualmente: </label>
                <input type="number" name="VD" id="VD" step="0.01" required>
                <br>
                <!-- input do valor do real -->
                <label for="real">R$: </label>
                <input type="number" name="real" id="real" step="0.01" required>
                <br>
                <input type="submit" value="Converter">
                <p>⬇</p>
            </form>
        </div>
        <div>

            <?php

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // conversor de moeda
                $real = $_POST['real'];
                $real_formatado = str_replace(',', '.', $real);
                $vd = $_POST['VD'];
                $vd_formatado = str_replace(',', '.', $vd);
                $conversao = $real_formatado / $vd_formatado;
                // $conversao_formatada = str_replace('.', ',', $conversao);
                // saida de valor de moeda 2    
                echo "U$ = " . number_format($conversao, 2, ',');
            }

            ?>

        </div>
    </main>
</body>

</html>