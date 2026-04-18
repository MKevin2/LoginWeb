<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sucesso!</title>
<link rel="icon" type="image/png" href="img/icon_40x40.png">

<style>
body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #1e0a3f, #3a1c71, #0c2044);
    font-family: Arial;
    color: white;
}

/* Fonte */
@font-face {
    font-family: 'Lastica';
    src: url('../font/Lastica.ttf') format('truetype');
    font-weight: normal;
}

.box {
    background: rgba(255,255,255,0.1);
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    backdrop-filter: blur(10px);
}
</style>

</head>
<body>

<div class="box">
    <h2 style="font-family: 'Lastica', sans-serif;">Cadastro realizado<br>com sucesso</h2>
    <p style="font-family: 'Calibri', sans-serif;">Redirecionando automaticamente para o login...</p>
</div>

<script>
setTimeout(() => {
    window.location.href = '../index.html';
}, 5000);
</script>

</body>
</html>