@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>KFC Plzeň Area Bory</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41263.93522239224!2d13.292073011398312!3d49.72970156892222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470aee0f6cbb7265%3A0x21ce5102046a1d7b!2sKFC%20Plze%C5%88%20Area%20Bory!5e0!3m2!1scs!2scz!4v1704891723861!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Sukova 2895/25, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 725 426 573 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 7:30-22</div>
                            <div><strong><span>Úterý:</span></strong> 7:30-22</div>
                            <div><strong><span>Středa:</span></strong> 7:30-22</div>
                            <div><strong><span>Čtvrtek:</span></strong> 7:30-22</div>
                            <div><strong><span>Pátek:</span></strong> 7:30-24</div>
                            <div><strong><span>Sobota:</span></strong> 7:30-24</div>
                            <div><strong><span>Neděle:</span></strong> 7:30-22</div>
                        </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-outline-light" style="margin-right: 20px;">Pokračovat</button>
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/fasfood'">Vrátit se</button>
            </div>
             </div>
            </div>
        </section>
        @endsection
