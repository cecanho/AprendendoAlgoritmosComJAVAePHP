<!DOCTYPE html>
<html charset="utf-8">

<body>
 <h4>Áreas de figuras geométricas:</h4>
 Qual área calcular?</br>
 1 - Quadrado.</br>
 2 - Retângulo.</br>
 3 - Círculo.</br>
 4 - Triângulo.</br>
 0 - Sair.</br></br>
 <form method="post" action="Exercicio016.php">
    <legend>Informe o um valor</legend>
    <input type="text" name="C1" id="C1"></br>
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['C1'])){
      $C1 = $_POST['C1'];
      switch($C1){
        case 1:
            header("Location: Exercicio016_1.php");
            break;
        case 2:
            header("Location: Exercicio016_2.php");
            break;
        case 3:
            header("Location: Exercicio016_3.php");
            break;
        case 4:
            header("Location: Exercicio016_4.php");
            break;
        case 0:
            echo "Bye!";
            break;
        default:
            echo "Opção inválida!";
      }

  }
?>
</body>
</html>