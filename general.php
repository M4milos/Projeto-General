<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>General</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="Imagens/favicon.ico"/>
    <?php
    $jogador = isset($_GET['jogador']) ? $_GET['jogador'] : '';
    ?>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body> 
    <div class="text-white bg-dark">
    <center>
<form method="get">
       <label for="jogador"> Digite seu nome: </label>
       <input type="text" name="jogador" id="jogador" value="<?php echo "$jogador"?>">
        <input type="submit" name="Rolar" value="Rolar"><br>

</form> 
<?php

if (isset($_GET['jogador'])){
    echo "<br>Jogador: $jogador";
    echo "<br><br>";

    //Evento de randomização de fotos por números//

    $arrayjogador = array();
    for ($i=0; $i < 5; $i++) { 
        $arrayjogador[$i] = rand(1,6);
        switch ($arrayjogador[$i]) {
            case '1':
            echo '<img id="foto" src="Imagens/lado1.png">';
                break;
            case '2':
                echo '<img id="foto" src="Imagens/lado2.png">';
                break;
            case '3':
                echo '<img id="foto" src="Imagens/lado3.png">';
                break;
            case '4':
                echo '<img id="foto" src="Imagens/lado4.png">';
            break;
            case '5':
                echo '<img id="foto" src="Imagens/lado5.png">';
            break;
            case '6':
                echo '<img id="foto" src="Imagens/lado6.png">';
            break;
            }
}
    
    //  Definição de variáveis    //

    $cont = 0; $cont2 = 0; $cont3 = 0; $cont4 = 0; $cont5 = 0; $cont6 = 0;
    $jogadas = 0; $jogadas2 = 0; $jogadas3 = 0; $jogadas4 = 0; $jogadas5 = 0; $jogadas6 = 0;
    $trinca = 0; $quadra = 0; $fullhouse = 0; $sqcb = 0; $sqca = 0; $general = 0; $aleatorio = 0; $total = 0;
    $soma = 0; $soma2 = 0; $soma3 = 0; $soma4 = 0; $soma5 = 0; $soma6 = 0; 
    
    //Achar números em array//

    foreach ($arrayjogador as $dado) {
        if ($dado == 1) {
            $cont++;
        }if ($dado == 2) {
            $cont2++;
        }if ($dado == 3) {
            $cont3++;
        }if ($dado == 4) {
            $cont4++;
        }if ($dado == 5) {
            $cont5++;
        }if ($dado == 6) {
            $cont6++;
        }

        //Duplas//

    }if ($cont > 1) {
        $jogadas = $cont;
    }if ($cont2 > 1) {
        $jogadas2 = $cont2;
    }if ($cont3 > 1) {
        $jogadas3 = $cont3;
    }if ($cont4 > 1) {
        $jogadas4 = $cont4;
    }if ($cont5 > 1) {
        $jogadas5 = $cont5;
    }if ($cont6 > 1) {
        $jogadas6 = $cont6;
    }

    //Trincas//

    if ($jogadas > 2) {
        $trinca = 20;
    }if ($jogadas2 > 2) {
        $trinca = 20;
    }if ($jogadas3 > 2) {
        $trinca = 20;
    }if ($jogadas4 > 2) {
        $trinca = 20;
    }if ($jogadas5 > 2) {
        $trinca = 20;
    }if ($jogadas6 > 2) {
        $trinca = 20;
    }

    //Quadras//

    if ($jogadas > 3) {
        $quadra = 30;
    }if ($jogadas2 > 3) {
        $quadra = 30;
    }if ($jogadas3 > 3) {
        $quadra = 30;
    }if ($jogadas4 > 3) {
        $quadra = 30;
    }if ($jogadas5 > 3) {
        $quadra = 30;
    }if ($jogadas6 > 3) {
        $quadra = 30;
    }

    //Full house//

        if ($cont == 3) {
            if ($cont2 == 2 or $cont3 == 2 or $cont4 == 2 or $cont5 == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }
    if ($cont2 == 3) {
            if ($cont == 2 or $cont3 == 2 or $cont4 == 2 or $cont5 == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }
    if ($cont3 == 3) {
            if ($cont2 == 2 or $cont == 2 or $cont4 == 2 or $cont5 == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }
      if ($cont4 == 3) {
            if ($cont2 == 2 or $cont3 == 2 or $cont == 2 or $cont5 == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }  
      if ($cont5 == 3) {
            if ($cont2 == 2 or $cont3 == 2 or $cont4 == 2 or $cont == 2 or $cont6 == 2) {
               $fullhouse = 25;
        }
    }
      if ($cont6 == 3) {
            if ($cont2 == 2 or $cont3 == 2 or $cont4 == 2 or $cont5 == 2 or $cont == 2) {
               $fullhouse = 25;
        }
    }
      
      //Sequência baixa//

    if ($cont == 1 and $cont2 == 1 and $cont3 == 1 and $cont4 == 1 and $cont5 == 1) {
        $sqcb = 40;
    }

      //Sequência alta//

    if ($cont2 == 1 and $cont3 == 1 and $cont4 == 1 and $cont5 == 1 and $cont6 == 1) {
        $sqca = 30;
    }

    //Aleatório//
        
        $aleatorio = $jogadas + $jogadas2 + $jogadas3 + $jogadas4 + $jogadas5 + $jogadas6;

    //General//

    if ($cont == 5) {
        $general = 50;
    }
    if ($cont2 == 5) {
        $general = 50;
    }
    if ($cont3 == 5) {
        $general = 50;
    }
    if ($cont4 == 5) {
        $general = 50;
    }
    if ($cont5 == 5) {
        $general = 50;
    }
    if ($cont6 == 5) {
        $general = 50;
    }

    //Total//

    $total = $jogadas + $jogadas2 + $jogadas3 + $jogadas4 + $jogadas5 + $jogadas6 + $trinca + $quadra + $fullhouse + $sqca +
    $sqcb + $aleatorio + $general;
        
        echo "<br>";
        echo "Computador";
        echo "<br>";

    $arrayComputador = array();
    for ($i=0; $i < 5; $i++) { 
        $arrayComputador[$i] = rand(1,6);
        switch ($arrayComputador[$i]) {
            case '1':
            echo '<img id="foto" src="Imagens/lado1.png">';
                break;
            case '2':
                echo '<img id="foto" src="Imagens/lado2.png">';
                break;
            case '3':
                echo '<img id="foto" src="Imagens/lado3.png">';
                break;
            case '4':
                echo '<img id="foto" src="Imagens/lado4.png">';
            break;
            case '5':
                echo '<img id="foto" src="Imagens/lado5.png">';
            break;
            case '6':
                echo '<img id="foto" src="Imagens/lado6.png">';
            break;
            }   
}
    $contpc = 0; $contpc2 = 0; $contpc3 = 0; $contpc4 = 0; $contpc5 = 0; $contpc6 = 0;
    $jogadaspc = 0; $jogadaspc2 = 0; $jogadaspc3 = 0; $jogadaspc4 = 0; $jogadaspc5 = 0; $jogadaspc6 = 0;
    $trincapc = 0; $quadrapc = 0; $fullhousepc = 0; $sqbpc = 0; $sqcapc = 0; $generalpc = 0; $aleatoriopc = 0; $totalpc = 0;

foreach ($arrayComputador as $dado) {
        if ($dado == 1) {
            $contpc++;
        }if ($dado == 2) {
            $contpc2++;
        }if ($dado == 3) {
            $contpc3++;
        }if ($dado == 4) {
            $contpc4++;
        }if ($dado == 5) {
            $contpc5++;
        }if ($dado == 6) {
            $contpc6++;
        }

        //Duplas//

    }if ($contpc > 1) {
        $jogadaspc = $contpc;
    }if ($contpc2 > 1) {
        $jogadaspc2 = $contpc2;
    }if ($contpc3 > 1) {
        $jogadaspc3 = $contpc3;
    }if ($contpc4 > 1) {
        $jogadaspc4 = $contpc4;
    }if ($contpc5 > 1) {
        $jogadaspc5 = $contpc5;
    }if ($contpc6 > 1) {
        $jogadaspc6 = $contpc6;
    }

    //Trincas//

    if ($jogadaspc > 2) {
        $trincapc = 20;
    }if ($jogadaspc2 > 2) {
        $trincapc = 20;
    }if ($jogadaspc3 > 2) {
        $trincapc = 20;
    }if ($jogadaspc4 > 2) {
        $trincapc = 20;
    }if ($jogadaspc5 > 2) {
        $trincapc = 20;
    }if ($jogadaspc6 > 2) {
        $trincapc = 20;
    }

    //Quadras//

    if ($jogadaspc > 3) {
        $quadrapc = 30;
    }if ($jogadaspc2 > 3) {
        $quadrapc = 30;
    }if ($jogadaspc3 > 3) {
        $quadrapc = 30;
    }if ($jogadaspc4 > 3) {
        $quadrapc = 30;
    }if ($jogadaspc5 > 3) {
        $quadrapc = 30;
    }if ($jogadaspc6 > 3) {
        $quadrapc = 30;
    }

    //Full house//

        if ($contpc == 3) {
            if ($contpc2 == 2 or $contpc3 == 2 or $contpc4 == 2 or $contpc5 == 2 or $contpc6 == 2) {
               $fullhousepc = 25;
        }
    }
    if ($contpc2 == 3) {
            if ($contpc == 2 or $contpc3 == 2 or $contpc4 == 2 or $contpc5 == 2 or $contpc6 == 2) {
               $fullhousepc = 25;
        }
    }
    if ($contpc3 == 3) {
            if ($contpc2 == 2 or $contpc == 2 or $contpc4 == 2 or $contpc5 == 2 or $contpc6 == 2) {
               $fullhousepc = 25;
        }
    }
      if ($contpc4 == 3) {
            if ($contpc2 == 2 or $contpc3 == 2 or $contpc == 2 or $contpc5 == 2 or $contpc6 == 2) {
               $fullhousepc = 25;
        }
    }  
      if ($contpc5 == 3) {
            if ($contpc2 == 2 or $contpc3 == 2 or $contpc4 == 2 or $contpc == 2 or $contpc6 == 2) {
               $fullhousepc = 25;
        }
    }
      if ($contpc6 == 3) {
            if ($contpc2 == 2 or $contpc3 == 2 or $contpc4 == 2 or $contpc5 == 2 or $contpc == 2) {
               $fullhousepc = 25;
        }
    }
      
      //Sequência baixa//

    if ($contpc == 1 and $contpc2 == 1 and $contpc3 == 1 and $contpc4 == 1 and $contpc5 == 1) {
        $sqcbpc = 40;
    }

      //Sequência alta//

    if ($contpc2 == 1 and $contpc3 == 1 and $contpc4 == 1 and $contpc5 == 1 and $contpc6 == 1) {
        $sqcapc = 30;
    }

    //Aleatório//
    
   $aleatoriopc = $jogadaspc + $jogadaspc2 + $jogadaspc3 + $jogadaspc4 + $jogadaspc5 + $jogadaspc6;

   //General//

    if ($contpc == 5) {
        $generalpc = 50;
    }
    if ($contpc2 == 5) {
        $generlapc = 50;
    }
    if ($contpc3 == 5) {
        $generalpc = 50;
    }
    if ($contpc4 == 5) {
        $generalpc = 50;
    }
    if ($contpc5 == 5) {
        $generalpc = 50;
    }
    if ($contpc6 == 5) {
        $generalpc = 50;
    }

    //Total//

    $totalpc= $jogadaspc + $jogadaspc2 + $jogadas3 + $jogadaspc4 + $jogadaspc5 + $jogadaspc6 + 
    $trincapc + $quadrapc + $fullhousepc + $sqcapc + $sqbpc+ $aleatoriopc + $generalpc;

    //Apresentação de dados//

    echo "<br><br>
    <table border='2' class='table table-striped table-dark'>
    <tr>
        <td>Jogadas:</td>
        <td>$jogador </td>
        <td>Computador</td>
    </tr>
    <tr>
        <td>Dupla de 1:</td>
        <td>$jogadas</td>
        <td>$jogadaspc</td>
    </tr>
    <tr>
        <td>Dupla de 2:</td>
        <td>$jogadas2</td>
        <td>$jogadaspc2</td>
    </tr>
    <tr>
        <td>Dupla de 3:</td>
        <td>$jogadas3</td>
        <td>$jogadaspc3</td>

    </tr>
    <tr>
        <td>Dupla de 4:</td>
        <td>$jogadas4</td>
        <td>$jogadaspc4</td>

    </tr>
    <tr>
        <td>Dupla de 5:</td>
        <td>$jogadas5</td>
        <td>$jogadaspc5</td>

    </tr>
    <tr>
        <td>Dupla de 6:</td>
        <td>$jogadas6</td>
        <td>$jogadaspc6</td>

    </tr>
    <tr>
        <td>Trinca:</td>
        <td>$trinca</td>
        <td>$trincapc</td>
    </tr>
    <tr>
        <td>Quadra:</td>
        <td>$quadra</td>
        <td>$quadrapc</td>
    </tr>
    <tr>
        <td>Full house</td>
        <td>$fullhouse</td>
        <td>$fullhousepc</td>
    </tr>
    <tr>
        <td>Sequencia baixa</td>
        <td>$sqcb</td>
        <td>$sqbpc</td>
    </tr>
    <tr>
        <td>Sequencia Alta</td>
        <td>$sqca</td>
        <td>$sqcapc</td>
    </tr>
    <tr>
        <td>General</td>
        <td>$general</td>
        <td>$generalpc</td>
    </tr>
    <tr>
        <td>Aleatório</td>
        <td>$aleatorio</td>
        <td>$aleatoriopc</td>
    </tr>
    <tr>
        <td>Total de pontos</td>
        <td>$total</td>
        <td>$totalpc</td>
    </tr>
    ";
    if ($total > $totalpc) {
        echo "$jogador ganhou<br>";
    }
        if ($totalpc > $total) {
           echo "Computador ganhou<br>";
        }
    if ($total == $totalpc){
        echo "Empate<br>";
    }
    
    "
    </table>";

}
?>
</center>
</div>
</body>
</html>