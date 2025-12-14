<!DOCTYPE html>
<html>

<body>
 <h4>Verificar se pessoa é menor de idade</h4>
 <form method="post" action="Exercicio006.php">
    <legend>Informe a idade</legend>
    <input type="text" name="idade" id="idade">
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['idade'])){
    $idade = $_POST['idade'];
    if($idade < 18){
        echo "<p style = 'color:#AA0000'><strong>Menor de idade</strong></p>";
    }
    var_dump($idade);
  }
?>
</body>
</html>