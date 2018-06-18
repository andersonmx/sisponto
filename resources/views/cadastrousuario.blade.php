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
            background-size: 100%;
        }
        
        .container {
            position: absolute;
            width: 350px;
            text-align: center;
            left: 35%;
            top: 30%;
        }


        h1 {
            font-size: 21pt;
            text-align: center;
            color: #f9f9f9;
            text-shadow: 2px 2px 2px #000;
        }

            
            .inputs {
            width: 330px;
            height: 30px;
            text-align: center;
            border-radius: 4px;
            margin-top: 5px;
            box-shadow: 2px 2px 2px #3f3f3f;
            border: none;
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
            }

            .btn:hover {
                color: #313131;
                background: #f3f3f3;
            }
    </style>

  </head>
  <body>
  <div class="container">
  <h1>Faça Seu Cadastro</h1>

    <form action="" method="post">
    {{ csrf_field() }}

        <input type="text" name="usuario" class="inputs" placeholder="Seu Novo Usuario" /></br>
        <input type="password" name="senha" class="inputs" placeholder="Sua Nova Senha" /></br>
      

    <a href="/"><input class="btn" type="button" value="Voltar" /></a>
    <button type="submit" class="btn" >Cadastrar</button>
    </form>
</div>

  </body>
</html>