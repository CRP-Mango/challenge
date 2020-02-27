# challange<p align="center">
  <a href="http://www.crpmango.com.br">
      <img src="https://www.crpmango.com.br/wp-content/themes/crpmango/assets/img/logotipo-crpmango.png" alt="CRP Mango" width="300px"/>
  </a>
</p>

___


## Processo de recrutamento

Olá desenvolvedor, pronto para participar do nosso
processo de recrutamento para vaga de Full-stack?

### Sobre a Vaga

- Empresa: CRP Mango
- Cargo: Desenvolvedor Full-stack;

### Requisitos

Requisitos para a vaga, bons conhecimentos em:

- HTML
- CSS
- Javascript
- NodeJS
- PHP
- SQL
- RESTful
- Laravel
- Vue

### O Desafio

Um usuário quer saber como vai ficar o 
tempo para os próximos dias em Osasco e São Paulo utilizando
seu smartphone. 

O que esperamos:
 
 - Uma página responsiva para mobile e desktop (320px à 1920px);
 - Um campo para buscar localidades;
 - Um card para cada dia de previsão de chuva, temperatura e o texto para a localidade buscada;
 - Uma API com endpoints para buscar localidades e previsão fazendo leitura dos JSONs no diretório base;
 
Exemplo:

<p align="center">
  <a href="#">
      <img src="http://i.imgur.com/x3z4tYM.png" alt="Climatempo" width="400px"/>
  </a>
</p>

**Atenção:**  Não se preocupe em reproduzir o exemplo, use apenas como referência.
 
### Dados

A API deve fazer a leitura dos dados dos JSONs no diretório base.
 
Localidades:
    
    base/locales.json
 
| Propriedade   | Tipo   | Descrição                           |
| ------------- |:------:| ------------------------------------|
| `id`          | Number | Id da localidade                    |
| `name`        | String | Nome da localidade                  |
| `state`       | String | Sigla do estado da localidade       |
| `latitude`    | Number | Latitude do centro da localidade    |
| `longitude`   | Number | Longitude do centro da localidade   |
 
 
Os dados de previsão estão no JSON:
 
    base/weather.json
    
**period: Object**
 
| Propriedade        | Tipo   | Descrição                                  |
| ------------------ |:------:| -------------------------------------------|
| `period.begin`     | String | Data início da busca no formato AAAA-MM-DD |
| `period.end `      | String | Data fim  da busca no formato AAAA-MM-DD   |

**locale: Object**
 
Os mesmos dados do JSON de localidades.
 
**weather: Object**
 
| Propriedade                     | Tipo   | Descrição                                  |
| ------------------------------- |:------:| -------------------------------------------|
| `weather.date`                  | String | Data da previsão no formato AAAA-MM-DD     |
| `weather.text`                  | String | Texto sobre a previsão do dia              |
| `weather.temperature.min`       | Number | Temperatura mínima em graus celsius (°C)   |
| `weather.temperature.max`       | Number | Temperatura máxima em graus celsius (°C)   |
| `weather.rain.probability`      | Number | Probabilidade de chuva em porcentagem (%)  |
| `weather.rain.precipitation`    | Number | Precipitação de chuva em milímetros (mm)   |

### Avaliação

O que vamos avaliar:

- Desempenho;
- Manutenabilidade;
- Organização;
- Boas práticas.

### Stack
Para o desafio você pode utilizar o seguinte stack:

- Framework Laravel (PHP)
- Javascript
- Vue (Opcional)

### Comece

O processo do desafio deve ser:

1. Faça o fork do desafio.

2. Desenvolva! Você terá **5 dias** a partir da data do envio do desafio.

3. Crie um **PROJECT.md** com a explicação de como devemos executar o projeto e com o máximo de detalhes possível do que foi feito.

4. Após concluir faça um pull request.

5. Envie um e-mail para desenvolvimento@crpmango.com.br com o **link do seu pull request**.


___


Qualquer dúvida entre em contato com nossa equipe.
