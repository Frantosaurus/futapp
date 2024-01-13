@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Buffalo Burger Bar</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2577.9989874439457!2d13.3742950760166!3d49.7484628376601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1faa99bd32b%3A0x73049a121cab3585!2sBuffalo%20Burger%20Bar!5e0!3m2!1scs!2scz!4v1704891455474!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Dominikánská 281, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 733 124 514 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 11-23</div>
                            <div><strong><span>Úterý:</span></strong> 11-23</div>
                            <div><strong><span>Středa:</span></strong> 11-23</div>
                            <div><strong><span>Čtvrtek:</span></strong> 11-23</div>
                            <div><strong><span>Pátek:</span></strong> 11-24</div>
                            <div><strong><span>Sobota:</span></strong> 11-24</div>
                            <div><strong><span>Neděle:</span></strong> 11-22</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Buffalo Burger Bar">
                <input type="hidden" name="restaurant_type" value="Fastfood">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/cesko'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-dark">Pokračovat</button>
                </div>
                </form>
             </div>
            </div>
        </section>
        @endsection
