MODO DE EXERCUÇÃO:

    Execurta em sevidor local ou servidor externo,
    para facilitar pode-se executar dentro do terminal com o servidor do laravel

    php artisan serve
EXPLICAÇÃO:

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

    RESUMO:
    Instalação do composer;
    Instalação do framework laravel;
    Edição da views{
            frontend: resposividade, edição de grid, bootstrap, cores, e detalhes em css
            backend: controle da entrada de busca, controle das saidadas de valores vindas do API por sua vez vindas do json.
        }
    Criação da rotas para acesso as views;
    Uma API com endpoints para buscar localidades e previsão fazendo leitura dos JSONs no diretório base;
    criação do arquivo PROJECTmd com a descrição meis detalhada possivel da criação do prgrama;