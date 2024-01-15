@extends('sablony.sablona')
@section('kontent')
<section>
    <div class="karty">
        <button class="karta" onclick="window.location.href='/indie/Bombay_express'">Bombay Express</button>
        <button class="karta" onclick="window.location.href='/indie/BUDDHA'">Buddha</button>
        <button class="karta" onclick="window.location.href='/indie/Everest'">Everest</button>
    </div>
    <div class="karty">
        <button class="karta" onclick="window.location.href='/indie/Gandhi'">Gandhi</button>
        <button class="karta" onclick="window.location.href='/indie/Ganesh'">Ganesh</button>
        <button class="karta" onclick="window.location.href='/indie/Zaika'">Indian Zaika Restaurant</button>
    </div>
    <div class="karty">
        <button class="karta" onclick="window.location.href='/indie/Kanchenjunga'">Kanchenjunga</button>
        <button class="karta" onclick="window.location.href='/indie/Kathmandu'">Kathmandu</button>
        <button class="karta" onclick="window.location.href='/indie/Namaste'">Namaste</button>
    </div>
    <br>
    <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
        @csrf
        <input type="hidden" name="restaurant_name" value="Je mi to jedno">
        <input type="hidden" name="restaurant_type" value="Indická kuchyně">
        <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-outline-light tlacitko" onclick="window.location.href='/vyber_jidla'"
                style="margin-right: 30px;">Vrátit se</button>
            <button type="submit" class="btn btn-outline-light tlacitko">Je mi to jedno</button>
        </div>
    </form>
</section>
@endsection