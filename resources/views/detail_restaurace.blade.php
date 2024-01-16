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
                        {!! $restaurace->mapa !!}
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
                    <input type="hidden" name="restaurant_name" value="{{ $restaurace->nazev }}">
                    <input type="hidden" name="restaurant_type" value="{{ $restaurace->typ }}">
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-outline-dark tlacitko" onclick="window.history.back()"
                            style="margin-right: 30px;">Vrátit se</button>
                        <button type="submit" class="btn btn-outline-dark tlacitko">Pokračovat</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
