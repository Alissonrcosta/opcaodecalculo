<html>
<head>
    <title>Média</title>
</head>
<body>
<form action="media.php" method="post">
    <label>Nota1:</label> <input type="text" name="num1"><br><br>
    <label>Nota2:</label> <input type="text" name="num2"><br><br>
    <label>Nota3:</label> <input type="text" name="num3"><br><br>
    <input type="submit" value="Média">
</form>
<?php
    if(isset($_POST['num1']))
    {
        $val1 = $_POST['num1'];
        $val2 = $_POST['num2'];
        $val3 = $_POST['num3'];
        $media = ($val1 + $val2 + $val3) / 3;
        echo "O resultado da média foi: <b>$media</b>.";
    }
    else
    {
        $val1 = "";
        $val2 = "";
        $val3 = "";
    }
?>
</body>
</html>