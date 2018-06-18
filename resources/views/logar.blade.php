<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <style>
        body{ 
            background-image: URL("http://i66.tinypic.com/67qdqf.jpg");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        
        .container {
        position: absolute;
        top: 30%;
        left: 35%;
        width: 350px;
        text-align: center;
    }
        h1 {
            font-size: 21pt;
            text-align: center;
            color: #f9f9f9;
            text-shadow: 2px 2px 2px #000;
        }

        .sr-only {display: none;}

        .form-control {
            width: 330px;
            height: 30px;
            text-align: center;
            border-radius: 4px;
            margin-top: 5px;
            box-shadow: 2px 2px 2px #3f3f3f;
            border: none;
            }

                        
            #inputPassword{margin-bottom: 10px;}

            
            .btn {
                margin-top: 10px;
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
            }

            .btn:hover {
                color: #313131;
                background: #f3f3f3;
            }
    </style>

  </head>
  <body>
  @if (session('erro'))
			<!-- LOGIN ou SENHA INCORRETA -->
				<div class="alert alert-danger">
					<strong>Erro!</strong> {{session('erro')}}
				</div>
				<!-- FIM [LOGIN OU SENHA INCORRETA] -->
			@endif
      
      <div class="container">
            <form action="{{route('logar')}}" method="post">
            {{ csrf_field() }}
            <h1>Faça o login</h1>
            <input type="text" id="inputEmail" class="form-control"  name="nome" placeholder="Seu Usuario" required autofocus> </br>
            <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Sua Senha" required>
            <input type="checkbox" value="remember-me"> Lembrar Meu Login </br>

            <button class="btn" type="submit">Acessar</button>
            <a href="/cadastrousuario"><input class="btn" type="button" value="Faça Seu Cadastro"/></a>

            </form>
        </div>

   
  </body>
</html>