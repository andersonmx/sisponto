<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cadastro</title>

    <style>
        body {background-image: URL("http://i66.tinypic.com/67qdqf.jpg"); background-repeat: no-repeat; background-size: 100%;}
       


        .form{
    	width: 550px;
        margin: auto;
        margin-top: 100px;
        text-align: center;
        }

        .entrada, .saida, .justificar {
            padding: 15px;
            margin-top: 25px;
            margin-left: 15px;
            cursor: pointer;
            border: 2px solid #f3f3f3;
            background: rgba(174,174,174,0.4);
            display: inline-block;
        }

        .user{
            font-size: 20pt;
            text-shadow: 2px 2px 2px #454343;
        }

        .user span {
            color: red;
        }

        #tw_6_390251669 {
            margin-top: 119px;
             transform: scale(1.6);
           width: 345px;
              margin-left: 476px;
           }

        .booked-clock-120x45 {
            margin-left: 10px !important;
        }

        .entrada:hover, .saida:hover, .justificar:hover {
            background-color: #575757;
            color: #fff;
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

  <div class="container">


     <!-- clock widget start -->
<script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","//s.bookcdn.com//css/cl/bw-cl-120x45.css"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_6_390251669"><div style="width:130px; height:45px; margin: 0 auto;"><a href="http://ibooked.com.br/time/maceio-alagoas-19784">Maceió</a><br/></div></div> <script type="text/javascript"> function setWidgetData_390251669(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_390251669 = -1; </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/time/info?ver=2&domid=585&type=6&id=390251669&scode=124&city_id=19784&wlangid=8&mode=0&details=0&background=ffffff&color=333333&add_background=a0a1a1&add_color=08488d&head_color=333333&border=0&transparent=0"></script>
<!-- clock widget end -->

    <div class="form">
        <form class="registro-de-ponto">
        <label class="user">Usuário: <span>NomeDoUsuario<span></label> </br>

        <button class="entrada" type="submit" formaction="/entrada">Registrar Entrada</button>
        <button class="saida" type="submit" formaction="/saida">Registrar Saída</button>
        <button class="justificar" type="submit" formaction="/justificativa">Justificar Falta</button> </br>
        </form>
    </div>

    
</div>

  </body>
</html>