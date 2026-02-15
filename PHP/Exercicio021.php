<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h3>Exercício 021</h3>
    <hr>
    <?php
    if(!isset($_POST['controle'])){
        echo "<form method='post' action='Exercicio021.php'> 
        <label>Digite s para encerrar:</label> 
        <input type='text' name='controle' id='controle' size='1' required> 
        <button>Enviar</button>
        </form>";
    }else{
        $controle = $_POST['controle'];
        if(isset($_POST['quantidade'])){
            $quantidade = $_POST['quantidade'];
            $quantidade++;
        }else{
            $quantidade = 0;
        }

        if(isset($_POST['soma'])){
            $soma = $_POST['soma'];
            $soma += $_POST['N'];
        }else{
            $soma = 0;
        }

        if(isset($_POST['N'])){
            $N = $_POST['N'];
        }else{
            $N = 0;
        }
       
        while($controle!="s"){            
            echo "<form method='post' action='Exercicio021.php'> 
            <label>Entre com um número inteiro:</label> 
            <input type='text' name='N' id='N' size='1' required> 
            <label>Digite s para encerrar:</label> 
            <input type='text' name='controle' id='controle' size='1' required> 
            <input type='text' name='quantidade' id='quantidade' value='$quantidade' hidden>
            <input type='text' name='soma' id='soma' value='$soma' hidden>
            <button>Enviar</button>
            </form>"; 
            $controle = "s";                    
        }
        if(isset($_POST['quantidade'])){
            echo "A média dos números lidos é: " . $soma/$quantidade . "<br />";
            echo "A quantidade de números lidos foi: " . $quantidade . "<br />";
            echo "A soma dos números lidos foi: " . $soma;
        }
    }
    ?>
</body>
</html>