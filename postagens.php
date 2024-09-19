<?php
// Iniciar a sessão
session_start();

// Incluir a conexão com o banco de dados
require_once 'banco/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $turma = $_POST['turma'];
    $comentarios = $_POST['comentarios'];

    // Validação simples (você pode melhorar conforme necessário)
    if (empty($nome) || empty($email) || empty($telefone) || empty($turma)) {
        $erro = "Por favor, preencha todos os campos obrigatórios.";
    } else {
        // Inserir a matrícula no banco de dados
        $sql = "INSERT INTO matriculas (nome, email, telefone, turma, comentarios) VALUES (:nome, :email, :telefone, :turma, :comentarios)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':telefone' => $telefone,
            ':turma' => $turma,
            ':comentarios' => $comentarios
        ]);

        $sucesso = "Matrícula realizada com sucesso!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>
<?php include_once 'includes/menu.php'; ?>

<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <header>
        <p>Escola Quintino Folhiarini Dajori</p>
    </header>

    <main>
        <div class="content">
            <h1>Matricule-se</h1>
            
            <?php if (isset($erro)): ?>
                <p style="color: red;"><?php echo $erro; ?></p>
            <?php endif; ?>

            <?php if (isset($sucesso)): ?>
                <p style="color: green;"><?php echo $sucesso; ?></p>
            <?php endif; ?>

            <form action="matricula.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>
                </div>

                <div class="form-group">
                    <label for="turma">Escolha a turma:</label>
                    <select id="turma" name="turma" required>
                        <option value="">Selecione uma turma</option>
                        <option value="1º Ano Fundamental">1º Ano Fundamental</option>
                        <option value="2º Ano Fundamental">2º Ano Fundamental</option>
                        <option value="3º Ano Fundamental">3º Ano Fundamental</option>
                        <option value="4º Ano Fundamental">4º Ano Fundamental</option>
                        <option value="5º Ano Fundamental">5º Ano Fundamental</option>
                        <option value="6º Ano Fundamental">6º Ano Fundamental</option>
                        <option value="7º Ano Fundamental">7º Ano Fundamental</option>
                        <option value="8º Ano Fundamental">8º Ano Fundamental</option>
                        <option value="9º Ano Fundamental">9º Ano Fundamental</option>
                        <option value="1º Ano Ensino Médio">1º Ano Ensino Médio</option>
                        <option value="2º Ano Ensino Médio">2º Ano Ensino Médio</option>
                        <option value="3º Ano Ensino Médio">3º Ano Ensino Médio</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="comentarios">Comentários Adicionais:</label>
                    <textarea id="comentarios" name="comentarios" rows="4"></textarea>
                </div>

                <button type="submit" class="submit-button">Enviar Matrícula</button>
            </form>
        </div>

        <footer>
            <p>&copy; 2024 Escola Quintino Folhiarini Dajori. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
