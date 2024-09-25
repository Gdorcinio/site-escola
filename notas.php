<?php
session_start();
require_once 'banco/conexao.php'; // Conexão com o banco de dados

// Verifica se o aluno está logado
if (!isset($_SESSION['email_aluno'])) {
    header("Location: login.php"); // Redireciona para a página de login se não estiver logado
    exit();
}

$email_aluno = $_SESSION['email_aluno']; // Captura o email do aluno logado

// Busca as notas do aluno
$query = "SELECT * FROM notas WHERE email_aluno = ?";
$stmt = $connect->prepare($query);
$stmt->bind_param("s", $email_aluno);

$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>

<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>
    <?php include_once 'includes/menu.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas do Aluno</title>
    <link rel="stylesheet" href="styles.css"> <!-- CSS opcional -->
    <link rel="stylesheet" href="notas.css"> <!-- CSS opcional -->
</head>
<body>
    <header>
        <h1>Notas de <?php echo htmlspecialchars($email_aluno); ?></h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Matéria</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['materia']); ?></td>
                            <td><?php echo htmlspecialchars($row['nota']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2">Nenhuma nota encontrada.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 Escola Quintino Folhiarini Dajori. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

<script src="scripts.js"></script>
