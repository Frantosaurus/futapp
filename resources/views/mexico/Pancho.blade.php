@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Pancho's</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10314.311485591925!2d13.3877434!3d49.7375698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1dfee0072e1%3A0x23f9ba944e48a687!2sPancho&#39;s!5e0!3m2!1scs!2scz!4v1704817226247!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> 16, Slovanská 389, 326 00 Plzeň 2-Slovany</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 732 341 891 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 11-22</div>
                            <div><strong><span>Úterý:</span></strong> 11-22</div>
                            <div><strong><span>Středa:</span></strong> 11-22</div>
                            <div><strong><span>Čtvrtek:</span></strong> 11-22</div>
                            <div><strong><span>Pátek:</span></strong> 11-23</div>
                            <div><strong><span>Sobota:</span></strong> 11-23</div>
                            <div><strong><span>Neděle:</span></strong> 11-21</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Pancho's">
                <input type="hidden" name="restaurant_type" value="Mexická kuchyně">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light" onclick="window.location.href='/cesko'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light">Pokračovat</button>
                </div>
                </form>
             </div>
            </div>
        </section>
        @endsection
