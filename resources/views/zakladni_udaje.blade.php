@extends('sablony.sablona')
@section('kontent')
    <section>
        <div class="telo">
            <div class="nadpis col-auto">
                <h1>Základní údaje</h1>
            </div>
            <div class="row">
                <form action="{{ route('storeToCache') }}" method="POST">
                    @csrf
                    <div class="col-md-6 col-12">
                        <input placeholder="Jméno" class="input" name="name">
                    </div>
                    <div class="col-md-6 col-12">
                        <input placeholder="Příjmení" class="input" name="last_name">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="dalsi">Pokračovat</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </section>
@endsection