<?php
session_start(); ?>
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
        }
        ?>
        <p>Escola Milanês</p>
        
    </header>

    <main>
        <div class="content">
            <!-- Adicionando a imagem principal -->
            <div class="imagem-principal">
                <img src="img/Captura de tela 2024-09-19 190546.png " alt="Imagem Principal da Escola" class="img-escola">
            </div>

            <h1>Bem-vindo à Escola Quintino Folhiarini Dajori</h1>
            <p>Este é o portal principal da Escola  Quintino Folhiarini Dajori.</p>
            <ul>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="suporte.php">Suporte</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cadastro_usuario.php">Cadastre-se</a></li>
            </ul>
        </div>

        <footer>
            <p>&copy; 2024 Escola Quintino Folhiarini Dajori. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
