<html>
<head>
    <title>Média</title>
</head>
<body>
<form action="aula2.php" method="post">
    Nota1: <input type="text" name="num1"><br><br>
    Nota2: <input type="text" name="num2"><br><br>
    Nota3: <input type="text" name="num3"><br><br>
    <input type="submit" value="Média">
</form>
<?php
    $val1 = $_POST['num1'];
    $val2 = $_POST['num2'];
    $val3 = $_POST['num3'];
    $media = ($val1 + $val2 + $val3) / 3;
    echo "O resultado da média foi: <b>$media</b>.";
?>
</body>
</html>
