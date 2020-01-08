<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Categoria</title>
        
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
            
            
            /*.conteudo  {*/
            /*    color: #636b6f;*/
            /*    padding: 0 25px;*/
            /*    font-size: 13px;*/
            /*    font-weight: 600;*/
            /*    letter-spacing: .1rem;*/
            /*    text-decoration: none;*/
            /*    text-transform: uppercase;*/
            /*}*/
            
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="content">
            <div class="title m-b-md">
                Nova Categoria
            </div>
            
            <div class="conteudo">
                <form action="{!! route('categories.store') !!}" method="post">
                    @csrf
                    <label for="">Título</label>
                    <input type="text" name="title"><br>
                    
                    <input type="submit" value="Cadastrar">
                
                </form>
            </div>
        </div>
    </body>
</html>
