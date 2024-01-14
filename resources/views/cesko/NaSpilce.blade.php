@extends('sablony.sablona')
@section('kontent')
<section>
    <div class="telo">
        <div class="nadpis col-auto">
            <h1>Hospoda Na Spilce</h1>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20382.0676709283!2d13.53760615!3d50.3150995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1f625644017%3A0x9c48b1bb3f638f8d!2sLOTUS%20asijsk%C3%A1%20kuchyn%C4%9B!5e0!3m2!1scs!2scz!4v1704734421570!5m2!1scs!2scz"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm">
                <div class="podnadpis">
                    <label><strong>Adresa:</strong> U Prazdroje 64/7, 301 00 Plzeň 3</label>
                    <br>
                    <label><strong>Tel. číslo:</strong> 778 551 179 </label>
                </div>
                <div class="oteviraci_doba">
                    <h6> <strong>Otevírací doba:</strong></h6>
                    <div><strong><span>Pondělí:</span></strong> zavřeno</div>
                    <div><strong><span>Úterý:</span></strong> 11-22</div>
                    <div><strong><span>Středa:</span></strong> 11-22</div>
                    <div><strong><span>Čtvrtek:</span></strong> 11-22</div>
                    <div><strong><span>Pátek:</span></strong> 11-14</div>
                    <div><strong><span>Sobota:</span></strong> 11-22</div>
                    <div><strong><span>Neděle:</span></strong> 11-22</div>
                </div>
            </div>
            <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Hospoda Na Spilce">
                <input type="hidden" name="restaurant_type" value="Česká kuchyně">
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-outline-dark tlacitko" onclick="window.location.href='/cesko'"
                        style="margin-right: 30px;">Vrátit se</button>
                    <button type="submit" class="btn btn-outline-dark tlacitko">Pokračovat</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection