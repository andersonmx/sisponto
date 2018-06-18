<doctype html>

<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body {background-image: URL("http://i66.tinypic.com/67qdqf.jpg"); background-repeat: no-repeat; background-size: 100%;}
        a {
            text-decoration: none;
        }        

        .centralizer ul {
            list-style: none;
        }

        .centralizer ul li a {
            margin-left: 15px;
            color: #c1c1c1;
            text-shadow: 1px 1px 2px rgba(25,25,25,0.7);
        }

        .centralizer ul li {
            margin-bottom: 10px;
            color: #f3f3f3;
            text-shadow: 1px 1px 2px rgba(25,25,25,0.7);
            font-size: 1.2em;
        }
        .centralizer {
            width: 300px;
            margin: auto;
            margin-top: 250px;
        }

        .btn {
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

        .btn:hover {
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
            <li>SEO<a href="/alterarcargo">Alterar Cargo</a> </li>
            <li>Técnico<a href="/alterarcargo">Alterar Cargo</a></li>
            <li>Recepcionista<a href="/alterarcargo">Alterar Cargo</a></li>
            <li>Auxiliar<a href="/alterarcargo">Alterar Cargo</a></li>
            <li>Faxineiro(a)<a href="/alterarcargo">Alterar Cargo</a></li>
        </ul>

        <a  href="/welcome"><input class="btn" type="button" value="Voltar" /></a>
        <a  href="/cadcargo"><input class="btn" type="submit" value="Cadastrar Novo Cargo" /></a>
</div>
</body>


</html>