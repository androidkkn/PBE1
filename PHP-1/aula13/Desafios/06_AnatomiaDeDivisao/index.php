<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisao</title>
</head>

<body>
    <header>
        <!-- explicar o programa -->
        <h1>Analize de anatomia de divisão</h1>
    </header>
    <main>
        <div>
            <form action="" method="post">
                <!-- pedir o numero que sera dividido -->
                <label for="divisor">Divisor: </label>
                <input type="number" name="divisor" id="divisor">
                <!-- pedir o numero dividendo -->
                <label for="dividendo">Dividendo: </label>
                <input type="number" name="dividendo" id="dividendo">
                <input type="submit" value="Analizar">
            </form>
        </div>
        <div>
            <?php

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // fazer a analize do numero   
                $visor = $_POST['divisor'];
                $dendo = $_POST['dividendo'];
                $quoc = intval($dendo / $visor);
                $resto = $dendo % $visor;


                // dividendo
                echo "Dividendo: " . $dendo;
                // divisor
                echo "<br>Divisor: " . $visor;
                // quociente
                echo "<br>Quociente: " . $quoc;
                // resto
                echo "<br>Resto: " . $resto;
            }

            ?>
        </div>
    </main>
</body>

</html>