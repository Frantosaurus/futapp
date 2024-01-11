@extends('sablony.sablona')
@section('kontent')
<section>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Angus') }}">Angus</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Bageterie') }}">Bageterie Boulevard</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('BigBurger') }}">Big Burger</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Buffalo') }}">Buffalo Burger Bar</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('BurgerKing') }}">Burger King</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Delish') }}">Delish</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('FancyFries') }}">FÆNCY FRIES</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('KFC') }}">KFC</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('McDonald') }}">McDonald</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('NewYork') }}">NewYork</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p></p>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/vyber_jidla'">Vrátit se</button>
                <br>
            </div>
                <br>
        </section>
        @endsection
