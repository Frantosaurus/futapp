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
                    <button class="karta" onclick="window.location.href='/cesko/UMansfelda'" style="visibility: hidden;" disabled>U Mansfelda</button>
                </div>
                <br>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Je mi to jedno">
                <input type="hidden" name="restaurant_type" value="Je mi to jedno">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light tlacitko" onclick="window.location.href='/cas'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light tlacitko">Je mi to jedno</button>
                </div>
                </form>
        </section>
@endsection