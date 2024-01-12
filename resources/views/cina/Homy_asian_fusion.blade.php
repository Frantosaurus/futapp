@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Homy Asian Fusion</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.1470196000296!2d13.374952676016404!3d49.745677437858596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1d626e5bdf5%3A0xd4eb791e7ce2f1ad!2sHomy%20Asian%20Fusion!5e0!3m2!1scs!2scz!4v1704735405936!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Bezručova 149/4, 301 00 Plzeň 3-Vnitřní Město</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 739 026 789 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 11–15, 17:30–22</div>
                            <div><strong><span>Úterý:</span></strong> 11–15, 17:30–22</div>
                            <div><strong><span>Středa:</span></strong> 11–15, 17:30–22</div>
                            <div><strong><span>Čtvrtek:</span></strong> 11–15, 17:30–22</div>
                            <div><strong><span>Pátek:</span></strong> 11–23</div>
                            <div><strong><span>Sobota:</span></strong> 11–23</div>
                            <div><strong><span>Neděle:</span></strong> 12-22</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Homy Asian Fusion">
                <input type="hidden" name="restaurant_type" value="Asijská kuchyně">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/cesko'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-dark">Pokračovat</button>
                </div>
                </form>
             </div>
            </div>
        </section>
        @endsection
