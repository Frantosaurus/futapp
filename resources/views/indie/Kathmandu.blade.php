@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Kathmandu</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.314922913096!2d13.3793179!3d49.742518000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470aef5a5044d653%3A0xbbcba0bdfe56449d!2sIndick%C3%A1%20Nep%C3%A1lsk%C3%A1%20restaurace%20Kathmandu!5e0!3m2!1scs!2scz!4v1704745353318!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Prokopova 21, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 725 990 228 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 10:45-22</div>
                            <div><strong><span>Úterý:</span></strong> 10:45-22</div>
                            <div><strong><span>Středa:</span></strong> 10:45-22</div>
                            <div><strong><span>Čtvrtek:</span></strong> 10:45-22</div>
                            <div><strong><span>Pátek:</span></strong> 10:45-22</div>
                            <div><strong><span>Sobota:</span></strong> 11-22</div>
                            <div><strong><span>Neděle:</span></strong> 11-22</div>
                        </div>
                </div>
             </div>
            </div>
        </section>
        @endsection
