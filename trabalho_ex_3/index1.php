<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="style.css">
    <?php
    $num1 = filter_input(INPUT_POST, 'numero1');
    $num2 = filter_input(INPUT_POST, 'numero2');
    $opr = filter_input(INPUT_POST, 'operacao');
    $resul = "";

    if ($opr === "+") {
        $resul = $num1 + $num2;
    } elseif ($opr === "-") {
        $resul = $num1 - $num2;
    } elseif ($opr === "/") {
        $resul = $num1 / $num2;
    } elseif ($opr === "*") {
        $resul = $num1 * $num2;
    }
    ?>

</head>

<body>
    <div class="box-style">
        <h3>Calculadora</h3>
        <form method="post">
            <label>Primeiro numero</label><br>
            <input type="number" name="numero1" min="0"><br><br>
            <label>Segundo numero</label><br>
            <input type="number" name="numero2" min="0"><br><br>
            <select name="operacao"><br>
                <option value="+">Soma</option>
                <option value="-">Subtração</option>
                <option value="/">Divisão</option>
                <option value="*">Multiplicação</option>
            </select><br><br>
            <input type="submit" name="botao" value="calcular">
        </form>
        <h3>Resultado da operação é <?= $resul ?></h3>
    </div>

</body>

</html>