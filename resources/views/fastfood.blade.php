@extends('sablony.sablona')
@section('kontent')
<section>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/fastfood/Angus'">Angus</button>
                    <button class="karta" onclick="window.location.href='/fastfood/Bageterie'">Bageterie Boulevard</button>
                    <button class="karta" onclick="window.location.href='/fastfood/BigBurger'">Big Burger</button>
                </div>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/fastfood/Buffalo'">Buffalo Burger Bar</button>
                    <button class="karta" onclick="window.location.href='/fastfood/BurgerKing'">Burger King</button>
                    <button class="karta" onclick="window.location.href='/fastfood/Delish'">Delish</button>
                </div>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/fastfood/FancyFries'">FÆNCY FRIES</button>
                    <button class="karta" onclick="window.location.href='/fastfood/KFC'">KFC</button>
                    <button class="karta" onclick="window.location.href='/fastfood/McDonald'">McDonald</button>
                </div>
                <div class="karty">
                <button class="karta" onclick="window.location.href='/fastfood/NewYork'">NewYork</button>
                    <div class="karta">
                        <p></p>
                    </div>
                    <div class="karta">
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
