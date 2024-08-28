<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Site com Menu Lateral</title>
</head>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php
        include_once 'includes/menu.php';
     

    ?>
    <header>
        <p>Escola Milanês</p>
    </header>
    <main>
        <div class="content">
            <h1>Página de Sobre</h1>
            <p>Este é o conteúdo principal da página de sobre.</p>
        </div>
        
        <footer>
            <p>&copy; 2024 Escola Milanês. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
