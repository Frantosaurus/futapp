@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Restaurace U Motlíků</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10315.394998192112!2d13.4090313!3d49.732472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470aee2af835662b%3A0x278995cc3e8ee09b!2sRestaurace%20U%20Motl%C3%ADk%C5%AF!5e0!3m2!1scs!2scz!4v1704805918460!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Petřínská 31, 326 00 Plzeň 2-Slovany</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 731 959 121 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 10-14</div>
                            <div><strong><span>Úterý:</span></strong> 10-14</div>
                            <div><strong><span>Středa:</span></strong> 10-14</div>
                            <div><strong><span>Čtvrtek:</span></strong> 10-14</div>
                            <div><strong><span>Pátek:</span></strong> 10-14</div>
                            <div><strong><span>Sobota:</span></strong> Zavřeno</div>
                            <div><strong><span>Neděle:</span></strong> Zavřeno</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Restaurace U Motlíků">
                <input type="hidden" name="restaurant_type" value="Česká kuchyně">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-dark tlacitko" onclick="window.location.href='/cesko'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-dark tlacitko">Pokračovat</button>
                </div>
                </form>
             </div>
            </div>
        </section>
        @endsection
