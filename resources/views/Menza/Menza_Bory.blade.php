@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Menza Západočeské univerzity v Plzni - Bory</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41248.90814080602!2d13.29877853393553!3d49.74737581501717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470aee0a6e89e4e9%3A0xf8bc5ef33386c9e4!2sMenza%20Z%C3%A1pado%C4%8Desk%C3%A9%20univerzity%20v%20Plzni!5e0!3m2!1scs!2scz!4v1704891914053!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Univerzitní 12, 306 14 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 377 634 880 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 10:30-14:30</div>
                            <div><strong><span>Úterý:</span></strong> 10:30-14:30</div>
                            <div><strong><span>Středa:</span></strong> 10:30-14:30</div>
                            <div><strong><span>Čtvrtek:</span></strong> 10:30-14:30</div>
                            <div><strong><span>Pátek:</span></strong> 10:30-14:30</div>
                            <div><strong><span>Sobota:</span></strong> Zavřeno</div>
                            <div><strong><span>Neděle:</span></strong> Zavřeno</div>
                        </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-outline-light" style="margin-right: 20px;">Pokračovat</button>
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/menza'">Vrátit se</button>
            </div>
             </div>
            </div>
        </section>
        @endsection
