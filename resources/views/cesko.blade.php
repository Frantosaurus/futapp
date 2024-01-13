@extends('sablony.sablona')
@section('kontent')
<section>
                <div class="karty">
                <button class="karta" onclick="window.location.href='/cesko/NaSpilce'">Hospoda Na Spilce</button>
                <button class="karta" onclick="window.location.href='/cesko/Lokal'">Lokál Pod Divadlem</button>
                <button class="karta" onclick="window.location.href='/cesko/Plzenka'">Plzeňka</button>
                </div>
                <div class="karty">
                <button class="karta" onclick="window.location.href='/cesko/Potrefena_husa'">Potrefená Husa</button>
                <button class="karta" onclick="window.location.href='/cesko/Zumbera'">restaurace Žumbera</button>
                <button class="karta" onclick="window.location.href='/cesko/Svejk_Tivoli'">Švejk - TIVOLI</button>
                </div>
                <div class="karty">
                <button class="karta" onclick="window.location.href='/cesko/Svejk_35'">Švejk - U pětatřicátníků</button>
                <button class="karta" onclick="window.location.href='/cesko/Velbloud'">Uctívaný Velbloud</button>
                <button class="karta" onclick="window.location.href='/cesko/UMansfelda'">U Mansfelda</button>
                </div>
                <div class="karty">
                <button class="karta" onclick="window.location.href='/cesko/UMotliku'">U Motlíků</button>
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
                <input type="hidden" name="restaurant_type" value="Česká kuchyně">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light" onclick="window.location.href='/vyber_jidla'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light">Je mi to jedno</button>
                </div>
                </form>
        </section>
        @endsection
