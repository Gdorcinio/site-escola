<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include_once 'includes/cabecalho.php'; ?>
<?php include_once 'includes/menu.php'; ?>

<?php
// Conectar ao banco de dados
require_once 'banco/conexao.php';

// Buscar todas as turmas
$stmt = $pdo->query('SELECT * FROM turmas');
$turmas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <header>
        <p>Escola Quintino Folhiarini Dajori</p>
    </header>

    <main>
        <div class="content">
            <h1>Turmas Disponíveis</h1>
            
            <?php if ($turmas): ?>
                <table class="turmas-table">
                    <thead>
                        <tr>
                            <th>Nome da Turma</th>
                            <th>Professor Responsável</th>
                            <th>Número de Alunos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($turmas as $turma): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($turma['nome']); ?></td>
                                <td><?php echo htmlspecialchars($turma['professor']); ?></td>
                                <td><?php echo htmlspecialchars($turma['numero_alunos']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Não há turmas cadastradas no momento.</p>
            <?php endif; ?>
        </div>
        
        <footer>
            <p>&copy; 2024 Escola Quintino Folhiarini Dajori. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
