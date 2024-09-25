<?php
session_start();
require_once '../banco/conexao.php'; // Corrigir o caminho para acessar a pasta correta

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ../login.php');
    exit();
}

// Obtém o ID do usuário da sessão
$usuario_id = $_SESSION['usuario_id'];

// Prepara a exclusão do usuário
$stmt = $connect->prepare("DELETE FROM notas WHERE email_aluno = ?");
$stmt->bind_param('i', $_SESSION['email_aluno']);
$stmt->execute();

// Prepara a exclusão do usuário
$stmt = $connect->prepare("DELETE FROM usuarios WHERE id = ?");
$stmt->bind_param('i', $usuario_id);
$stmt->execute();

// Verifica se a exclusão foi bem-sucedida
if ($stmt->affected_rows > 0) {
    // Exclui a sessão e redireciona para a página inicial
    session_destroy();
    header('Location: ../inicio.php');
    exit();
} else {
    echo "Erro ao excluir a conta.";
}
?>
