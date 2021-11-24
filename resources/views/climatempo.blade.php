<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Climatempo</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

    </head>


    @php
    $json_cidades = storage_path()."/json/locales.json";
        if (!File::exists($json_cidades)) {
            throw new Exception("Invalid File");
        } else {
            $cidades = json_decode(File::get($json_cidades));
            //var_dump($cidades);
        }

    if (isset($_POST['cidade'])) {
        $json_dados = storage_path()."/json/weather.json";
        if (!File::exists($json_dados)) {
            throw new Exception("Invalid File");
        }

        $previsoes = json_decode(File::get($json_dados));
        
        //var_dump($previsoes);

        if (!empty($previsoes)) {
            foreach ($previsoes as $previsao_cidade) {
                if ($previsao_cidade->locale->id == $_POST['cidade']) {
                    $dados_previsao_cidade = $previsao_cidade->weather;
                    $periodo_previsao_cidade = $previsao_cidade->period;
                }
            }
        }
        //var_dump($periodo_previsao_cidade);
    }
    @endphp


    <body class="antialiased conteudo">
        
        <div class="card card-secondary">

            <div class="card-header center">
                <h3 class="card-title">CLIMATEMPO</h3>
            </div>

            <div class="card-body">
                <form action="/" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row center">
                        <div class="col-sm-12">
                        <div class="input-group">


                                <select id="cidade" name="cidade" class="form-control" class="form-control form-control-lg">
                                    @if (!empty($cidades))
                                        @foreach ($cidades as $cidade)
                                            <option value="{{ $cidade->id }}" @if ($cidade->id == $_POST['cidade']) selected @endif>{{ $cidade->name }} - {{ $cidade->state }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <button type="submit" class="btn btn-sm btn-default">
                                            <i class="fa fa-search icon"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="row center padding-top-50">
            <div class="col-sm-12">
                <div class="padding">
                    <h3>Previsão para 
                        @foreach ($cidades as $cidade)
                            @if ($cidade->id == $_POST['cidade'])
                                {{ $cidade->name }} - {{ $cidade->state }}
                            @endif
                        @endforeach
                        @if (!empty($dados_previsao_cidade))
                        <div class="weather-date" style="font-size:12px;">
                            Período de {{ date('d/m/Y', strtotime($periodo_previsao_cidade->begin)) }} à {{ date('d/m/Y', strtotime($periodo_previsao_cidade->end)) }}.
                        </div>
                        @endif
                    </h3>
                </div>
            </div>
        </div>

        <br>

        @if (!empty($dados_previsao_cidade))
            @foreach ($dados_previsao_cidade as $previsao)
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="row container d-flex justify-content-center">
                                <div class="col-lg-6 grid-margin stretch-card">
                                    <!--weather card-->
                                    <div class="card card-weather">
                                        <div class="card-body">
                                            <div class="weather-date-location">
                                                <h3>{{ date('d/m', strtotime($previsao->date)) }}</h3>
                                                <p>
                                                    <span class="weather-date">{{ $previsao->text }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="d-flex weakly-weather">
                                                <div class="weakly-weather-item">
                                                    <p class="mb-0"> Máxima </p> <i class="mdi mdi-weather-cloudy"></i>
                                                    <p class="mb-0"> {{ $previsao->temperature->max }}° </p>
                                                </div>
                                                <div class="weakly-weather-item">
                                                    <p class="mb-0"> Mínima </p> <i class="mdi mdi-weather-hail"></i>
                                                    <p class="mb-0"> {{ $previsao->temperature->min }}° </p>
                                                </div>
                                                <div class="weakly-weather-item">
                                                    <p class="mb-0"> Chuva </p> <i class="mdi mdi-weather-partlycloudy"></i>
                                                    <p class="mb-0"> {{ $previsao->rain->probability }}% </p>
                                                </div>
                                                <div class="weakly-weather-item">
                                                    <p class="mb-0"> Precip. </p> <i class="mdi mdi-weather-pouring"></i>
                                                    <p class="mb-0"> {{ $previsao->rain->precipitation }}mm </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--weather card ends-->
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        @endif

    </body>
</html>
