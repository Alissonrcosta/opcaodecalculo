<html>
<head>
    <title>Atividades</title>
</head>
<body>
<form action="soma.php" method="post">
    Digite seu nome: <input type="text" name="nome"><br><br>
    Digite 1 - Feminimo e 2 - Masculino: <input type="text" name="sexo"><br><br>
    Digite sua Idade: <input type="text" name="idade"><br><br>
    <input type="submit" value="Verificar">
</form>
<?php
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    if ($idade <= 25 && $sexo == 2) 
    {
        echo "Aceita";
    }else{
            
            echo "NÃO ACEITA";
    }
?>
</body>
</html>