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
                <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/vyber_jidla'">Vrátit se</button>
                <br>
            </div>
                <br>
        </section>
        @endsection
