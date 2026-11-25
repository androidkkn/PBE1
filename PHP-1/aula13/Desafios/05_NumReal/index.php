<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Reais</title>
</head>

<body>
    <header>
        <!-- Explicar o programa -->
        <h1>Analize de Números Reais</h1>
    </header>
    <main>
        <div>
            <hr>
            <form action="" method="post">
                <!-- Pedir pro usuario digitar um numero -->
                <label for="num">Digite um numero que voce quer que seja analizado</label>
                <input type="number" name="num" id="num" step='0.001' required>
                <input type="submit" value="Analizar">
            </form>
        </div>
        <div>
            <?php

            // Analizar o numero 
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $num = $_POST['num'];
                list($int, $frac) = explode('.', $num);
                // devolver o numero separado em inteiro e fracionado
                echo "Inteiro: " . $int;
                echo "<br>";
                echo "Fracionado: " . $frac;
            }

            ?>
        </div>
    </main>
</body>

</html>