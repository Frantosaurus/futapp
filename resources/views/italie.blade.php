@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Bolevecka_pizzerie') }}">Bolevecká pizzerie</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('I_love_pizza') }}">I love Pizza</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Massimo') }}">Pizzerie Massimo</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Da_Nico') }}">Ristorante & Pizzerie Da Nico</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('daPietro') }}">Pizzeria da pietro</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Da_Vinci') }}">Pizzerie Da Vinci</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">>
                        <p><a href="{{ route('Mamma_Mia') }}">Pizzerie Mamma Mia</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Rango') }}">Rango restaurant</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p></p>
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
