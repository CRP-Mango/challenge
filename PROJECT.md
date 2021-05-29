MODO DE EXERCUÇÃO:

    Execurta em sevidor local ou servidor externo
    para facilitar pode-se executar dentro do terminal com o servidor do laravel

    php artisan serve

Explicação

    Na pasta view estão todas a paginas executadas welcome.blade.php e
    a pagina pricipal.blade.php.
    Todos os arquivos de estilo imagem e base estão na pasta public.
    Os arquivos de rotas ligam todas as bases as suas view.
    Na pagina principal foi chamada a base no parametro previsoes setando 
    todos os atributos.
    A busca é feita com a palavra ou com um pedaço da palavra exemplo:
    se tiver no json Maranguape Maracanaú São Paulo Osasco e for digitado 
    mara o programa vai trazer tanto maranguape quanto maracanaú.
    
    API:
    para teste entre com o valor na barra de navegação exemplo:
    http://127.0.0.1:8000/api/locale/name/osas

    para testa outro caminhos entra com o valor :
    http://127.0.0.1:8000/api/weather/date/2017-02-03

    seguindo sempre o valores e caminhos internos do json.