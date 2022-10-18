<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <link rel="stylesheet" href="style_1.css">
</head>

<body>

    <div class="box_style">
        <?php

        $valor = filter_input(INPUT_POST, 'numero');

        if ($valor > 0) {
            $resul = "<strong>O valor $valor é positivo</strong>";
        } elseif ($valor < 0) {
            $resul = "<strong>O valor $valor é negativo</strong>";
        } else {
            $resul = "<strong>O valor é igual a 0</strong>";
        }

        echo "$resul" . "<br>";
        ?>
        <a href="index1.php">Voltar</a>
    </div>

</body>

</html>