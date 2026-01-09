<!DOCTYPE html>
<html charset="utf-8">

<body>
 <h4>Área do triângulo (b * h):</h4>

 <form method="post" action="Exercicio016_4.php">
    <legend>Informe a base (b):</legend>
    <input type="text" name="b" id="b"></br>
    <legend>Informe a altura (h):</legend>
    <input type="text" name="h" id="h"></br>
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['b'])&&($_POST['h'])){
      $b = $_POST['b'];
      $h = $_POST['h'];
      echo "A área do triângulo é: " . $b * $h / 2 . "</br>";
  }
?>
<a href="Exercicio016.php">Voltar</a>
</body>
</html>