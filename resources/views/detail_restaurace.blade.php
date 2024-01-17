@extends('sablony.sablona')

@section('kontent')
    <section>
        <div class="telo">
            <div class="nadpis col-auto">
                <h1>{{ $restaurace->nazev }}</h1>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="google-map">
                        <iframe
                        src="{!! $restaurace->mapa !!}"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="podnadpis">
                        <label><strong>Adresa:</strong> {{ $restaurace->adresa }}</label>
                        <br>
                        <label><strong>Tel. číslo:</strong> {{ $restaurace->telefon }} </label>
                    </div>
                </div>
                <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
                    @csrf
                    <input type="hidden" name="restaurant_name" value="{{ $restaurace->id }}">
                    <input type="hidden" name="restaurant_type" value="{{ $restaurace->typ_id}}">
                    <div class="d-flex justify-content-center align-items-right">
                        <button type="button" class="btn btn-outline-dark tlacitko" onclick="window.history.back()"
                            style="margin-right: 30px;">Vrátit se</button>
                        <button type="submit" class="btn btn-outline-dark tlacitko">Pokračovat</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
