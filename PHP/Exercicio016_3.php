<!DOCTYPE html>
<html charset="utf-8">

<body>
 <h4>Área do círculo (PI * r²):</h4>

 <form method="post" action="Exercicio016_3.php">
    <legend>Informe o raio:</legend>
    <input type="text" name="r" id="r"></br>
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['r'])){
      $r = $_POST['r'];
      echo "A área do círculo é: " . round(M_PI, 2) * pow($r, 2) . "</br> ";
  }
?>
<a href="Exercicio016.php">Voltar</a>
</body>
</html>