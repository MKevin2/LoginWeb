<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Senha Incorreta</title>
<link rel="icon" type="image/png" href="img/icon_40x40.png">
<link rel="stylesheet" href="css/style.css">

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
    background: rgba(192, 67, 67, 0.53);
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    backdrop-filter: blur(10px);
}
</style>

</head>
<body>

<div class="box">
    <h2 style="font-family: 'Lastica', sans-serif;">Falha no Login,<br>Senha incorreta!</h2>
    <p style="font-family: 'Calibri', sans-serif;">Redirecionando automaticamente <br>para uma nova tentativa...</p>
</div>

<script>
setTimeout(() => {
    window.location.href = '../index.html';
}, 5000);
</script>

</body>
</html>