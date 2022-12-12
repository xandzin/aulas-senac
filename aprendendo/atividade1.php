<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body style="font-family: Helvetica;">
    <h1>Valor positivo?</h1>
    <form action="" method="get">
        Digite um numero:<input type="number" name="numero"value="2"/><br>
    <input type="submit" name="submit" value="Verificar"/>
    </form>
    
    <?php
    error_reporting(0);
    $valor = $_GET['numero'];
    if ($valor > 0){
        echo "<b>$valor é positivo</b>";
    }
    elseif ($valor == NULL){
        echo "<b>não temos um valor ainda...</b>";
    }
    elseif ($valor == 0){
        echo "<b>$valor igual a zero/valor neutro</b>";
    } 
    else {
        echo "<b>$valor é negativo</b>";
    }
    echo "<br>";
    ?>
    <div>
        <h1>Tabuada</h1>
        <form action="" method="get">
        Digite um numero e eu irei fazer um calculo que você desejar:<input type="number" name="tabuada"value="0"/><br>
        <input type="submit" name="submit" value="Multiplicar"/>
    </form>
    
    <?php
    $numtabu = $_GET['tabuada'];
    if ($numtabu > 0) {
        print $numtabu * 1;
        echo "<br>";
        print $numtabu * 2;
        echo "<br>";
        print $numtabu * 3;
        echo "<br>";
        print $numtabu * 4;
        echo "<br>";
        print $numtabu * 5;
        echo "<br>";
        print $numtabu * 6;
        echo "<br>";
        print $numtabu * 7;
        echo "<br>";
        print $numtabu * 8;
        echo "<br>";
        print $numtabu * 9;
        echo "<br>";
        print $numtabu * 10;
    }
    else
    {
        echo "<b>O valor é negativo ou não temos um valor, não é possivel ter uma tabela</b>";
    }
    ?>
    </div>
    </body>
</html>