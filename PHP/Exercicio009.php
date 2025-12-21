<!DOCTYPE html>
<html>

<body>
 <h4>Qual o tipo de triângulo</h4>
 <form method="post" action="Exercicio009.php">
    <legend>Informe o 1o valor</legend>
    <input type="text" name="C1" id="C1">
    <legend>Informe o 2o valor</legend>
    <input type="text" name="C2" id="C2">
    <legend>Informe o 3o valor</legend>
    <input type="text" name="C3" id="C3">
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['C1']) && 
     isset($_POST['C2']) &&
     isset($_POST['C3'])){
      $C1 = $_POST['C1'];
      $C2 = $_POST['C2'];
      $C3 = $_POST['C3'];

      if(($C1 == $C2) && ($C2 == $C3)){
        echo "<strong>Triangulo Equilatero!</strong>";
      }else if(($C1 == $C2) || ($C2 == $C3) || ($C1 == $C3)){
            echo "<strong>Triangulo Isosceles!</strong>";
      }else if(($C1 != $C2) && ($C2 != $C3)){
                echo "<strong>Triangulo Escaleno!</strong>";
      }
  }
?>
</body>
</html>