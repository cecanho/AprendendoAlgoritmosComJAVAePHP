<!DOCTYPE html>
<html charset="utf-8">

<body>
 <h4>Área do retângulo (L x L):</h4>

 <form method="post" action="Exercicio016_2.php">
    <legend>Informe um lado:</legend>
    <input type="text" name="l1" id="l1"></br>
    <legend>Informe um lado:</legend>
    <input type="text" name="l2" id="l2"></br>
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['l1'])&&($_POST['l2'])){
      $l1 = $_POST['l1'];
      $l2 = $_POST['l2'];
      echo "A área do retângulo é: " . $l1 * $l2 . "</br> ";
  }
?>
<a href="Exercicio016.php">Voltar</a>
</body>
</html>