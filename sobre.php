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
    <title>Sobre</title>
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
            <h1>Página de Sobre</h1>
            <p><p>A Escola Quintino, localizada no bairro Presidente Vargas, em Içara, é uma instituição de ensino que tem uma longa história de compromisso com a educação na região sul.</p>

            <p>Fundada com o objetivo de oferecer uma educação de qualidade para a comunidade local, a escola tem desempenhado um papel fundamental na formação de gerações de estudantes.</p>

            <p>Ao longo dos anos, a Escola Quintino passou por diversas reformas e modernizações, sempre buscando melhorar suas instalações e métodos de ensino para acompanhar as novas demandas educacionais.</p>

            <p>Hoje, a escola é conhecida pelo seu corpo docente dedicado e pelo foco no desenvolvimento integral dos alunos, promovendo tanto o aprendizado acadêmico quanto valores sociais importantes.</p>
            .</p>
        </div>
        
        <footer>
            <p>&copy; 2024 Escola quintino folhiarini dajori. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
