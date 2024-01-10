@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Ganesh</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.2804069060853!2d13.377998499999997!3d49.7431675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1fcaa4a88f9%3A0x4dd8272bac7a59fc!2sGanesh%20indick%C3%A1%20a%20nep%C3%A1lsk%C3%A1%20restaurace!5e0!3m2!1scs!2scz!4v1704744746735!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Americká 38, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 771 111 234 </label>    
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
