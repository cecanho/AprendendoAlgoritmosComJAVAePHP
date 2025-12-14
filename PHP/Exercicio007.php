<!DOCTYPE html>
<html>

<body>
 <h4>Verificar senha</h4>
 <form method="post" action="Exercicio007.php">
    <legend>Informe a senha</legend>
    <input type="text" name="palavra" id="palavra">
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['palavra'])){
    $palavra = $_POST['palavra'];
    $senha = "123456";
    if(strcmp($palavra, $senha) == 0){
        echo "<p style = 'color:#AA0000'><strong>Acesso garantido</strong></p>";
    }
    var_dump($palavra);
  }
?>
</body>
</html>