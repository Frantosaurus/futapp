@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Big Burger</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10313.053562314784!2d13.3788536!3d49.7434877!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1e47d787e15%3A0x7f4e12aaf09668c2!2sBig%20Burger!5e0!3m2!1scs!2scz!4v1704890713204!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Goethova 356, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 371 010 034 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 9-24</div>
                            <div><strong><span>Úterý:</span></strong> 9-24</div>
                            <div><strong><span>Středa:</span></strong> 9-24</div>
                            <div><strong><span>Čtvrtek:</span></strong> 9-24</div>
                            <div><strong><span>Pátek:</span></strong> 9-6</div>
                            <div><strong><span>Sobota:</span></strong> 10-6</div>
                            <div><strong><span>Neděle:</span></strong> 11-22</div>
                        </div>
                </div>
             </div>
            </div>
        </section>
        @endsection
