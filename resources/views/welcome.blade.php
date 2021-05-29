@extends('layouts.principal')

@section('conteudo')
    
    @foreach($previsoes as $previsao)
        <div class="Main-title">
            <h1 class="Main-titleText" >Previsão para {{$previsao->locale->name}} - {{$previsao->locale->state}}</h1>
        </div>
        <div class="Main-cards">
            @foreach($previsao->weather as $weather)
                <div class="Cards Container">
                        
                        <div class="Card">
                    
                    <span class="Card-date">{{$weather->date}}</span>
                    <p class="Card-text">{{$weather->text}}</p>
                    <div class="Card-info">
                        <div class="Card-icons">
                            <img src="images/icons/upload.png" alt="" class="Card-arrow">
                            
                            <img src="images/icons/raindrop-close-up.png" alt="">
                        </div>
                        <div class="Card-date">
                            <p class="Card-max">{{$weather->temperature->max}}ºC</p>
                            <p class="Card-prep">{{$weather->rain->precipitation}}mm</p>
                        </div>
                        <div class="Card-icons">
                            <img src="images/icons/download.png" alt="" class="Card-arrow">
                            <img src="images/icons/protection-symbol-of-opened-umbrella-silhouette-under-raindrops.png" alt="">
                        </div>
                        <div class="Card-date">
                            <p class="Card-min">{{$weather->temperature->min}}ºC</p>
                            <p class="Card-prep">{{$weather->rain->probability}}%</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach
@endsection