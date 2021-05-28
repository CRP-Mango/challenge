<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <!--link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/album/"-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Public -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>

  <body>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
          <div class="container">

          </div>
        </div>
        <div class="navbar navbar-dark bg-primary shadow-sm">
          <div class="container d-flex justify-content-center">
        <a href="/">
            <img src="./img/logo.png" class="" alt="image" style="max-width:150px !important">
        </a>
          </div>
        </div>
    </header>

    <div class="search-main container">
        <form name="" action="/search" method="post">
            @csrf
            <div class="input-group">
                <div class="search-form form-outline d-flex">
                    <input  class="search-input" type="search" name="search" id="search_weather" class="form-control" placeholder="Pesquisar"/>
                    <button class="search-btn" type="submit" class="btn btn-primary">
                        ok
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </form>

        <div class="mt-3">
            {{--Yield insere conteudo dinamico - Conteudo do site--}}
            @yield('content')
        </div>


        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Para cima</a>
                </p>
                <p>CRP-Mango &copy; 2021.1</p>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!--script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>

    <!-- Script do projeto -->
    <script type="text/javascript" src="./js/scripts.js"></script>

</body>
</html>
