<?php
if (isset($_SESSION['usuario_nome'])) {
    echo '<p class="bem-vindo">Bem-vindo, ' . $_SESSION['usuario_nome'] . '!</p>';
}
?>
