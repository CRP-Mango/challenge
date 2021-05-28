@extends('layouts.main')

@section('title','CRP Mango')

@section('content')

<br>

{{-- Comentario no blade--}}
<main role="main">

    @foreach ($climates as $climate)
        <h2 class="locale-title"> Previsão para <span>{{$climate->locale->name}}</span> - <span>{{$climate->locale->state}}</span></h2>
        <div class="row">

        @foreach ($climate->weather as $weather)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <p class="card-text">{{$weather->date}}</p>
                        <p class="card-text">{{$weather->text}}</p>
                    </div>
                    <div class="card-date">
                        <div class="card-data-tempo m-3">
                            <img src="./img/icons/upload.png" alt="" >
                            <span class="card-tmax"> {{$weather->temperature->max}}ºC</span>
                            <img src="./img/icons/download.png" alt="" >
                            <span class="card-tmin"> {{$weather->temperature->min}}ºC</span>
                        </div>
                        <div class="card-data-tempo m-3">
                            <img src="./img/icons/raindrop-close-up.png" alt="" >
                            <span> {{$weather->rain->precipitation}}mm</span>
                            <img src="./img/icons/protection-symbol-of-opened-umbrella-silhouette-under-raindrops.png" alt="" >
                            <span> {{$weather->rain->probability}}%</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @endforeach


</main>


@endsection

