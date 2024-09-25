<!DOCTYPE html>
<html lang="pt-br">

<?php include_once 'includes/cabecalho.php'; ?>

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

    <?php include_once 'includes/bemvindo.php'; ?>


    <main>
        <div class="content">
            <h1>Cadastro de Alunos</h1>
            <form action="back/processa_cadastro.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
        
        <footer>
            <p>&copy; 2024 Escola quintino folhiarini dajori</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
