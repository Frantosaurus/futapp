@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Švejk Restaurant U Pětatřicátníků</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10312.190877818179!2d13.3757281!3d49.7475459!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1fab8c29f95%3A0x842ba2338843000c!2zxaB2ZWprIFJlc3RhdXJhbnQgVSBQxJt0YXTFmWljw6F0bsOta8Wv!5e0!3m2!1scs!2scz!4v1704805657231!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Riegrova 227/12, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 725 810 258 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 11-23</div>
                            <div><strong><span>Úterý:</span></strong> 11-23</div>
                            <div><strong><span>Středa:</span></strong> 11-23</div>
                            <div><strong><span>Čtvrtek:</span></strong> 11-23</div>
                            <div><strong><span>Pátek:</span></strong> 11-24</div>
                            <div><strong><span>Sobota:</span></strong> 11-24</div>
                            <div><strong><span>Neděle:</span></strong> 11-22</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Švejk Restaurant U Pětatřicátníků">
                <input type="hidden" name="restaurant_type" value="Česká kuchyně">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light" onclick="window.location.href='/cesko'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light">Pokračovat</button>
                </div>
                </form>
             </div>
            </div>
        </section>
        @endsection
