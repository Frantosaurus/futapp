@extends('sablony.sablona')
@section('kontent')
<section>
    <div class="telo">
        <div class="karty">
            <div class="karta">
                <img src="/img/logo.png">
                <p>Chopstix</p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p>Homy Asian Fusion</p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p>King Sheng Restaurant</p>
            </div>
        </div>
        <div class="karty">
            <div class="karta">
                <img src="/img/logo.png">
                <p>Lotus</p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('mekong') }}">Mekong</a></p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p>SAYAM</p>
            </div>
        </div>
        <div class="karty">
            <div class="karta">
                <img src="/img/logo.png">
                <p>U Bílého dráčka</p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p>Victory Asia Restaurant</p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p>Zlatý drak</p>
            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-center align-items-center">
    <div class="col-auto">
        <button type="button" class="btn btn-outline-light" onclick="window.location.href=''">Pokračovat</button>
    </div>
    <div class="col-auto">
        <button type="button" class="btn btn-outline-light" onclick="window.location.href=''">Je mi to jedno</button>
    </div>
</div>
        <br>
    </div>
</section>
@endsection