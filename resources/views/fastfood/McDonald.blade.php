@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>McDonald's</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24531.091767783906!2d13.368441006976512!3d49.738783230095684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1e478f44ee1%3A0xc2826910401e270d!2sMcDonald&#39;s!5e0!3m2!1scs!2scz!4v1704891597720!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Americká 46, 301 50 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 725 424 804 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 7-24</div>
                            <div><strong><span>Úterý:</span></strong> 7-24</div>
                            <div><strong><span>Středa:</span></strong> 7-1</div>
                            <div><strong><span>Čtvrtek:</span></strong> 7-1</div>
                            <div><strong><span>Pátek:</span></strong> 7-5</div>
                            <div><strong><span>Sobota:</span></strong> 7-5</div>
                            <div><strong><span>Neděle:</span></strong> 7-24</div>
                        </div>
                </div>
             </div>
            </div>
        </section>
        @endsection
