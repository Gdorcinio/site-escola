<nav id="sidebar">
    <ul>
        <li><a href="inicio.php">Início</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="suporte.php">Suporte</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="cadastro_usuario.php">Cadastre-se</a></li>
    </ul>
</nav>


        </ul>
    </nav>

    <?php
session_start();
if (isset($_SESSION['usuario_nome'])) {
    echo '<p class="bem-vindo">Bem-vindo, ' . $_SESSION['usuario_nome'] . '!</p>';
}


