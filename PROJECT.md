
## Processo de recrutamento

1. Empresa: CRP Mango
2. Cargo: Desenvolvedor Full-stack;
3. Desenvolver:
    - Uma página responsiva para mobile e desktop (320px à 1920px);
    - Um campo para buscar localidades;
    - Um card para cada dia de previsão de chuva, temperatura e o texto para a localidade buscada;
    - Uma API com endpoints para buscar localidades e previsão fazendo leitura dos JSONs no diretório base;
___

### Dependêcias 

1. Instalar PHP >=7.2.5
2. Instalar Composer - [Detalhes](https://getcomposer.org/download/)
3. Instalar Laravel via composer - [Detalhes](https://laravel.com/docs/8.x#installation-via-composer)


### Execução

Abrir o terminal dentro da pasta do projeto e executar comando para subir o servidor do próprio Laravel:
 
    php artisan serve
 
### Detalhes 
1. Foi criado um front-end utilizando HTML5, CSS3 e Bootstrap CDN para exibir os dados enviados pelo back-end.
2. Foi desenvolvido um back-end utilizando o framework Laravel.
3. Ao executar o projeto, a rota raiz (p.e.: localhost:8000) exibirá todos os registros contidos nos arquivos.json.
4. Para realizar uma busca por localidade basta digitar o nome da cidade (ou parte dele) no campo pesquisar.
5. API e endpoints:
    1. O método getlocale retorna localidades do base/locale.json.
    - Ex. da rota locale: localhost:8000/locale (Retornas todas localidades) 
    - Ex. da rota locale com passagem de parâmetros unitário: localhost:8000/locale?name=sao 
    - Ex. da rota locale com passagem de parâmetros composta: localhost:8000/locale?id=3735&name=osas&longitude=7&latitude=4 
    
    2. O método getWeatherByPeriod retorna weathers do base/weather.json.
    - Ex. da rota period: localhost:8000/period (Retorna todas weather).
    - Ex. da rota period: localhost:8000/period?begin=2017-02-05 
    - Ex. da rota period: localhost:8000/period?begin=2017-02-03&end=2017-02-05
    
    3. O método getWeatherByLocale retorna weathers do base/weather.json. 
    - Ex. da rota locale: localhost:8000/weather/locale (Retorna todas localidades com seus weather).
    - Ex. da rota locale: localhost:8000/weather/locale?id=3735
    - Ex. da rota locale: localhost:8000/weather/locale?id=3735&name=o&state=s&longitude=7&latitude=2

    4. O método getWeather retorna weathers do base/weather.json. 
    - Ex. da rota locale: localhost:8000/weather (Retorna todas weather).
    - Ex. da rota locale: localhost:8000/weather?temp_min=22
    - Ex. da rota locale: localhost:8000/weather?temp_min=22$temp_max
___


Att. João Júnior.
