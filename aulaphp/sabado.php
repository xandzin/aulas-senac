<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atividade PHP Sabado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid bg-dark text-white p-5">
    <div class="container border">
            <div class='header'>
                <h1>Defines PHP</h1>
                <p>Aqui é onde eu defino constâncias</p>
                <?php
                define("MAG", "Letra maiuscula");
                define("italo", "italinho");
                define("NOMES", ["Igão","Carlos","Julia","Agatha","Leitinho de Mamãe"]);
                ?>
                <p><?php echo MAG;?></p>
                <p><?php echo italo?></p>
                <p><?php echo NOMES[2]?></p>
    </div>
    <div class="container border">
        <h1>Calculos PHP</h1>
        <p>x = 30 e Y = 15</p>
        <?php
        $x = 30;
        $y = 15;
        ?>
        <h6>Soma +</h6>
        <p><?php echo $x + $y; ?></p>
        <h6>Subtração -</h6>
        <p><?php echo $x - $y; ?></p>
        <h6>Multiplicação *</h6>
        <p><?php echo $x * $y; ?></p>
    </div>
    <div class="container border">
        <h1>IF,Else e Elseif PHP</h1>
        <p>Sistema de bom dia se for antes de 12h meio dia</p>
        <h6>Bom dia ou boa noite agora?</h6>
        <p>
            <?php
            $t = date("H");
            if ($t > "12"){ echo "Bom dia!!😁";} 
            else { echo "Boa noite !!😴";}
            ?>
        </p>
    </div>
    <div class="container border">
        <h1>Switch PHP</h1>
        <p>Aqui coloquei uma determinada informação e ele me retorna um resultado</p>
        <p>Ex: br </p>
        <?php
        $lugar = "br";
        switch ($lugar)
        {
            case "br":
                echo "Você mora no Brasil";
            break;
            case "in";
                echo "Você mora na India";
            break;
            case "usa":
                echo "Você mora nos Estados Unidos";
            break;
        }
        ?>
    </div>
    <div class="container border">
        <h1>PHP Loops</h1>
        <p>Multiplicando 1 por 2 ate tentar ou chegar a 100</p>
        <?php
        for ($p = 1; $p <= 100; $p *= 2)
        {
            echo "$p <br>";
        }
        ?>

    </div>
    <div class="container border">
        <h1>Functions PHP</h1>
        <p>Chama função writeMsg</p>
        <?php
        function writeMsg() {
            echo "Função de escrever mensagem";
        }
        writeMsg();
        ?>
    </div>
    <div class="container border">
        <h1>Arrays PHP</h1>
        <p>Chama as array</p>
        <?php
        $comidas = array("Frango,arroz e carne");
        echo "Eu gosto de " . $comidas[0];
        ?>
    </div>
    <div class="container border">
        <h1>PHP SuperGlobals</h1>
        <p>Chama uma request</p>
        <p>Request que pede o nome do arquivo onde é executado</p>
        <?php
        $arquivo = $_SERVER['PHP_SELF'];
        echo $arquivo;
        ?>
    </div>
    <div class="container border">
        <h1>PHP Regex</h1>
        <p>Procura uma expressão regular de uma frase</p>
        <p>Aqui esta contando os numeros de uma frase</p>
        <h3>ney4ar 3sta a d1rmir</h3>
        <?php
         $frase = "ney4ar 3sta a d1rmir";
         $busca = "[\d]";
        echo preg_match_all($busca, $frase); //
        ?>
    </div>
</div>
</body>
</html>