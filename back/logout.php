<?php
session_start();

// Destrói a sessão e redireciona para a página de login
session_unset(); // Remove todas as variáveis de sessão
session_destroy(); // Destroi a sessão

header('Location: ../login.php');
exit();
?>
