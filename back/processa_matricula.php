<?php
// Iniciar a sessão
session_start();

// Incluir a conexão com o banco de dados
require_once '../banco/conexao.php'; // Verifique se o caminho está correto

$erro = '';
$sucesso = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegar os dados do formulário
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $turma = trim($_POST['turma']);
    $comentarios = trim($_POST['comentarios']);

    // Validação simples
    if (empty($nome) || empty($email) || empty($telefone) || empty($turma)) {
        $erro = "Por favor, preencha todos os campos obrigatórios.";
    } else {
        // Preparar e executar a inserção no banco de dados
        $sql = "INSERT INTO matriculas (nome, email, telefone, turma, comentarios, data_matricula) VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $nome, $email, $telefone, $turma, $comentarios);

        if (mysqli_stmt_execute($stmt)) {
            $sucesso = "Matrícula realizada com sucesso!";
        } else {
            $erro = "Erro ao realizar a matrícula: " . mysqli_error($connect);
        }

        mysqli_stmt_close($stmt);
    }
}

// Redirecionar de volta para o formulário com mensagem de sucesso ou erro
header("Location: ../matricula.php?" . ($sucesso ? "sucesso=" . urlencode($sucesso) : "erro=" . urlencode($erro)));
exit();
?>
