<!DOCTYPE html>
<html lang="pt-br">

<?php include_once 'includes/cabecalho.php'; ?>

<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php include_once 'includes/menu.php'; ?>
    <?php include_once 'includes/bemvindo.php'; ?>


    <main>
        <div class="content">
            <h1>Cadastro de Usuários</h1>
            <form action="back/processa_cadastro.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                
                <button type="submit">Cadastrar</button>
            </form>
        </div>
        
        <footer>
            <p>&copy; 2024 Escola Milanês. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
