<!-- 
explicar o programa
pedir para o usuario digitar o seu salario
fazer a analize de quantos salarios minimos ele ganha, e o resto da divisao dos salarios minimos
mostrar a analize
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salarios minimos</title>
</head>
<body>
    <header>
        <h1>Quantos salarios minimos voce ganha?</h1>
    </header>
    <main>
        <div>
            <p>Valor do salario minimo atualmente é <b>R$1621,00</b></p>
            <form action="" method="post">
                <label for="sal">Digite o seu salário</label>
                <input type="number" name="sal" id="sal">
                <input type="submit" value="Analizar">
            </form>
        </div>
        <div>
            <?php 
            
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                echo "<hr>";
                $sal = $_POST['sal'];
                $salmin = 1621;

                $quoc = intval($sal / $salmin);
                $resto = $sal % $salmin;

                echo "Voce ganha atualmente $sal.<br>";
                echo "Isso equivale a $quoc salários minimos.";
                echo "e sobra $resto.";

            }

            ?>
        </div>
    </main>
</body>
</html>