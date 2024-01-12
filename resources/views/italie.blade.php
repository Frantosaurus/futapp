@extends('sablony.sablona')
@section('kontent')
<section>
                <div class="karty">
                <button class="karta" onclick="window.location.href='/italie/Bolevecka_pizzerie'">Bolevecká pizzerie</button>
                <button class="karta" onclick="window.location.href='/italie/I_love_pizza'">I love Pizza</button>
                <button class="karta" onclick="window.location.href='/italie/Massimo'">Pizzerie Massimo</button>
                </div>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/italie/Da_Nico'">Ristorante & Pizzerie Da Nico</button>
                    <button class="karta" onclick="window.location.href='/italie/daPietro'">Pizzeria da pietro</button>
                    <button class="karta" onclick="window.location.href='/italie/Da_Vinci'">Pizzerie Da Vinci</button>
                </div>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/italie/Mamma_Mia'">Pizzerie Mamma Mia</button>
                    <button class="karta" onclick="window.location.href='/italie/Rango'">Rango restaurant</button>       
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
