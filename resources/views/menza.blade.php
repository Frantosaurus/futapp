@extends('sablony.sablona')
@section('kontent')
<section>
                <div class="karty">
                <button class="karta" onclick="window.location.href='/menza/Menza_Bory'">Menza - Bory</button>
                <button class="karta" onclick="window.location.href='/menza/Menza_Kollarova'">Menza - Kollárová</button>
                <button class="karta" onclick="window.location.href='/cesko/UMansfelda'" style="visibility: hidden;" disabled>U Mansfelda</button>
                </div>
                <br>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Je mi to jedno">
                <input type="hidden" name="restaurant_type" value="Menza">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light tlacitko" onclick="window.location.href='/vyber_jidla'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light tlacitko">Je mi to jedno</button>
                </div>
                </form>
        @endsection
