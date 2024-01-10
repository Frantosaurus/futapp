@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Kanchenjunga</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.7808539211214!2d13.398607000000002!3d49.733749800000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470aefe22590831f%3A0xf38f4a2b77fc711a!2sKanchenjunga%20indick%C3%A1%20nep%C3%A1lsk%C3%A1%20restaurace%20Plze%C5%88!5e0!3m2!1scs!2scz!4v1704745167962!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> nám. Gen. Píky 2210/13, 326 00 Plzeň 2-Slovany-Východní Předměstí</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 776 256 539 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 11-22</div>
                            <div><strong><span>Úterý:</span></strong> 11-22</div>
                            <div><strong><span>Středa:</span></strong> 11-22</div>
                            <div><strong><span>Čtvrtek:</span></strong> 11-22</div>
                            <div><strong><span>Pátek:</span></strong> 11-22</div>
                            <div><strong><span>Sobota:</span></strong> 11-22</div>
                            <div><strong><span>Neděle:</span></strong> zavřeno</div>
                        </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-outline-light" style="margin-right: 20px;">Pokračovat</button>
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/indie'">Vrátit se</button>
            </div>
             </div>
            </div>
        </section>
        @endsection
