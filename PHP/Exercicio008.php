<!DOCTYPE html>
<html>

<body>
 <h4>Verificar senha</h4>
 <form method="post" action="Exercicio008.php">
    <legend>Informe o nome da 1 pessoa</legend>
    <input type="text" name="nomeP1" id="nomeP1">
    <legend>Informe a idade da 1 pessoa</legend>
    <input type="text" name="idadeP1" id="idadeP1">
    <legend>Informe o nome da 2 pessoa</legend>
    <input type="text" name="nomeP2" id="nomeP2">
    <legend>Informe a idade da 2 pessoa</legend>
    <input type="text" name="idadeP2" id="idadeP2">
    <button>Verificar</button>
 </form>
<?php
  if(isset($_POST['nomeP1']) && 
     isset($_POST['idadeP1']) &&
     isset($_POST['nomeP2']) && 
     isset($_POST['idadeP2'])){
      $nomeP1 = $_POST['nomeP1'];
      $idadeP1 = $_POST['idadeP1'];
      $nomeP2 = $_POST['nomeP2'];
      $idadeP2 = $_POST['idadeP2'];
    if($idadeP1 > $idadeP2){
        echo "<p style = 'color:#AA0000'><strong>" . $nomeP1 . "</strong></p>";
    }else if($idadeP2 > $idadeP1){
         echo "<p style = 'color:#AA0000'><strong>" . $nomeP2 . "</strong></p>";
    }else{
         echo "<p style = 'color:#AA0000'><strong>Idades iguais</strong></p>";
    }
  }
?>
</body>
</html>