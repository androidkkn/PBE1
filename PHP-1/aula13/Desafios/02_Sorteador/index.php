<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador 1/16</title>
</head>

<body>
    <header>
        <!-- Explicar o codigo -->
        <h1>Sorteador de números entre 1 e 16</h1>
    </header>
    <main>

        <div>
            <!-- Fazer o botao de sortear -->
            <form action="" method="POST">
                <label for="min">Sortear de </label>
                <input type="number" name="min" id="min" required>

                <label for="max"> a </label>
                <input type="number" name="max" id="max" required>
                <br>
                <input type="submit" value="Sortear">
                
            </form>
        </div>
        <div>
            <?php
            //realizar o sorteador
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $min = $_POST['min'];
                $max = $_POST['max'];
                $sortear = rand($min, $max);
                //mostrar o numero sorteado
                echo "N° Sorteado: $sortear";
            }
            ?>
        </div>
    </main>
</body>

</html>