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
        <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Je mi to jedno">
                <input type="hidden" name="restaurant_type" value="Asijská kuchyně">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light" onclick="window.location.href='/vyber_jidla'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light">Je mi to jedno</button>
                </div>
                </form>
</section>
@endsection