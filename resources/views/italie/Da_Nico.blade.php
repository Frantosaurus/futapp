@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Ristorante & Pizzerie Da Nico</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10313.649877450514!2d13.3730321!3d49.7406824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af13ac5699d35%3A0x30abd0f45c968230!2sRistorante%20%26%20Pizzerie%20Da%20Nico!5e0!3m2!1scs!2scz!4v1704810888215!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> nám. T. G. Masaryka 20, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 702 040 483 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 11-22</div>
                            <div><strong><span>Úterý:</span></strong> 11-22</div>
                            <div><strong><span>Středa:</span></strong> 11-22</div>
                            <div><strong><span>Čtvrtek:</span></strong> 11-22</div>
                            <div><strong><span>Pátek:</span></strong> 11-23</div>
                            <div><strong><span>Sobota:</span></strong> 12-22</div>
                            <div><strong><span>Neděle:</span></strong> Zavřeno</div>
                        </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-outline-light" style="margin-right: 20px;">Pokračovat</button>
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/italie'">Vrátit se</button>
            </div>
             </div>
            </div>
        </section>
        @endsection
