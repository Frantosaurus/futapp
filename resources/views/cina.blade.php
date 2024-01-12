@extends('sablony.sablona')
@section('kontent')
<section>
    <div class="telo">
        <div class="karty">
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('chopstix') }}">Chopstix</a></p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('Homy_asian_fusion') }}">Homy Asian Fusion</a></p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('King_Sheng_Restaurant') }}">King Sheng Restaurant</a></p>
            </div>
        </div>
        <div class="karty">
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('lotus') }}">Lotus</a></p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('mekong') }}">Mekong</a></p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('Sayam') }}">SAYAM</a></p>
            </div>
        </div>
        <div class="karty">
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('U_bileho_dracka') }}">U bílého dráčka</a></p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('Victory_Asia_Restaurant') }}">Victory Asia Restaurant</a></p>
            </div>
            <div class="karta">
                <img src="/img/logo.png">
                <p><a href="{{ route('Zlaty_drak') }}">Zlatý drak</a></p>
            </div>
        </div>
        <br>
        <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Je mi to jedno">
                <input type="hidden" name="restaurant_type" value="Čínská kuchyně">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light" onclick="window.location.href='/cas'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light">Je mi to jedno</button>
                </div>
                </form>
</section>
@endsection