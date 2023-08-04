<?php
$dsn = "mysql:host=localhost;dbname=aula1";
$usuario = "root";
$senha_banco = "";
try {
    // Conectando ao banco de dados usando PDO
    $conexao = new PDO($dsn, $usuario, $senha_banco);

    // Definindo o modo de erro para exceção
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    die(); // Encerrar a execução do script em caso de falha na conexão
}
?>