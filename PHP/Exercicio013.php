<!DOCTYPE html>
<html>

<body>
 <h4>Verificar se o numero informado e maior que 100:</h4>
 <form method="post" action="Exercicio013.php">
    <legend>Informe um valor maior que 100:</legend>
    <input type="text" name="C1" id="C1">
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['C1'])){
      $C1 = $_POST['C1'];
     
      if($C1 > 100){
        echo "<strong>VOCE CONSEGUIU!</strong>";
      }else{
          echo "<strong>" . $C1 . " nao e maior que 100.</strong>";
      }
  }
?>
</body>
</html>