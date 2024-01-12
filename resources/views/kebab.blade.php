@extends('sablony.sablona')
@section('kontent')
<section>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/kebab/Alanya'">Alanya Kebab</button>
                    <button class="karta" onclick="window.location.href='/kebab/Alibaba_Kebab'">Alibaba Kebab</button>
                    <button class="karta" onclick="window.location.href='/kebab/Ali_Baba_Kebab'">Ali baba Kebab</button>
                </div>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/kebab/Family_Kebab'">Family Kebab</button>
                    <button class="karta" onclick="window.location.href='/kebab/I_love_Kebab'">I love Kebab</button>
                    <button class="karta" onclick="window.location.href='/kebab/JH_Kebab_House'">JH Kebab House</button>
                </div>
                <div class="karty">
                    <button class="karta" onclick="window.location.href='/kebab/Masarykova_Kebab'">Kebab Masarykova</button>
                    <button class="karta" onclick="window.location.href='/kebab/Tylova_Kebab'">Kebab Tylovka</button>
                    <button class="karta" onclick="window.location.href='/kebab/UTuzexu'">Kebab U Tuzexu</button>
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
