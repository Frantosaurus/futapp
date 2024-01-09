@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Lokál Pod Divadlem</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10312.534282699422!2d13.3739724!3d49.7459305!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1fb195e0775%3A0xbeaa865f3a70f3d3!2sLok%C3%A1l%20Pod%20Divadlem!5e0!3m2!1scs!2scz!4v1704806347449!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> 34, Bezručova 315, Vnitřní Město, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 778 726 191 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 11-24</div>
                            <div><strong><span>Úterý:</span></strong> 11-24</div>
                            <div><strong><span>Středa:</span></strong> 11-24</div>
                            <div><strong><span>Čtvrtek:</span></strong> 11-1</div>
                            <div><strong><span>Pátek:</span></strong> 11-1</div>
                            <div><strong><span>Sobota:</span></strong> 12-23</div>
                            <div><strong><span>Neděle:</span></strong> 11-24</div>
                        </div>
                </div>
             </div>
            </div>
        </section>
        @endsection
