<!DOCTYPE html>
<html>

<body>
 <h4>A soma deve ir até qual número?</h4>
 <form action="Exercicio018.php" method="post">
    <label>Entre com um número:</label>
    <input type="text" id="N" name="N">
    <button>Calcular</button>
 </form>

<?php
  if(isset($_POST['N'])){
    $N = $_POST['N'];
    $SOMA = 0;
    for($ACUM = 1;$ACUM <= $N;$ACUM++){
        $SOMA += $ACUM;
    }
    echo "A soma dos núm. naturais é igual a: " . $SOMA;
  }
?>
</body>
</html>