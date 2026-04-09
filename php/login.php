<?php
    session_start();
    include("db.php");

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM vw_perfil_cliente WHERE cpf='$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if (password_verify($senha, $user['senha'])) {

            $_SESSION['tb_usuario'] = $user['nome'];
            header("Location: home.php");

        } else {
             header("Location: erro.php");
            exit();
        }

    } else {
        header("Location: usuario_nao_encontrado.php");
    exit();
    }
?>