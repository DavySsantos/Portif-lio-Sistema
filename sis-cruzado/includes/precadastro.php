<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pib</title>
    <link rel="stylesheet" href="/assets/css/style-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="login-container">
        <div class="login-img-box">
            <img class="login-img" src="/assets/image/bannerpib.png" alt="Login Image">
        </div>

        <form class="login-box" action="/envio.php" method="post" onsubmit="validarFormulario(event)">
            <h1 class="login">Pré-Cadastro</h1>
            <label class="etiqueta1" for="cpfpj">CPF ou CNPJ</label>
            <input class="login-user" type="text" id="cpfpj" name="cpfpj" placeholder="Digite CPF ou CNPJ" oninput="formatDocument(this)" required>
            <label class="etiqueta1" for="name">Responsável</label>
            <input class="login-user" type="text" id="name" name="nome" placeholder="Digite seu nome" maxlength="30" required>
            <label class="etiqueta2" for="email">Email</label>
            <input class="login-user" type="email" id="email" name="email" placeholder="Digite seu email" required>
            <label class="etiqueta1" for="telefone">Telefone</label>
            <input class="login-user" type="text" id="telefone" name="telefone" placeholder="(87)91234-5678" oninput="formatarTelefone(this)" required>
            <div id="alert" class="alert alert-danger alerta visible-none">Erro: O CPF deve ter 11 dígitos e o CNPJ deve ter 14 dígitos.</div>
            <button class="login-btn" type="submit" value="Enviar" name="enviar"> Enviar</button>
        </form>
        <div class="alert alerta" role="alert" data-mensagem>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="/assets/js/default.js"></script>
</body>

</html>