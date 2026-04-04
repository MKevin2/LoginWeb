<?php
    session_start();

    if (!isset($_SESSION['tb_usuario'])) {
        header("Location: landing.html");
        exit();
    }
?>

<h1>Bem-vindo, <?php echo $_SESSION['tb_usuario']; ?>!</h1>

<a href="logout.php">Sair</a>