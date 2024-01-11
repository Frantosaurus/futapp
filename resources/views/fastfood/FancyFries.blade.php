@extends('sablony.sablona')
@section('kontent')
<section>
            <div class="telo">
            <div class="nadpis col-auto">
                    <h1>FÆNCY FRIES Plzeň</h1>
                </div>
             <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10316.220744978506!2d13.3440703!3d49.7285867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af15945a1b539%3A0x50c6f15fb819208b!2zRsOGTkNZIEZSSUVTIFBsemXFiA!5e0!3m2!1scs!2scz!4v1704890600373!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm">
                        <div class ="podnadpis">
                        <label><strong>Adresa:</strong> U Letiště 1704/2, 318 00 Plzeň 3</label>
                        <br>
                            <label><strong>Tel. číslo:</strong> 605 365 669 </label>    
                        </div>
                        <div class="oteviraci_doba">
                            <h6> <strong>Otevírací doba:</strong></h6>
                            <div><strong><span>Pondělí:</span></strong> 10-20</div>
                            <div><strong><span>Úterý:</span></strong> 10-20</div>
                            <div><strong><span>Středa:</span></strong> 10-20</div>
                            <div><strong><span>Čtvrtek:</span></strong> 10-20</div>
                            <div><strong><span>Pátek:</span></strong> 10-20</div>
                            <div><strong><span>Sobota:</span></strong> 10-20</div>
                            <div><strong><span>Neděle:</span></strong> 10-20</div>
                        </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_name" value="FÆNCY FRIES Plzeň">
                <input type="hidden" name="restaurant_type" value="Fastfood">
                <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light" onclick="window.location.href='/cesko'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-light">Pokračovat</button>
                </div>
                </form>
             </div>
            </div>
        </section>
        @endsection
