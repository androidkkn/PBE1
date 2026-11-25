<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecesor e Sucessor</title>

    <style>
        body {
            background-color: #131234;
        }

        header h1 {
            text-align: center;
            color: lightgray;
        }

        main {
            background-color: lightgray;
            text-align: center;
            width: 30%;
            margin: auto;
            border: 2px solid #000;
            border-radius: 10px;
            padding-top: 2vh;
            padding-bottom: 2vh;
        }

        form {
            padding-bottom: 2vh;
        }
    </style>

</head>

<body>
    <header>
        <!-- O que faz -->
        <h1>Analiza Antecessor e Sucessor.</h1>
    </header>

    <main>
        <div>
            <!-- Receber numero -->
            <form action="" method="post">
                <label for="num">Digite um numero: </label><br>
                <input type="number" name="num" id="num" required>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                echo "<hr>";
                $num = $_POST['num'];
                //Mostrar o numero
                echo "Numero: $num<br>";
                //Mostrar o numero -1
                echo "Antecessor:" . $num - 1 . "<br>";
                //Mostrar o numero +1
                echo "Sucessor:" . $num + 1 . "<br>";
            }
            ?>
        </div>
    </main>
</body>

</html>