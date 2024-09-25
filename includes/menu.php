<nav id="sidebar">
    <ul>
        <li><a href="inicio.php">Início</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="suporte.php">Suporte</a></li>        
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="notas.php">notas</a></li>
            <li><a href="back/logout.php">Sair</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="cadastro_usuario.php">Cadastre-se</a></li>
            <li><a href="matricula.php">Matricula-se</a></li>
        <?php endif; ?>
    </ul>
</nav>




   
   <?php
   // Verifica se a sessão já foi iniciada
   if (session_status() === PHP_SESSION_NONE) {
       session_start();
   }
   ?>
   
    
