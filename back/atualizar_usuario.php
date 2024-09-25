<?php
session_start();
// Configurações de conexão com o banco de dados
$host = 'localhost';
$dbname = 'escola';
$username = 'root';
$password = '';

try {
    // Conectar ao banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_usuario = $_SESSION['usuario_id']; // ID do usuário a ser atualizado
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        // Verificar se o e-mail já existe, ignorando o próprio e-mail do usuário
        $stmt_check = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND id != :id");
        $stmt_check->bindParam(':email', $email);
        $stmt_check->bindParam(':id', $id_usuario);
        $stmt_check->execute();

        if ($stmt_check->rowCount() > 0) {
            echo "Este e-mail já está cadastrado. Tente outro.";
        } else {
            // Preparar a consulta SQL para atualizar os dados do usuário
            $stmt = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':id', $id_usuario);

            // Executar a consulta
            if ($stmt->execute()) {
                // Redirecionar para a página principal com uma mensagem de sucesso
                header("Location: ../inicio.php?mensagem=sucesso");
                exit();
            } else {
                echo "Erro ao atualizar usuário.";
            }
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
