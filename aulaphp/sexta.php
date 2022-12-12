<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atividade PHP Sexta</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="text-white bg-primary">
    <div class="container-fluid p-5 bg-dark text-white border border-5">
        <h1>Sexta com PHP</h1>
        <div class="border rounded-3">
            <h1>PHP Echo</h1>
            <p>Aqui é usado o <b>echo</b> em que exibe uma ou mais strings</p>
            <p>Nos traz uma saída do código<br>Exemplo 2 + 5 =</p>
            <?php
            echo 2 + 5;
            echo"<br>";
            echo "Sexta animada";
            ?>
        </div>
        <div>
            <?php
            /*
            Aqui tenho comentarios feito no PHP
            Que são visiveis apenas no código PHP
            Posso deixar informações do que executa aqui
            Posso deixar uma parte do código de fora para testes
            */
            ?>
        </div>
        <div class="border rounded-3">
            <h1>Variáveis PHP</h1>
            <?php
            $texto="Aqui eu criei uma variavel chamada texto e coloquei ela logo em seguida a chamo com o echo<br>";
            echo $texto;
            function abóboras()
            {
                echo "Função abóboras chamada e trazendo mensagem 😎";
            }
            abóboras();
            ?>
            <p>Logo em seguida é criada uma função chamada abóboras e ela é chamada</p>
        </div>
        <div class="border rounded-3">
            <h1>PHP Data Types</h1>
            <p><b>String</b> é um texto que tanto pode ser composto por letras quanto números<br>Exemplo:</p>
            <?php
            $string = "Esta daqui é uma String";
            echo $string;
            ?>
            <p><br><b>Integer</b> é qualquer número decimal de -2,147,483,648 a 2,147,483,647<br>Exemplo:</p>
            <?php
            $integer = 777;
            var_dump($integer);
            ?>
            <p><br><b>Arrays</b><br>Arrays nos guarda várias informações<br>Exemplo:</p>
            <?php
            $array = array("Soares", "Moreno", "Valadares", "Calvacante");
            var_dump($array);
            ?>
            <p><b>PHP Object</b></p>
            <p>Aqui foi criado uma classe orientada a objeto chamado caixa que contém o sabor e a cobertura </p>
            <p>Que quando criados com objetos individuias eles herdam as caracteristicas e organização das classe caixa que é Sabor e Cobertura, é criada uma função para isto</p>
            <p>É como se eu cadastra-se uma receita de bolo no qual eu jogo os ingredientes e eles são organizados de acordo com a "receita"</p>
            <?php
            class caixa {
                public $sabor;
                public $cobertura;
                public function __construct($sabor, $cobertura) {
                    $this->sabor = $sabor;
                    $this->cobertura = $cobertura;
                }
                public function message() { 
                    return "O Sorvete é de:<br>".$this->sabor." com ".$this->cobertura."!";
                }
            }
            $caixa = new caixa("Flocos", "Chocolate");
            echo $caixa->message();
            echo"<br>";
            $caixa = new caixa("Abacaxi", "Leite Condensado");
            echo $caixa->message();
            echo"<br>";
            $caixa = new caixa("Morango", "Calda de Maracujá");
            echo $caixa->message();
            ?>
            <p><b>NULL</b></br>Pode ser usado para apagar variáveis ou dar um valor vazio</p>
            <p><b>PHP Resource</b><br>Nos traz uma leitura de arquivo de fora do nosso código, seja local ou online</p>
        </div>
        <div class="border rounded-3">
            <h1>PHP Strings</h1>
            <p>São funções que nos retornam contagem das linhas ou caracteres de uma linha</p>
            <p><b>strlen</b> que conta o tamanho da string ate aonde ela vai<br>Exemplo(Caio):</p>
            <?php
            echo strlen("Caio")
            ?>
            <p><b>str_word_count</b> é usado para contar quantas palavras tem em uma linha</p>
            <p>Exemplo(O aprendizado se vem da necessidade.):</p>
            <?php
            echo str_word_count("O aprendizado se vem da necessidade.")
            ?>
            <p><b>sttrev</b> Faz o reverse da string<br>Exemplo(Caio):</p>
            <?php
            echo strrev("Caio");
            ?>
            <p>Existe vários tipos, mas todos envolvem strings, seja contagem de caracteres ate a alteração delas</p>
        </div>
        <div class="border rounded-3">
            <h1>PHP Numbers e MATH</h1>
            <p><b>Integers</b> obedecem regras de não possuir números decimais com "," e tem que possuir um dígito<br>Exemplo:</p>
            <?php
            echo $integer
            ?>
            <p><b>Float</b> é um número com ","<br>Aqui pergunta se o número é float verdadeiro ou falso<br>Exemplo:</p>
            <?php
            $float = 33.365;
            echo $float;
            echo "<br>";
            var_dump(is_float($float));
            ?>
            <p><b>PHP infinity</b><br>Aqui checar se é um número infinito ou finito<br>Exemplo(1.6e431):</p>
            <?php
            $infinito = 1.6e431;
            var_dump($infinito);
            ?>
            <p>Aqui temos o retorno do valor pi através do echo(pi());</p>
            <?php
            echo(pi());
            ?>
            <p>É temos muitos e muitos exemplos por ai</p>
        </div>
        <h1>FIM</h1>
    </div> 
</body>
</html>