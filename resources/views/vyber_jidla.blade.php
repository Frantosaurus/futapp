@extends('sablony.sablona')
@section('kontent')
        <section>
            <div class="telo">
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="http://127.0.0.1:8000/cina">Asijská kuchyně</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="http://127.0.0.1:8000/indie">Indická kuchyně</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="http://127.0.0.1:8000/cesko">Česká kuchyně</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="http://127.0.0.1:8000/kebab">Kebab</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="http://127.0.0.1:8000/italie">Italská kuchyně</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="http://127.0.0.1:8000/mexico">Mexická kuchyně</a></p>
                    </div>
                </div>
                <div class="karty">
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="http://127.0.0.1:8000/fastfood">Fastfood</a></p>        
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
                        <p><a href="http://127.0.0.1:8000/menza">Menza</a></p>
                    </div>
                    <div class="karta">
                        <img src="/img/logo.png">
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
        </section>
            </div> 
           <!-- @foreach($restaurace as $konkterni_restaurace)
            <div>
                {{$konkterni_restaurace->typ}}
            </div>
            @endforeach-->
        </section>
@endsection