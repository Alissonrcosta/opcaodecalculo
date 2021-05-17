<html>
    <head>
        <title>Média</title>
    </head>
    <body>
        <form action="professor.php" method="POST">
            <label>Nome do Aluno</label><input type="text" name="nome"><br><br>
            <label>Nota 1:</label><input type="text" name="nota1"><br><br>
            <label>Nota 2:</label><input type="text" name="nota2"><br><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
            if(isset($_POST['nome']))
            {
                $nome = $_POST['nome'];
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $media = ($nota1 + $nota2) / 2;
                if($media >= 6)
                {
                    echo "O(a) aluno(a), <b>$nome</b> passou com média: <b>$media</b>";
                }
                else
                {
                    echo "O(a) aluno(a), <b>$nome</b> não passou com média: <b>$media</b>";
                }
            }
            else
            {
                $nome = "";
            }
        ?>
    </body>
</html>