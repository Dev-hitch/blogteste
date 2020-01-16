<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> Novo Usuário</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
            
            .content {
                text-align: center;
            }
            
            .title {
                font-size: 84px;
            }
            
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            input {
                margin: 15px;
                width: 300px;
                height: 30px;
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="content">
            <div class="title m-b-md">
                Novo Usuário
            </div>
            
            <div class="conteudo">
                <form action="{!! route('users.store') !!}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nome</label>
                    <input type="text" name="name" required><br>
                    
                    <label for="">E-mail</label>
                    <input type="text" name="email" required><br>
                    
                    <label for="">Senha</label>
                    <input type="password" name="password" required><br>
                    
                    <label for="exampleFormControlFile1">Imagem</label>
                    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    
                    <input type="submit" value="Cadastrar">
                
                </form>
            </div>
        </div>
    </body>
</html>
