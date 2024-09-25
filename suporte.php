<?php
            session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>
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
            <h1>Página de Suporte</h1>
            <p>Se você estiver com algum problema ou dúvida, entre em contato conosco através do formulário abaixo. Estamos aqui para ajudar!</p>

            <!-- Formulário de Suporte -->
            <form action="back/processa_suporte.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

                <button type="submit">Enviar Mensagem</button>
            </form>

            <!-- Informações adicionais de suporte -->
            <section class="info-suporte">
                <h2>Informações de Contato</h2>
                <p>Telefone: (11) 1234-5678</p>
                <p>Email: suporte@escolaquintino.com.br</p>
                <p>Endereço: Rua Exemplo, 123, São Paulo - SP</p>
            </section>
        </div>

        <footer>
            <p>&copy; 2024 Escola Quintino Folhiarini Dajori. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
