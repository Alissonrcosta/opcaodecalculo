<html>
<head>
    <title>Idade</title>
</head>
<body>
<form action="idade.php" method="post">
    Digite seu nome: <input type="text" name="nome"><br><br>
    Digite sua idade: <input type="text" name="idade"><br><br>
   
    <input type="submit" value="Idade">
</form>
<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    if ($idade >= 18){
    echo "O <b>$nome</b> é maior de idade e sua idade é <b>$idade</b>";
    }else{
        echo "O <b>$nome</b> é menor de idade e sua idade é <b>$idade</b>";
    }
?>
</body>
</html>
