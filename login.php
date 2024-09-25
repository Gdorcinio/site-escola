<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

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
        <div class="content">
            <h1>Login</h1>
            <form action="back/processa_login.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                
                <button type="submit">Entrar</button>
            </form>

            <?php
                if (isset($_GET['mensagem']) && $_GET['mensagem'] == 'erro') {
                    echo '<p style="color: red; text-align: center;">Email ou senha inválidos!</p>';
                }
            ?>
        </div>
        
        <footer>
            <p>&copy; 2024 Escola quintino folhiarini dajori. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
