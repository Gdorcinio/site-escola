<!DOCTYPE html>
<html lang="pt-br">
<?php
    include_once 'includes/cabecalho.php';
?>
<body>
    
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php
        include_once 'includes/menu.php';
       


        // Exibir a mensagem de sucesso, se existir
        if (isset($_GET['mensagem']) && $_GET['mensagem'] == 'sucesso') {
            echo '<p style="color: green; text-align: center;">Usuário cadastrado com sucesso!</p>';
        }
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
