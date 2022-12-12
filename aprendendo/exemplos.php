<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Aula PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    //comentario
    echo "Ola mundo!!<br>";
    Echo "Mostra tua força brasil<br>";
    //variaveis
    $nome = "Caio Vinicius";
    $idade = "19";
    $sexo = "M";

    echo "Ola $nome<br>";
    echo "Sua idade é ".$idade." o sexo é ".$sexo."<br>";

    $num1 = 3;
    $num2 = 2;

    // Operações matematicas
    print $num1 + $num2;
    echo "<br>";
    // valor impar ou par
    $valor = 20;
    if($valor % 2 == 0) 
    { 
    print"<br>Valor Par";
    }
    else 
    {
    print"<br>Valor Impar";
    }


    ?>
</body>
</html>