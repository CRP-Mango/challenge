@extends('layouts.principal')

@section('conteudo')

<div class="Cards Container">
        <div class="Card">
            <span class="Card-date">21/05/2021</span>
            <p class="Card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci omnis temporibus dolorum modi eius. Eos deserunt, voluptatibus </p>
            <div class="Card-info">
                <div class="Card-icons">
                    <img src="images/icons/upload.png" alt="" class="Card-arrow">
                    <!-- <div class="Card-arrow">ArrowUp</div> -->
                    <!-- <div class="Card-drop">Drop</div> -->
                    <img src="images/icons/raindrop-close-up.png" alt="">
                </div>
                <div class="Card-date">
                    <p class="Card-max">20ºC</p>
                    <p class="Card-prep">10mm</p>
                </div>
                <div class="Card-icons">
                    <img src="images/icons/download.png" alt="" class="Card-arrow">
                    <img src="images/icons/protection-symbol-of-opened-umbrella-silhouette-under-raindrops.png" alt="">
                </div>
                <div class="Card-date">
                    <p class="Card-min">10ºC</p>
                    <p class="Card-prep">50%</p>
                </div>
            </div>
        </div>   
</div>
@endsection