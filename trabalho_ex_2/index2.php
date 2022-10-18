<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box-style">
        <?php

        $valor1 = filter_input(INPUT_POST, 'numero');

        if ($valor1 > 0) {
            $valor2 = $valor1;
            for ($num = ($valor2 - 1); $num > 0; $num--) {
                $valor2 = $valor2 * $num;
                echo "$valor1 * $num = $valor2" . "<br>";
            }
        } else {
            $valor2 = 0;
        }
        echo "<strong>Fatorial de $valor1 é $valor2</strong>" . "<br>";
        ?>
        <a href="index1.php">Voltar</a>
    </div>
</body>

</html>