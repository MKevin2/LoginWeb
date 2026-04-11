<?php
    session_start();
    include("db.php");

    $cpf = $_POST['cpf'];
    $senha = trim($_POST['senha']);

    $sql = "SELECT * FROM usuario WHERE cpf='$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

       if ($senha === $user['senha']) {

            $_SESSION['usuario'] = $user['nome'];
            header("Location: home.php");

        } else {
            header("Location: erro.php");
            exit();
        }

    } else {
        header("Location: usuario_nao_encontrado.html");
        exit();
    }
?>