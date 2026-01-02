<!DOCTYPE html>
<html>

<body>
 <h4>Area do triângulo (b*h/2):</h4>
 <form method="post" action="Exercicio012.php">
    <legend>Informe a base(b)</legend>
    <input type="text" name="b" id="b">
    <legend>Informe a altura(h)</legend>
    <input type="text" name="h" id="h">
    
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['b']) && 
     isset($_POST['h'])){
      $b = $_POST['b'];
      $h = $_POST['h'];
      echo "<strong>A area do triangulo e: " . $b * $h / 2 . "</strong>";
     }
?>
</body>
</html>