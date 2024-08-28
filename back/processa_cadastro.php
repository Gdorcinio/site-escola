<?php
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
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografar a senha

        // Preparar a consulta SQL para inserir os dados do usuário
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        // Executar a consulta
        if ($stmt->execute()) {
            // Redirecionar para a página principal com uma mensagem de sucesso
            header("Location: ../index.php?mensagem=sucesso");
            exit();
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
