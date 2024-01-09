@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Bombay_express') }}">Bombay Express</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('BUDDHA') }}">Buddha</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Everest') }}">Everest</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Gandhi') }}">Gandhi</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Ganesh') }}">Ganesh</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Zaika') }}">Indian Zaika Restaurant</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Kanchenjunga') }}">Kanchenjunga</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Kathmandu') }}">Kathmandu</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Namaste') }}">Namaste</a></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto"><a class="dalsi" href="">Pokračovat</a></div>
                    <div class="col-auto"><a class="dalsi" href="">Je mi to jedno</a></div>
                </div>
                <br>
            </div>
        </section>
        @endsection
