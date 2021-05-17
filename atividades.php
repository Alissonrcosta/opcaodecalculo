<html>
<head>
    <title>Atividades</title>
</head>
<body>
<form action="atividades.php" method="post">
    Digite um numero: <input type="text" name="num1"><br><br>
    <input type="submit" value="Testar">
</form>
<?php
    $val1 = $_POST['num1'];
    if ($val1 >= 0)
    {
        $X = $val1%2;
        if ($X==0) {
            echo "Numero par";
        }else{
            echo "Numero impar";
        }
    }
    else {
        echo "Numero negativo";
    }
    

    
?>
</body>
</html>