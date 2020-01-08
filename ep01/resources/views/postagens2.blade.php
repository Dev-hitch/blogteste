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
                width: 200px;
            }
            
            .title {
                font-size: 84px;
            }
            
            .links > a {
                color: #636b6f;
                width: 200px;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            .conteudo2 {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            .conteudo2 > h1 {
                text-decoration: none;
            }
            
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="content">
            <div class="title m-b-md">
                Postagens
            </div>
            
            <div class="links">
                @foreach($posts as $post)
                    <a href="{!! route('posts.show', ['post' => $post->id]) !!}">
                        <div class="conteudo">
                            <h1>{!! $post->title !!}</h1>
                            <h2>{!! $post->subtitle !!}</h2>
                            <h3>{!! $post->author !!}</h3>
                            <p>
                                {!! $post->synopsis !!}
                            </p>
                        </div>
                    </a>
                <form action="{!! route('posts.destroy', ['post' => $post->id]) !!}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Excluir">
                </form>
                    <form action="{!! route('posts.edit', ['post' => $post->id]) !!}" method="get">
                        @csrf
                        <input type="submit" value="Editar">
                    </form>
                @endforeach
            </div>
        </div>
    </body>
</html>
