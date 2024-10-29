<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pib</title>
    <link rel="stylesheet" href="assets/css/style-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="login-container">
        <div class="login-img-box">
            <img class="login-img" src="assets/image/bannerpib.png" alt="Login Image">
        </div>

        <form class="login-box" method="post">
            <h1 class="login">Login</h1>
            <h3 class="login">Bem-vindo!</h3>
            <label class="etiqueta1" for="user">E-mail</label>
            <input class="login-user" name="email" type="email" id="user" placeholder="Digite seu E-mail" required>
            <label class="etiqueta2" for="password">Senha</label>
            <input class="login-password" name="senha" type="password" id="password" placeholder="Digite sua senha" required>
            <div class="opnc">
            <p class="checkbox"><input class="login-conected" type="checkbox" id="logado" >
            <label for="login-conected"> Mantenha-me conectado</label></p>
            <a class="senha-esquecida" href="#">Esqueceu sua senha?</a>
        </div>
            <button class="login-btn" type="submit">Entrar</button>
        </form>
    </div>
    <div class="alert alert-danger alerta visible-none" role="alert" data-mensagem id="alerta">
        Usuario ou senha invalidos!
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="assets/js/default.js"></script>
</body>
</html>
</html>