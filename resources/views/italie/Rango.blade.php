@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Rango restaurant</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10312.139687382698!2d13.3796247!3d49.7477867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1e564fd2c7d%3A0x54944d8dd9d0d10d!2sRango%20Restaurant%2C%20Hotel%2C%20Winebar!5e0!3m2!1scs!2scz!4v1704809311714!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Pražská 89/10, 301 00 Plzeň 3-Vnitřní Město</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 377 329 969 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 11-23</div>
                            <div><strong><span>Úterý:</span></strong> 11-23</div>
                            <div><strong><span>Středa:</span></strong> 11-23</div>
                            <div><strong><span>Čtvrtek:</span></strong> 11-23</div>
                            <div><strong><span>Pátek:</span></strong> 11-23</div>
                            <div><strong><span>Sobota:</span></strong> 12-23</div>
                            <div><strong><span>Neděle:</span></strong> 12-23</div>
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
