@extends('sablony.sablona')
@section('kontent')
<section>
    <div class="telo">
        <div class="nadpis col-auto">
            <h1>Burger King</h1>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41263.87037093371!2d13.291010856628422!3d49.72977785450939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470aef7a38b19a33%3A0x985b48951f2d5aca!2sBurger%20King%20Plze%C5%88%20Bory%20DT!5e0!3m2!1scs!2scz!4v1704890957421!5m2!1scs!2scz"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm">
                <div class="podnadpis">
                    <label><strong>Adresa:</strong> Sukova 2987/25, 302 00 Plzeň 3</label>
                    <br>
                    <label><strong>Tel. číslo:</strong> 702 269 988 </label>
                </div>
                <div class="oteviraci_doba">
                    <h6> <strong>Otevírací doba:</strong></h6>
                    <div><strong><span>Pondělí:</span></strong> 9-22</div>
                    <div><strong><span>Úterý:</span></strong> 9-22</div>
                    <div><strong><span>Středa:</span></strong> 9-22</div>
                    <div><strong><span>Čtvrtek:</span></strong> 9-22</div>
                    <div><strong><span>Pátek:</span></strong> 9-22</div>
                    <div><strong><span>Sobota:</span></strong> 9-22</div>
                    <div><strong><span>Neděle:</span></strong> 9-22</div>
                </div>
            </div>
            <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Burger King">
                <input type="hidden" name="restaurant_type" value="Fastfood">
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