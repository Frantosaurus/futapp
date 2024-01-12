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
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Je mi to jedno">
                <input type="hidden" name="restaurant_type" value="Je mi to jedno">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light" onclick="window.location.href='/cas'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light">Je mi to jedno</button>
                </div>
                </form>
        </section>
@endsection