<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Média com For</title>
</head>
<body>
    <form method="post" action="Exercicio019.php">
        <label>Quantas notas de alunos inserir?</label>
        <input type="text" name="LIMITE" id="LIMITE" size="1" required>
        <button>Enviar</button>
    </form>
    <hr>
    <?php
    if(isset($_POST['LIMITE'])){
        $LIMITE = $_POST['LIMITE'];
        echo "<form method='post' action='Exercicio019.php'>";
        echo "<input type='text' name='LIMITE' id='LIMITE' size='1' value='$LIMITE' hidden>";
        for($i = 1;$i <= $LIMITE;$i++){
            echo "<br><label>Aluno $i </label>";
            echo "<input type='text' name='nota$i' id='nota$i' size='1' value='0.0'><br>";
        }
        echo "<br><button>Enviar</button><hr></form>";
    }
    
    $soma = 0.0;

    if(isset($_POST['LIMITE'])&&
    isset($_POST['nota1'])){
        $LIMITE = $_POST['LIMITE'];
        for($i = 1;$i <= $LIMITE;$i++){
            $soma += $_POST["nota$i"];
        }
        echo "A média das notas dos alunos é: " . number_format($soma/$LIMITE, 1, ',','.');
    }
    ?>
</body>
</html>
