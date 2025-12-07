<!DOCTYPE html>
<html>

<body>
 <h4>Exibir se um numero e par ou impar</h4>
 <p>Num = 17</p>
<?php
  $num = 17;
  $resto = $num % 2;
  if(($num % 2) == 0){
     echo "<p style = 'color:#AA0000'><strong>Numero e par</strong></p>";
  }else {
    echo "<p style = 'color:#AA0000'><strong>Numero e impar</strong></p>";
  }
  var_dump($resto);
?>
</body>
</html>