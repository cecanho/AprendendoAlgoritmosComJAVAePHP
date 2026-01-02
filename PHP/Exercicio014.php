<!DOCTYPE html>
<html>

<body>
 <h4>Qual o maior valor?</h4>
 <form method="post" action="Exercicio014.php">
    <legend>Informe o 1o valor</legend>
    <input type="text" name="C1" id="C1">
    <legend>Informe o 2o valor</legend>
    <input type="text" name="C2" id="C2">
    <button>Verificar</button>

 </form>
<?php
  if(isset($_POST['C1']) && 
     isset($_POST['C2'])){
      $C1 = $_POST['C1'];
      $C2 = $_POST['C2'];

      if($C1 > $C2){
        echo "<strong>N1=" . $C1 . " e maior que N2=" . $C2 . "</strong>";
      }else if($C2 > $C1){
          echo "<strong>N2=" . $C2 . " e maior que N1=" . $C1 . "</strong>";
      }else{
        echo "<strong>IGUAIS!</strong>";
      }
  }
?>
</body>
</html>