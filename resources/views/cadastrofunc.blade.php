<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cadastro</title>

    <style>
        body{ 
            background-image: URL("http://i66.tinypic.com/67qdqf.jpg");
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
        .container h1 {
            color: #f9f9f9;
            text-shadow: 2px 2px 2px #4e4e4e;
            margin-bottom: 15px;
        }
        .container {
        display: flex;
    	flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 120px;
    }
      
    .container input{
        padding: 7px 131px 5px 16px;
        margin-top: 5px;
        border-radius: 4px;
    }

    .botoes a{
        text-decoration: none;
    }

    .form-signin {width: 85%; text-align: center;}

    
    .return {
        margin-left: 60px;
        margin-top: 15px !important;
    }



    input.return {
        padding: 5px;
        margin: 0px;
    }
    input#nome {
        width: 350px;
    }

    label { 
        color: #f3f3f3;
        font-size: 1.5em;
        text-shadow: 1px 1px 2px rgba(25,25,25,0.7);
    }

    .container .return {
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
            margin-bottom: 20px;
        }
        
        button.return {
            margin: 0px !important;
        }

        .container .return:hover {
            color: #000;
            background: #f3f3f3;
}


    /*           BARRA SUPERIOR           */
    * { margin: 0px; padding: 0px; border: 0px; }
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


  <div class="container">
      
  <form class="form-signin" action="{{route('salvar.cliente')}}" method="post">
        {{csrf_field()}}
        

        @if ($errors->any())
            <div class="erros">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            </div>
        @endif


    <h1>Cadastrar Funcionário</h1>
    <label>Informações Pessoais</label> </br>
    <input type="text" id="nome" name="nome" placeholder="Seu Nome" required autofocus> </br>
    <input type="email" id="email" name="email" placeholder="Seu Email"> </br>
    <input type="tel" id="rg" name="rg" placeholder="Seu RG"> </br>
    <input type="tel" id="cpf" name="cpf" placeholder="Seu CPF"> </br>
    <input type="date" id="nasc" name="nasc" placeholder="Data de Nascimento"> </br>
    <input type="text" id="pis" name="pis" placeholder="Seu Pis"> </br></br>


    <label>Residência</label> </br>
    <input type="text" id="Cidade" name="cidade" placeholder="Cidade"> </br>
    <input type="text" id="endereco" name="endereco" placeholder="Endereço"> </br>
    <input type="text" id="bairro" name="bairro" placeholder="Bairro"> </br>
    <input type="tel" id="numero" name="numcasa" placeholder="Numero Da Casa"> </br>
    <input type="text" id="cep" name="cep" placeholder="Cep"> </br>
    <input type="text" id="complemento" name="complemento" placeholder="Complemento"> </br></br>
    
    
    
    <label>Cargo do Funcionário</label> </br>
    <input type="text" id="cargo" name="cargo" placeholder="Cargo"> </br>
    <input type="text" id="departamento" name="departamento" placeholder="Seu Departamento"> </br>
    <input type="text" id="admissao" name="admissao" placeholder="Admissão"> </br>
    <input type="text" id="ferias" name="ferias" placeholder="Mês de Ferias"> </br>
    <input type="text" id="salario" name="salario" placeholder="Salário"> </br>
    <input type="text" id="status" name="status" placeholder="Status"> </br></br>
    
    <label>Perfil do Funcionário</label> </br>
    <input type="file" id="imagem" > </br></br>
    
    

    <a href="/welcome"><input type="button" value="Voltar" class="return"/></a>

    <button class="return" type="submit">Cadastrar</button>
    
    
</form>
</div>
  </body>
</html>