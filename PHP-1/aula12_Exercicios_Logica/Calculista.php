<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora em PHP</title>
</head>
<body>
    <h2>Calculadora em PHP</h2>

    <!-- Formulário que envia os dados para a própria página via POST -->
    <form method="POST" action="">
        <input type="number" step="any" name="num1" placeholder="Número 1" required>

        <select name="operacao" required>
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
        </select>

        <input type="number" step="any" name="num2" placeholder="Número 2" required>

        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
        // Valida e sanitiza os inputs de entrada como números de ponto flutuante
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
        $operacao = $_POST['operacao'];
        $resultado = "";

        if ($num1 === false || $num2 === false) {
            $resultado = "Por favor, insira números válidos.";
        } else {
            // Executa a operação correspondente
            switch ($operacao) {
                case 'soma':
                    $res = $num1 + $num2;
                    $resultado = "$num1 + $num2 = $res";
                    break;
                case 'subtracao':
                    $res = $num1 - $num2;
                    $resultado = "$num1 - $num2 = $res";
                    break;
                case 'multiplicacao':
                    $res = $num1 * $num2;
                    $resultado = "$num1 × $num2 = $res";
                    break;
                case 'divisao':
                    // Tratamento para evitar erro de divisão por zero
                    if ($num2 == 0) {
                        $resultado = "Erro: Divisão por zero não é permitida.";
                    } else {
                        $res = $num1 / $num2;
                        $resultado = "$num1 ÷ $num2 = $res";
                    }
                    break;
                default:
                    $resultado = "Operação inválida.";
            }
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html> 