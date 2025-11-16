<!DOCTYPE html>
<html>

<body>

  <form method="post">
    Entre com o primeiro Inteiro:</br>
    <input type="text" id="NUM1" name="NUM1" required></br>
    Entre com o segundo Inteiro:</br>
    <input type="text" id="NUM2" name="NUM2" required></br>   
    <button>Somar</button></br>
  </form>
<?php

  $NUM1 = $_POST['NUM1'];
  $NUM2 = $_POST['NUM2'];
  $SOMA = 0;

  $SOMA = $NUM1 + $NUM2;
  echo "A soma dos inteiros eh: " . $SOMA;
?>
</body>
</html>