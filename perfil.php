<?php
session_start();
require_once 'banco/conexao.php'; // Certifique-se de que o caminho está correto

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit();
}

// Obtém os dados do usuário da sessão
$usuario_id = $_SESSION['usuario_id'];

// Busca os dados do usuário no banco de dados com MySQLi
$stmt = $connect->prepare("SELECT nome, email FROM usuarios WHERE id = ?");
$stmt->bind_param('i', $usuario_id); // 'i' indica que o parâmetro é um número inteiro
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();

// Verifica se o usuário foi encontrado
if (!$usuario) {
    echo "Usuário não encontrado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>

<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>
    <?php include_once 'includes/menu.php'; ?>

    <main>
        <div class="content">
            <h1>Perfil do Usuário</h1>
            <form action="back/processa_atualizacao.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($usuario['nome']); ?>" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($usuario['email']); ?>" required>
                
                <label for="senha">Nova Senha (opcional):</label>
                <input type="password" id="senha" name="senha">
                
                <button type="submit">Atualizar Dados</button>
            </form>

            <h2>Excluir Conta</h2>
            <form action="back/processa_exclusao.php" method="POST">
                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir sua conta?')">Excluir Conta</button>
            </form>
        </div>

        <footer>
            <p>&copy; 2024 Escola Milanês. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
