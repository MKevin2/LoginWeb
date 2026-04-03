<?php
    session_start();
    include("db.php");

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE cpf='$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if (password_verify($senha, $user['senha'])) {

            $_SESSION['usuario'] = $user['nome'];
            header("Location: home.php");

        } else {
            echo "Senha incorreta!";
            echo "<br><a href=../index.html>Voltar</a>";
        }

    } else {
        echo "Usuário não encontrado!";
        echo "<br><a href=../index.html>Voltar</a>";
    }
?>