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
                <div class="row">
                    <div class="col-auto"><a class="dalsi" href="">Pokračovat</a></div>
                    <div class="col-auto"><a class="dalsi" href="">Je mi to jedno</a></div>
                </div>
                <br>
            </div>
        </section>
        @endsection
