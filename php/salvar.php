<?php
    include("db.php");

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $uf = $_POST['uf'];

    // Inserir usuário
    $sqlUsuario = "INSERT INTO tb_usuario (nome, cpf, senha)
    VALUES ('$nome', '$cpf', '$senha')";

    if ($conn->query($sqlUsuario)) {

        $codCliente = $conn->insert_id;

        // Inserir endereço
        $sqlEndereco = "INSERT INTO tb_endereco 
        (rua, numero, complemento, cep, bairro, uf, codCliente)
        VALUES 
        ('$rua', '$numero', '$complemento', '$cep', '$bairro', '$uf', '$codCliente')";

        if ($conn->query($sqlEndereco)) {
            header("Location: sucesso.php");
            exit();
        } else {
            echo "Erro no endereço";
        }

    } else {
        echo "Erro no usuário";
    }
?>