<?php
session_start();
?>
  

<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula - Escola Quintino</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include_once 'includes/menu.php'; ?>
 <header>
        <?php
        if (isset($_SESSION['usuario_nome'])) {
            echo '<p class="bem-vindo">Bem-vindo, ' . $_SESSION['usuario_nome'] . '!</p>';
        }else{
            echo 'Escola de Içara'. '!</p>';
        }
        ?>
        <p>Quintino Folhiarini Dajori</p>    
    </header>


<main>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <div class="content">
        <h1>Matrícula</h1>

        <?php if (isset($_GET['erro'])): ?>
            <div class="message error">
                <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['sucesso'])): ?>
            <div class="message success">
                <?php echo htmlspecialchars($_GET['sucesso']); ?>
            </div>
        <?php endif; ?>

        <form action="back/processa_matricula.php" method="post">
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

            <button type="submit">Enviar Matrícula</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Escola Quintino Folhiarini Dajori. Todos os direitos reservados.</p>
    </footer>
</main>

<script src="scripts.js"></script>
</body>
</html>
