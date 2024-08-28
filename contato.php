<!DOCTYPE html>
<html lang="pt-br">
<?php
        include_once 'includes/cabecalho.php';

    ?>

<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php
        include_once 'includes/menu.php';
    ?>
    <header>
        <p>Escola Teste</p>
    </header>
    <main>
        <div class="content">
            <h1>Página de contato</h1>
            <p>Este é o conteúdo principal da página de contato.</p>
        </div>
        
        <footer>
            <p>&copy; 2024 Escola Milanês. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
