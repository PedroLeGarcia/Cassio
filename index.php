<<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <style>
     body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
           background: linear-gradient(90deg, rgba(0,0,0,1) 5%, rgba(28,121,9,1) 39%, rgba(255,239,0,1) 88%);
        }

        h1 {
            color: white;
            font-size: 100px;
        }

        form {
            display: inline-block;
            margin-top: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: black;
            color: #fff;
            border: none;
            cursor: pointer;
            margin: 5px;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: darkgrey;
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <form method="post">
        <input type="submit" name="cadastro" value="Cadastro">
        <input type="submit" name="relatorio" value="Relatório">
        <input type="submit" name="sair" value="Sair">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["cadastro"])) {
            header("Location: cadastro.php");
            exit();
        } elseif (isset($_POST["relatorio"])) {
            // Aqui você pode redirecionar para a página de relatório
            // Por exemplo, usando header("Location: relatorio.php");
        } elseif (isset($_POST["sair"])) {
            // Aqui você pode adicionar o código para encerrar a sessão do usuário ou realizar outras ações de "sair".
            // Por exemplo, redirecionar para uma página de login com header("Location: login.php");
        }
    }
    ?>
</body>
</html>
