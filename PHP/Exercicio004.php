<!DOCTYPE html>
<html>

<body>
 <h4>Exibir caso o paciente está com febre</h4>
 <p>Temperatura = 37.1</p>
 <p>Febre = 37</p>
<?php
  $temperatura = 37.1;
  $febre = 37;
  if($temperatura >= $febre){
     echo "<p style = 'color:#AA0000'><strong>Paciente com febre!</strong></p>";
  } 
  var_dump($temperatura);
?>
</body>
</html>