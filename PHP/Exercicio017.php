<!DOCTYPE html>
<html>

<body>
 <h4>Quantos impares tem de 5 a 36?</h4>

<?php
  $V;
  $IMPARES = 0;
  for($V = 5;$V <= 36;$V+=2){
    $IMPARES++;
  }
  echo "Temos " . $IMPARES . " impares entre 5 e 36."
?>
</body>
</html>