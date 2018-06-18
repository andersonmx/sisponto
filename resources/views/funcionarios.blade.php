<doctype html>

<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
    body {background-image: URL("http://i66.tinypic.com/67qdqf.jpg"); background-repeat: no-repeat; background-size: 100%;}
        .centralizer {
            width: 300px;
            text-align: center;
            margin: auto;
            margin-top: 250px;
        }

        .centralizer ul {
            list-style: none;
        }

        .centralizer ul li {
            margin-top: 7px;
            color: #f3f3f3;
            text-shadow: 1px 1px 2px rgba(25,25,25,0.7);
        }

        .centralizer ul li a {
            margin-left: 5px;
            text-decoration: none;
            color: #575757;
            text-shadow: 1px 1px 2px rgba(150,150,150,0.7);
        }


        .centralizer .return {
            padding: 5px 15px;
            margin-top: 15px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            border: none;
            background: #313131;
            color: #f3f3f3;
            cursor: pointer;
            box-shadow: 1px 1px 2px rgba(35,35,35,0.7);
        }

        .centralizer .return:hover {
            color: #000;
            background: #f3f3f3;
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
        <ul>
            <li>Marcos José de Almeida<a href="/alterardados">Alterar Dados</a> </li>
            <li>André Henrique de Paula<a href="/alterardados">Alterar Dados</a></li>
            <li>Rosilene Francisca Souza<a href="/alterardados">Alterar Dados</a></li>
            <li>Adelaide Maria da Silva<a href="/alterardados">Alterar Dados</a></li>
        </ul>

        <a  href="/welcome"><input class="return" type="button" value="Voltar" /></a>
    </div>


</body>


</html>