<!DOCTYPE html>
<html>

<body>
 <h4>Calcular a média de 4 números</h4>
 <p>NUM1 = 5</p>
 <p>NUM2 = 3</p>
 <p>NUM3 = 8</p>
 <p>NUM4 = 10</p>

<?php
  $NUM1 = 5;
  $NUM2 = 3;
  $NUM3 = 8;
  $NUM4 = 10;

  $MA = ($NUM1 + $NUM2 + $NUM3 + $NUM4) / 4;

  echo "A média é: <code><strong>" . $MA . "</strong></code></br>";
  var_dump($MA);
?>
</body>
</html>