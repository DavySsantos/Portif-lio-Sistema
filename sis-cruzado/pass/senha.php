<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title>DahsPib</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style-home.css">

</head>

<body>
    <div class="bar">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="alt-bnt" type="button">
                    <i class="lni lni-menu"></i>
                </button>
            </div>
            <div class="sidebar-logo">
                <img src="/Dashboardpib/Cadastro-Vagas/img/dashpib.png" alt="">
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/Dashboardpib/HomePage/index.html" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                        data-bs-target="#cadastrar" aria-expanded="false" aria-controls="cadastrar">
                        <i class="lni lni-pencil-alt"></i>
                        <span>Cadastro</span>
                    </a>
                    <ul id="cadastrar" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/Dashboardpib/Cadastro-Pessoal/index.html" class="sidebar-link">Pessoa</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/Dashboardpib/Cadastro-Empresas/index.html" class="sidebar-link">Empresa</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                        data-bs-target="#list" aria-expanded="false" aria-controls="list">
                        <i class="lni lni-clipboard"></i>
                        <span>Administrativo</span>
                    </a>
                    <ul id="list" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">item1</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">item2</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">item3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="main p-3">
            <header>
                <h2>
                    <div class="dashboard-name">
                        Olá, <span class="nome"><strong>João</strong></span>
                        <br>
                        <h4>Bem vindo a sua conta</h4>
                    </div>
                </h2>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Busque aqui" />
                </div>

                <div class="user-wrapper">
                    <div class="dropdown" style="float:right;">
                        <img src="/Dashboardpib/Cadastro-Vagas/img/png 1.jpg" alt="" class="dropbtn">
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Configuração<i class="lni lni-cog"></i></a>
                            <a href="#">Log out<i class="lni lni-exit"></i></a>
                        </div>
                    </div>
                </div>
            </header>
            <main style="overflow: auto; height: 400px;">
                <p>Configurações > Alterar senha</p>
                <div class="cards">
                    <h1 class="form-title">Alteração de senha</h1>
                    <form action="#">
                        <div class="card-item">
                            <div class="user-input-box">
                                <label for="fname">Senha atual</label>
                                <input type="password" id="fname" name="senhaatual" placeholder="Senha atual"><br><br>
                                <label for="fname">Nova senha</label>
                                <input type="password" id="fname" name="novasenha" placeholder="Nova senha">
                                <label for="fname">Confirmar nova senha</label>
                                <input type="password" id="fname" name="confirmação" placeholder="Confirmar nova senha">
                            </div>
                        </div>
                        <div class="Salvar">
                            <input class="btn btn-success" type="submit" value="Alterar">

                            <input class="btn btn-danger" type="submit" value="Cancelar">
                        </div>
                    </form>
                </div>
        </div>
        </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>