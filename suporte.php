<!DOCTYPE html>
<html lang="pt-br">
<?php
        include_once 'includes/cabecalho.php';
    ?>
<body>

 <?include_once 'includes/cabecalho.php';?>

    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php
        include_once 'includes/menu.php';
    ?>
    <header>
        <p>Escola Milanês</p>
    </header>
    <main>
        <div class="content">
            <h1>Página de suporte</h1>
            <p>Este é o conteúdo principal da página de suporte.</p>
        </div>
        
        <footer>
            <p>&copy; 2024 Escola Milanês. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
