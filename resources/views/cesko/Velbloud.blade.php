@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Uctívaný Velbloud</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10313.052371913001!2d13.3748635!3d49.7434933!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1e354d6a16f%3A0x44b467ade9cbcd3d!2zVWN0w612YW7DvSBWZWxibG91ZA!5e0!3m2!1scs!2scz!4v1704806985341!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Americká 778/20, 301 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 377 224 897</label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 11-24</div>
                            <div><strong><span>Úterý:</span></strong> 11-24</div>
                            <div><strong><span>Středa:</span></strong> 11-24</div>
                            <div><strong><span>Čtvrtek:</span></strong> 11-24</div>
                            <div><strong><span>Pátek:</span></strong> 11-1</div>
                            <div><strong><span>Sobota:</span></strong> 11-1</div>
                            <div><strong><span>Neděle:</span></strong> 11-23</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Uctívaný Velbloud">
                <input type="hidden" name="restaurant_type" value="Česká kuchyně">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/cesko'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-dark">Pokračovat</button>
                </div>
                </form>
             </div>
            </div>
        </section>
        @endsection
