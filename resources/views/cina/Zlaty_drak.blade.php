@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Zlatý drak</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20382.0676709283!2d13.53760615!3d50.3150995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1fca975c28d%3A0x572e08dbb87f8f2b!2sZlat%C3%BD%20drak!5e0!3m2!1scs!2scz!4v1704736121611!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> 26, Americká 16, Jižní Předměstí, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 722 678 888 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 10-22</div>
                            <div><strong><span>Úterý:</span></strong> 10-22</div>
                            <div><strong><span>Středa:</span></strong> 10-22</div>
                            <div><strong><span>Čtvrtek:</span></strong> 10-22</div>
                            <div><strong><span>Pátek:</span></strong> 11-23</div>
                            <div><strong><span>Sobota:</span></strong> 11-23</div>
                            <div><strong><span>Neděle:</span></strong> 10-22</div>
                        </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-outline-light" style="margin-right: 20px;">Pokračovat</button>
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/cina'">Vrátit se</button>
            </div>
             </div>
            </div>
        </section>
        @endsection
