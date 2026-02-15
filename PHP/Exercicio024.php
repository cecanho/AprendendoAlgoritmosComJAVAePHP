<?php
echo "Áreas de figuras geométricas:";

do{ 
 echo "\nQual área calcular?";
 echo "\n1 - Quadrado.";
 echo "\n2 - Círculo.";
 echo "\n0 - Sair.\n";

$stdin = fopen ("php://stdin","r");
$C1 = fgets($stdin);


    switch($C1){
        case "1":
            echo "\nEntre com um lado do quadrado: ";
            $C1 = fgets($stdin);
            echo $C1 * $C1;
            break;
        case "2":
            echo "\nEntre com o raio do circulo: ";
            $C1 = fgets($stdin);
            echo M_PI * ($C1*$C1); 
            break;
        case "0":
            echo "\nBye!";
            break;
        default:
            echo "\nOpção inválida!";
            break;
      }
    }while($C1 != "0");
?>