@extends('sablony.sablona')
@section('kontent')
<section>
        <div class="karty">
            <button class="karta" onclick="window.location.href='/cina/chopstix'">Chopstix</button>
            <button class="karta" onclick="window.location.href='/cina/Homy_asian_fusion'">Homy Asian Fusion</button>
            <button class="karta" onclick="window.location.href='/cina/King_Sheng_Restaurant'">King Sheng Restaurant</button>
        </div>
        <div class="karty">
            <button class="karta" onclick="window.location.href='/cina/lotus'">Lotus</button>
            <button class="karta" onclick="window.location.href='/cina/mekong'">Mekong</button>
            <button class="karta" onclick="window.location.href='/cina/Sayam'">SAYAM</button>
        </div>
        <div class="karty">
            <button class="karta" onclick="window.location.href='/cina/U_bileho_dracka'">U bílého dráčka</button>
            <button class="karta" onclick="window.location.href='/cina/Victory_Asia_Restaurant'">Victory Asia Restaurant</button>
            <button class="karta" onclick="window.location.href='/cina/Zlaty_drak'">Zlatý drak</button>
        </div>
        <br>
                <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/vyber_jidla'">Vrátit se</button>
                <br>
            </div>
        <br>
</section>
@endsection