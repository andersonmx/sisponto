<doctype html>

<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
    body {background-image: URL("http://i66.tinypic.com/67qdqf.jpg"); background-repeat: no-repeat; background-size: 100%;}
        .centralizer {
        width: 100%;
        text-align: center;
        margin-top: 250px;
    }

    .centralizer h2 {
        color: #f3f3f3;
        font-family: 'Ubuntu', sans-serif;
        text-shadow: 1px 1px 2px rgba(25,25,25,0.7);
    }

    .centralizer h2 a {
        text-decoration: none;
        color: #979797;
    }

    .centralizer h2 a:hover {
        color: #575757;
    }


        /*           BARRA SUPERIOR           */
        * { margin: 0px; padding: 0px; border: 0px; }
            .navbar {
                position: absolute;
                top: 0;
                width: 99.3%;
                background: rgba(0, 0, 0, 0.8);
                height: 67px;
                padding-left: 10px;
                border-bottom: 2px solid rgba(130, 130, 130, 0.7);
            }
            .navbar .group h2, a {
                margin: 0px;
                padding: 0px;
            }

            .navbar .group h2 {
                color: #f3f3f3;
                line-height: 43px;
            }

            .navbar .group a {
                text-decoration: none;
                color: #f3f3f3;
                font-size: 1.3em;
            }

            .navbar .group a:hover {
                color: #979797;
            }
            
            .nav-menu {
                list-style: none;
                right: 25px;
                top: 25px;
                position: absolute;
            }

            ul li {
                display: inline-block;
                margin-left: 7px;
            }

            ul li a {
                text-decoration: none;
                color: #f3f3f3;
                font-size: 1.2em;
            }


            ul li a:hover {
                color: #979797;
            }
    </style>
</head>

<body>
<div class="navbar">
        <div class="group">
            <h2>Olá {{session('usuario')}}</h2>
            <a href="{{route('logout')}}">Sair</a>
        </div>


        <ul class="nav-menu">
            <li><a href="/welcome">Início</a></li>
            <li><a href="/registrarponto">Bater Ponto</a></li>
            <li><a href="/funcionarios">Funcionários</a></li>
            <li><a href="/userrelatorios">Relatórios</a></li>
        <ul>
    </div>


<div class="centralizer">
    <h2>Sua Entrada foi registrada com sucesso!</h2>
    <h2><a href="/welcome">voltar a Tela Inicial</a></h2>
</div>


</html>