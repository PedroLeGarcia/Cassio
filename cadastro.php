<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data_nascimento = $_POST["data_nascimento"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

      try{// Preparando a consulta SQL para inserção dos dados
        $sql = "INSERT INTO usuarios1 (nome, email, data_nascimento, senha) VALUES (:nome, :email, :data_nascimento, :senha)";
        $consulta = $conexao->prepare($sql);

        // Executando a consulta com os valores do formulário
        $consulta->execute([
            ":nome" => $nome,
            ":email" => $email,
            ":data_nascimento" => $data_nascimento,
            ":senha" => $senha
        ]);

        echo "Registro realizado com sucesso!";
    } catch(PDOException $e){
        echo "Erro ao realizar o registro: " . $e->getMessage();
    }
}
?>

<html>
<head>
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            color: #333;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        
        }

        .form-container label,
        .form-container input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="date"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Cadastro</h1>
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
