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
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Je mi to jedno">
                <input type="hidden" name="restaurant_type" value="Fastfood">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light" onclick="window.location.href='/vyber_jidla'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light">Je mi to jedno</button>
                </div>
                </form>
        </section>
        @endsection
