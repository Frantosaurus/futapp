@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>Kebab Masarykova</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.2246312101715!2d13.369372076016345!3d49.744217037962784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1fb7ed5b459%3A0xec049eb83983dedd!2zVHlsb3ZhIDIwOTAvMSwgMzAxIDAwIFBsemXFiCAzLUppxb5uw60gUMWZZWRtxJtzdMOt!5e0!3m2!1scs!2scz!4v1704808379133!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Masarykova 839/106, 312 00 Plzeň 4-Doubravka</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 730 126 485 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 10-21</div>
                            <div><strong><span>Úterý:</span></strong> 10-21</div>
                            <div><strong><span>Středa:</span></strong> 10-21</div>
                            <div><strong><span>Čtvrtek:</span></strong> 10-21</div>
                            <div><strong><span>Pátek:</span></strong> 10-21</div>
                            <div><strong><span>Sobota:</span></strong> 12-21</div>
                            <div><strong><span>Neděle:</span></strong> zavřeno</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="Kebab Masarykova">
                <input type="hidden" name="restaurant_type" value="Kebab">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/cesko'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-dark">Pokračovat</button>
                </div>
                </form>
             </div>
            </div>
        </section>
        @endsection
