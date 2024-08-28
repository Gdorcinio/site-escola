<?php
// Configurações de conexão com o banco de dados
$host = 'localhost';
$dbname = 'escola';
$username = 'root';
$password = '';

session_start();

try {
    // Conectar ao banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Preparar a consulta SQL para buscar o usuário pelo email
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Verificar se o usuário foi encontrado
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($usuario && password_verify($senha, $usuario['senha'])) {
            // Login bem-sucedido, salvar informações na sessão
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

            // Redirecionar para a página principal
            header("Location: ../index.php");
            exit();
        } else {
            // Redirecionar de volta ao login com mensagem de erro
            header("Location: ../login.php?mensagem=erro");
            exit();
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
