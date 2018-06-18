<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Ponto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet"> 
        <!-- Styles -->
        <style>
            
            body {background-image: URL("http://i66.tinypic.com/67qdqf.jpg"); background-size: 100%}
            
            .content {margin-top: 200px;}
            .content h1{
                font-family: Raleway;
                font-weight: 100;
                font-size: 45pt;
                text-align: center;
                color: #f2f2f2;
                text-shadow: 2px 2px 2px #414141;
                
            }

            .menu ul{
                list-style: none;
            }

            .menu ul li {
                display: inline-block;
                margin-left: 15px;
            }
            
            .menu ul li a{
                font-size: 14pt;
                text-decoration: none;
                font-family: Ubuntu;
                font-weight: 400;
                color: #fff;
                text-shadow: 2px 2px 2px #211f1f;
                transition-duration: 0.3s;

            }

            .menu ul li a:hover {
                transition-duration: 0.3s;
                color: #e37b07;
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

        <div class="content">
            <h1>Sistema De Ponto<h1>  
                <div class="menu">
                    <ul>
                        <li><a href="/cadastrofunc">Cadastro de Funcionário</a><li>
                        <li><a href="/registrarponto">Registrar Ponto</a><li>
                        <li><a href="/cargo">Cadastrar Cargo</a><li>
                        <li><a href="/funcionarios">Funcionários</a><li>
                        <li><a href="/userrelatorios">Relatórios</a><li>
                        <li><a href="/dpt">Departamentos</a><li>
                    </ul>    
                <div>  
        
        <div>

    </body>
</html>
