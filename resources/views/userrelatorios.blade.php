
<doctype html>

<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body {background-image: URL("http://i66.tinypic.com/67qdqf.jpg"); background-repeat: no-repeat; background-size: 100%;}
        .centralizer {
            margin: auto;
            width: 400px;
            text-align: center;
            margin-top: 250px;
        }

        .centralizer ul {
            list-style: none;
        }

        .centralizer ul li {
            margin-top: 5px;
        }

        .centralizer a {
            text-decoration: none;
            color: #f3f3f3;
            text-shadow: 1px 1px 2px rgba(25,25,25,0.7);
        }

        .centralizer a:hover {
            color: #575757;
        }
        
        .btn-return {
            padding: 5px 15px;;
            border: none;
            background: rgba(25,25,25,0.7);
            color: #f3f3f3;
            cursor: pointer;
            margin-top: 15px;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            -o-border-radius: 3px;
            box-shadow: 1px 1px 2px rgba(25,25,25,0.7);
        }

        .btn-return:hover {
            color: #979797;
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
            
            .navbar .nav-menu {
                list-style: none;
                right: 25px;
                top: 25px;
                position: absolute;
            }

            .navbar ul li {
                display: inline-block;
                margin-left: 7px;
            }

            .navbar ul li a {
                text-decoration: none;
                color: #f3f3f3;
                font-size: 1.2em;
            }


            .navbar ul li a:hover {
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
        <li><a href="#">Relatório de Horas Extras</a></li>
        <li><a href="#">Relatório de Faltas</a></li>
        <li><a href="#">Relatório de Horas do Funcionário</a></li>
        <li><a href="#">Banco de Horas de Ponto</a></li>
    </ul>
    <a href="/welcome"><input class="btn-return" type="button" value="Voltar" /></a>
</div>

</body>


</html>