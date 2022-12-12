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
<body>
    <form action="" method="get">
        Digite um numero:<input type="number" name="numero"value="2"/><br>
        <input type="submit" name="submit" value="Verificar"/>
    </form>
    <?php
    $valor = $_GET['numero'];
    if ($valor % 2 == 0){
        echo "$valor é par";
    }
    else
    {
        echo "$valor é impar";
    }
    ?>
    </body>
</html>