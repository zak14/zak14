<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coding 11 Crud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="/css/app.css">

    
    </head>
    <body>
        <header>
            <nav class="navbar-expand-lg navbar navbar-dark bg-primary">
                <a class="navbar-brand" href="/">Conding 11 Crud</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="/albums">Albums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('photo.index')}}">Photos</a>
                    </li>
                    
                  </ul>
                </div>
              </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>


        <script src="/js/app.js"></script>


    </body>
</html>
