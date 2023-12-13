@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
                <div class="karty">
                    <div class="karta">
                        <img src="/img/Chopstix.png">
                        <p>Chopstix</p>
                    </div>
                    <div class="karta">
                        <img src="/img/Homy Asian Fusion.png">
                        <p>Homy Asian Fusion</p>
                    </div>
                    <div class="karta">
                        <img src="/img/King Sheng Restaurant.png">
                        <p>King Sheng Restaurant</p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/Lotus.png">
                        <p>Lotus</p>
                    </div>
                    <div class="karta">
                        <img src="/img/Mekong.png">
                        <p><a href="{{ route('mekong') }}">Mekong</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/SAYAM.png">
                        <p>SAYAM</p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/U Bílého dráčka.png">
                        <p>U Bílého dráčka</p>
                    </div>
                    <div class="karta">
                        <img src="/img/Victory Asia Restaurant.png">
                        <p>Victory Asia Restaurant</p>
                    </div>
                    <div class="karta">
                        <img src="/img/Zlatý drak.png">
                        <p>Zlatý drak</p>
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
