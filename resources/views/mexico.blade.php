@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('La_Chica') }}">La Chica | Casa Mexicana</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Pancho') }}">Pancho's</a></p>
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
