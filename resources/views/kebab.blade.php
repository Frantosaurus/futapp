@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Alanya') }}">Alanya Kebab</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Alibaba_Kebab') }}">Alibaba Kebab</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Ali_Baba_Kebab') }}">Ali baba Kebab</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Family_Kebab') }}">Family Kebab</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('I_love_Kebab') }}">I love Kebab</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('JH_Kebab_House') }}">JH Kebab House</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Masarykova_Kebab') }}">Kebab Masarykova</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('Tylova_Kebab') }}">Kebab Tylovka</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="{{ route('UTuzexu') }}">Kebab U Tuzexu</a></p>
                    </div>
                </div>
                <br>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Je mi to jedno">
                <input type="hidden" name="restaurant_type" value="Kebab">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light" onclick="window.location.href='/cas'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light">Je mi to jedno</button>
                </div>
                </form>
        </section>
        @endsection
