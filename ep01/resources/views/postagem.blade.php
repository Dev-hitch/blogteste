<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Postagens</title>
        
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
                Detalhamento da Postagem
            </div>
            
            <div class="links">
                <div class="conteudo">
                    <h1>{!! $post->title !!}</h1>
                    <h2>{!! $post->subtitle !!}</h2>
                    <h3>{!! $post->author !!}</h3>
                    <p>
                        {!! $post->content !!}
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
