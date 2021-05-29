<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clima Tempo</title>

        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/style.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="Body">
        <header class="Header">
            <nav class="Navbar">
                <div class="container d-flex">
                    <a class="Navbar-brand" href="#">
                        <img src="./images/logo.png" alt="" width="300" height="42">
                    </a>
                </div>
            </nav>
        </header>
        <div class="Main">
            <div class="Main-wrap">
                <input class= "Main-field" type="text" placeholder="Digite o nome da cidade...">
            
                <button class="Main-search">
                    <img src="./images/icons/loupe (2).png" alt="" width="20" height="20" >
                </button>
            </div>
        </div>
        <div class="mt-3 Conteudo">
            @yield('conteudo')
        </div>
        
        <script></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
        <script type="text/javascript" src="./js/scripts.js"></script>
    </body>
</html>
