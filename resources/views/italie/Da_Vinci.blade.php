@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Pizzerie Da Vinci</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10312.028037179754!2d13.375765!3d49.7483119!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1faa3b26cfd%3A0x5d79ca18ec117272!2sPizzerie%20Da%20Vinci!5e0!3m2!1scs!2scz!4v1704810704641!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Sedláčkova 28, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 775 045 490 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 9-18</div>
                            <div><strong><span>Úterý:</span></strong> 9-18</div>
                            <div><strong><span>Středa:</span></strong> 9-18</div>
                            <div><strong><span>Čtvrtek:</span></strong> 9-18</div>
                            <div><strong><span>Pátek:</span></strong> 9-18</div>
                            <div><strong><span>Sobota:</span></strong> zavřeno</div>
                            <div><strong><span>Neděle:</span></strong> zavřeno</div>
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
