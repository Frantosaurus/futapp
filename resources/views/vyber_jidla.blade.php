@extends('sablony.sablona')
@section('kontent')
        <section>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/cina'">Asijská kuchyně</button>
                    <button class="karta" onclick="window.location.href='/indie'">Indická kuchyně</button>
                    <button class="karta" onclick="window.location.href='/cesko'">Česká kuchyně</button>
                </div>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/kebab'">Kebab</button>
                    <button class="karta" onclick="window.location.href='/italie'">Italská kuchyně</button>
                    <button class="karta" onclick="window.location.href='/mexico'">Mexická kuchyně</button>
                </div>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/fastfood'">Fastfood</button>
                    <button class="karta" onclick="window.location.href='/menza'">Menza</button>
                    <div class="karta">
                        <p></p>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/cas'">Vrátit se</button>
                <br>
            
@endsection