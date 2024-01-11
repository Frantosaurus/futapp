@extends('sablony.sablona')
@section('kontent')
<section>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Menza_Bory') }}">Menza - Bory</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Menza_Kollarova') }}">Menza - Kollárová</a></p>
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
