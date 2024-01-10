@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Bombay express</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2580.517431902183!2d13.425847!3d49.70105969999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470aef868e8ae52f%3A0xe6ecec2a54a2cac0!2sBombay%20Express!5e0!3m2!1scs!2scz!4v1704743638087!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Olympia Plzeň, Písecká 972/1, 326 00 Plzeň 8-Černice</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 773 173 756 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 9-21</div>
                            <div><strong><span>Úterý:</span></strong> 9-21</div>
                            <div><strong><span>Středa:</span></strong> 9-21</div>
                            <div><strong><span>Čtvrtek:</span></strong> 9-21</div>
                            <div><strong><span>Pátek:</span></strong> 9-21</div>
                            <div><strong><span>Sobota:</span></strong> 9-21</div>
                            <div><strong><span>Neděle:</span></strong> 9-21</div>
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
