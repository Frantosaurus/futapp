@extends('sablony.sablona')
@section('kontent')
        <section>
            <div class="telo">
                <div class="karty">
                    <div class="karta">
                        <img src="/img/IMG_0033.png">
                        <p>Asijská kuchyně</p>
                    </div>
                    <div class="karta">
                        <img src="/img/IMG_0033.png">
                        <p>Indická kuchyně</p>
                    </div>
                    <div class="karta">
                        <img src="/img/IMG_0033.png">
                        <p>Česká kuchyně</p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/IMG_0033.png">
                        <p>Kebab</p>
                    </div>
                    <div class="karta">
                        <img src="/img/IMG_0033.png">
                        <p>Italská kuchyně</p>
                    </div>
                    <div class="karta">
                        <img src="/img/IMG_0033.png">
                        <p>Mexická kuchyně</p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/IMG_0033.png">
                        <p>Menza</p>
                    </div>
                    <div class="karta">
                        <img src="/img/IMG_0033.png">
                        <p></p>
                    </div>
                    <div class="karta">
                        <img src="/img/IMG_0033.png">
                        <p></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto"><a class="dalsi" href="konkretni_jidlo_cina.html">Pokračovat</a></div>
                    <div class="col-auto"><a class="dalsi" href="konkretni_jidlo_mexico.html">Je mi to jedno</a></div>
                </div>
                <br>
            </div>
            <!-- @foreach($restaurace as $konkterni_restaurace)
            <div>
                {{ $konkterni_restaurace['nazev']}} - {{ $konkterni_restaurace['ulice']}}
            </div>
            @endforeach -->
        </section>
@endsection