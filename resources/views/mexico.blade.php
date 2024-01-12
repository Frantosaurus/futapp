@extends('sablony.sablona')
@section('kontent')
<section>
                <div class="karty">
                <button class="karta" onclick="window.location.href='/mexico/La_Chica'">La Chica | Casa Mexicana</button>
                <button class="karta" onclick="window.location.href='/mexico/Pancho'">Pancho's</button>
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
