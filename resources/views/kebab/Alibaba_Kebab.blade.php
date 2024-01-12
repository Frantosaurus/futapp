@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>ALIBABA Kebab</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10311.161145491567!2d13.4154264!3d49.7523896!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af125b11cde71%3A0xc6f18cbab693f266!2sALIBABA%20KEBAB!5e0!3m2!1scs!2scz!4v1704808042725!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> Masarykova 1201/75, 312 00 Plzeň 4-Doubravka</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 601 523 693 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 9-22:30</div>
                            <div><strong><span>Úterý:</span></strong> 9-22:30</div>
                            <div><strong><span>Středa:</span></strong> 9-22:30</div>
                            <div><strong><span>Čtvrtek:</span></strong> 9-22:30</div>
                            <div><strong><span>Pátek:</span></strong> 9-22:30</div>
                            <div><strong><span>Sobota:</span></strong> 10-22</div>
                            <div><strong><span>Neděle:</span></strong> 10-22</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="ALIBABA Kebab">
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
