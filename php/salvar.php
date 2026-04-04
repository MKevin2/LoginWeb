<?php
    include("db.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $uf = $_POST['uf'];

    // Inserir usuário
    $sqlUsuario = "INSERT INTO usuario (nome, email, senha)
    VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sqlUsuario)) {

        $codCliente = $conn->insert_id;

        // Inserir endereço
        $sqlEndereco = "INSERT INTO endereco 
        (rua, numero, complemento, cep, bairro, uf, codCliente)
        VALUES 
        ('$rua', '$numero', '$complemento', '$cep', '$bairro', '$uf', '$codCliente')";

        if ($conn->query($sqlEndereco)) {
            echo "Cadastro realizado!";
            echo "<br><a href=../index.html>Voltar para tela de login</a>";
        } else {
            echo "Erro no endereço";
        }

    } else {
        echo "Erro no usuário";
    }
?>