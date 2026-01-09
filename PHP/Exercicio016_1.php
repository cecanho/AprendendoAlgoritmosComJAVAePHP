<!DOCTYPE html>
<html charset="utf-8">

<body>
 <h4>Área do quadrado (L x L):</h4>

 <form method="post" action="Exercicio016_1.php">
    <legend>Informe o um lado:</legend>
    <input type="text" name="l1" id="l1"></br>
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['l1'])){
      $l1 = $_POST['l1'];
      echo "A área do quadrado é: " . $l1 * $l1 . "</br>";
  }
?>
<a href="Exercicio016.php">Voltar</a>
</body>
</html>