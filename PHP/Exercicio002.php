<!DOCTYPE html>
<html>

<body>

  <form method="post">
    Entre com o primeiro Inteiro:</br>
    <input type="text" id="NUM1" name="NUM1" required></br>
    Entre com o segundo Inteiro:</br>
    <input type="text" id="NUM2" name="NUM2" required></br>   
    <button>Trocar</button></br>
  </form>
<?php

  $NUM1 = $_POST['NUM1'];
  $NUM2 = $_POST['NUM2'];
  
  $AUX = $NUM1;
  $NUM1 = $NUM2;
  $NUM2 = $AUX;

  echo "O valor de NUM1 = " . $NUM1 . "</br>";
  echo "O valor de NUM2 = " . $NUM2 . "</br>";
?>
</body>
</html>