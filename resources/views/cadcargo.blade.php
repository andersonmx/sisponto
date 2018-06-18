<doctype html>

<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body {background-image: URL("http://i66.tinypic.com/67qdqf.jpg"); background-repeat: no-repeat; background-size: 100%;}
        .centralizer {
            width: 550px;
            margin: auto;
            margin-top: 250px;
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        .centralizer h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
            color: #f3f3f3;
            text-shadow: 1px 1px 2px rgba(25,25,25,0.4);
        }
        

        .btn {
                margin-top: 20px;
                padding: 5px 15px;
                background: #313131;
                color: #f3f3f3;
                border: none;
                font-size: 1em;
                box-shadow: 1px 1px 2px rgba(55,55,55,0.7);
                cursor: pointer;
                border-radius: 3px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                -ms-border-radius: 3px;
                -o-border-radius: 3px;
                margin-left: 5px;
                margin-bottom: 15px;
            }

            .btn:hover {
                color: #313131;
                background: #f3f3f3;
            }


        .centralizer input {
            padding: 5px 10px;
            margin-top: 3px;
            background: #313131;
            color: #f3f3f3;
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

                <!--Erros-->
            @if ($errors->any())
                <div class="erros">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                </div>
            @endif




        <div class="centralizer">
            <form action="{{route('salvar.cargo')}}" method="post">
            {{ csrf_field() }}

                <h2>Cadastrar Novo Cargo do Funcionário</h2> </br>
                    <input type="text" id="novo cargo" name="nomedocargo" placeholder="Novo Cargo"> </br>
                    <input type="text" id="ferias" name="mes" placeholder="Mês de Ferias"> </br>
                    <input type="text" id="salario" name="salario" placeholder="Salário"> </br>
                    

                    <a href="/welcome"><input type="button" value="Voltar" class="btn"/></a>
                    <button class="btn" type="submit">Salvar Cargo</button>
                    

     
             </form>
        </div>

</body>


</html>