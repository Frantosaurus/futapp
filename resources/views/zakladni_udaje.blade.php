@extends('sablony.sablona')
@section('kontent')
<section>
    <div class="text">
        <h1>Základní údaje</h1>
        <div class="row">
            <form id="zakladniUdajeForm" action="{{ route('zakladni_udajeToCacheToCache') }}" method="POST" onsubmit="return validateForm()">
                @csrf
                <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                    <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                        <input type="text" placeholder="Jméno" class="input mb-3" name="name" required>
                    </div>
                    <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                        <input type="text" placeholder="Přijmení" class="input mb-3" name="last_name" required>
                    </div>
                    <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                        <input type="text" placeholder="Kontakt na vás" class="input mb-3" name="contact" required>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-outline-dark tlacitko" onclick="window.location.href='/hlavni_stranka'" style="margin-right: 30px;">Vrátit se</button>
                        <button type="submit" class="btn btn-outline-dark tlacitko">Pokračovat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    function validateForm() {
        var name = document.forms["zakladniUdajeForm"]["name"].value;
        var lastName = document.forms["zakladniUdajeForm"]["last_name"].value;
        var contact = document.forms["zakladniUdajeForm"]["contact"].value;

        if (name == "" || lastName == "" || contact == "") {
            alert("Prosím, vyplňte všechny hodnoty.");
            return false;
        }
    }
</script>
@endsection
