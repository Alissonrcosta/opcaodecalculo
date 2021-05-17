<html>
<head>
    <title>Exe8</title>
    <h2>Opção de Operação Matematica</h2>
    <hr/>
</head>
<body>
<form action="exe8.php" method="post">
    Digite 1º numero: <input type="text" name="num1"><br><br>
    Digite 2º numero: <input type="text" name="num2"><br><br>
    Digite 1 - Somar, 2 - Subtrair, 3 - Dividir, 4 - Multiplicar: <input type="text" name="op"><br><br>
    <input type="submit" value="Calcular">
</form>
<?php
    if(isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
    $resultado;
    if ($op == 1) 
        {
        $resultado = $num1 + $num2;
        }elseif ($op == 2){
        $resultado = $num1 - $num2;
        }elseif ($op == 3){
        $resultado = $num1 / $num2;
        }elseif ($op == 4){
        $resultado = $num1 * $num2;
    }else{  
        echo "Opção Invalida";
    }
        echo "Resultado $resultado"; 
    if ($resultado % 2 == 0){
        echo " PAR";
        }else{
        echo " IMPAR - ";
    }
    if ($resultado >= 0){
        echo " POSITIVO - ";
        }else{
        echo "NEGATIVO - ";
    }
    if (is_int($resultado)){
        echo " INTEIRO";
    }else{
        echo " DECIMAL ";
    }
}else{
    $num1 = "";
}
?>
</body>
</html>