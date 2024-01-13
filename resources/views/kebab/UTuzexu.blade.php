@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Kebab U Tuzexu</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10312.19536335015!2d13.3716508!3d49.7475248!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1fa475b22cf%3A0x7eda4ccf5591ed1a!2sKebab%20U%20Tuzexu!5e0!3m2!1scs!2scz!4v1704807542293!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Palackého 87/13, 301 00 Plzeň 3-Jižní Předměstí</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> / </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 9-24</div>
                            <div><strong><span>Úterý:</span></strong> 9-24</div>
                            <div><strong><span>Středa:</span></strong> 9-24</div>
                            <div><strong><span>Čtvrtek:</span></strong> 9-24</div>
                            <div><strong><span>Pátek:</span></strong> 9-4</div>
                            <div><strong><span>Sobota:</span></strong> 9:30-4</div>
                            <div><strong><span>Neděle:</span></strong> 10-23</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Kebab U Tuzexu">
                <input type="hidden" name="restaurant_type" value="Kebab">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-dark tlacitko" onclick="window.location.href='/cesko'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-dark tlacitko">Pokračovat</button>
                </div>
                </form>
             </div>
            </div>
        </section>
        @endsection
