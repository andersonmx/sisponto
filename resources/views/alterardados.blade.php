<doctype html>

<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
    body{ 
            background-image: URL("http://i66.tinypic.com/67qdqf.jpg");
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        .centralizer {
            width: 550px;
            text-align: center;
            margin: auto;
            margin-top: 110px;
        }

        .centralizer h2{
            color: #f9f9f9;
            text-shadow: 2px 2px 2px #4e4e4e;
            margin-top: 15px;
        }

        .centralizer input {
            padding: 5px 10px;
            margin-top: 3px;
            background: #313131;
            color: #f3f3f3
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


        /*           BARRA SUPERIOR           */
        * { margin: 0px; padding: 0px; border: 0px; }
            a {
                text-decoration: none;
            }
            .navbar {
                position: absolute;
                top: 0;
                width: 99.2%;
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


<form>

<div class="centralizer">
<h2>Marcos José de Almeida</h2>
<h2>Informações Pessoais</h2> </br>
    <input type="text" id="nome" placeholder="Seu Nome" required autofocus> </br>
    <input type="email" id="email" placeholder="Seu Email"> </br>
    <input type="tel" id="rg" placeholder="Seu RG"> </br>
    <input type="tel" id="cpf" placeholder="Seu CPF"> </br>
    <input type="date" id="nasc" placeholder="Data de Nascimento"> </br>
    <input type="text" id="pis" placeholder="Seu Pis"> </br>


    <h2>Residência</h2> </br>
    <input type="text" id="Cidade" placeholder="Cidade"> </br>
    <input type="text" id="endereco" placeholder="Endereço"> </br>
    <input type="text" id="bairro" placeholder="Bairro"> </br>
    <input type="tel" id="numero" placeholder="Numero Da Casa"> </br>
    <input type="text" id="cep" placeholder="Cep"> </br>
    <input type="text" id="complemento" placeholder="Complemento"> </br>
    
    
    
    <h2>Cargo do Funcionário</h2> </br>
    <input type="text" id="cargo" placeholder="Cargo"> </br>
    <input type="text" id="departamento" placeholder="Seu Departamento"> </br>
    <input type="text" id="Admissão" placeholder="Admissão"> </br>
    <input type="text" id="ferias" placeholder="Mês de Ferias"> </br>
    <input type="text" id="salario" placeholder="Salário"> </br>
    <input type="text" id="status" placeholder="Status"> </br>
    
    <h2>Perfil do Funcionário</h2> </br>
    <input type="file" id="imagem" > </br>



    <a href="/welcome"><input class="btn" type="button" value="Cancelar" /> </a>
    <a  href="/excluirfunc"><input class="btn" type="button" value="Excluir Este Funcionário" /> </a>
    <a  href="/alteracao"><input class="btn" type="button" value="Salvar Novos Dados" /> </a>
</form>

</div>
</body>


</html>