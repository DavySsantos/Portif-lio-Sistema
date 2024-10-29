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
    <link rel="stylesheet" href="style.css">

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
                <img src="/Dashboardpib/Cadastro-Vagas/image/dashpib.png" alt="">
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
            <main>
                <p>Listas > Lista de Empresas</p>
                <div class="cards">
                    <h1 class="form-title">Lista de Empresas</h1>
                    <div class="card-item">
                        <div class="user-input-box">
                            <div style="overflow: auto; height: 260px;">
                                <table id="customers">
                                    <tr>
                                        <th>Nome da Empresa</th>
                                        <th>Situação</th>
                                        <th>Telefone</th>
                                        <th>Responsável</th>
                                        <th>Número de Vagas</th>
                                        <th></th>
                                    </tr>
                                    <tr id="1">
                                        <td>Gillette</td>
                                        <td>
                                            <div class="situacao2"></div>
                                        </td>
                                        <td>(270)286-6745</td>
                                        <td>Alfreds Futterkiste</td>
                                        <td>17</td>
                                        <td>
                                            <div style="text-align:center">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="2">
                                        <td>IDM</td>
                                        <td>
                                            <div class="situacao1"></div>
                                        </td>
                                        <td>(570)248-5769</td>
                                        <td>Christina Berglund</td>
                                        <td>5</td>
                                        <td>
                                            <div style="text-align:center">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="3">
                                        <td>Centro comercial Moctezuma</td>
                                        <td>
                                            <div class="situacao2"></div>
                                        </td>
                                        <td>(417)621-9522</td>
                                        <td>Moctezuma</td>
                                        <td>14</td>
                                        <td>
                                            <div style="text-align:center">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="4">
                                        <td>Louis Vuitton</td>
                                        <td>
                                            <div class="situacao1"></div>
                                        </td>
                                        <td>(419)583-9962</td>
                                        <td>Ernst Handel</td>
                                        <td>6</td>
                                        <td>
                                            <div style="text-align:center">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="5">
                                        <td>Island Trading</td>
                                        <td>
                                            <div class="situacao2"></div>
                                        </td>
                                        <td>(307)543-4970</td>
                                        <td>Bessie Cooper</td>
                                        <td>12</td>
                                        <td>
                                            <div style="text-align:center">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="6">
                                        <td>The walt Disney Company</td>
                                        <td>
                                            <div class="situacao1"></div>
                                        </td>
                                        <td>(406)319-5048</td>
                                        <td>Königlich Essen</td>
                                        <td>11</td>
                                        <td>
                                            <div style="text-align:center">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="7">
                                        <td>Laughing Bacchus Winecellars</td>
                                        <td>
                                            <div class="situacao2"></div>
                                        </td>
                                        <td>(607)768-6203</td>
                                        <td>Eleonor Pena</td>
                                        <td>3</td>
                                        <td>
                                            <div style="text-align:center">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="8">
                                        <td>Magazzini Alimentari Riuniti</td>
                                        <td>
                                            <div class="situacao1"></div>
                                        </td>
                                        <td>(660)948-3229</td>
                                        <td>Jenny Wilson</td>
                                        <td>2</td>
                                        <td>
                                            <div style="text-align:center">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rodape">
                    <label for="fname">Mostrar</label>
                    <select id="country" name="country">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
        </div>
        </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>