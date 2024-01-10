@extends('sablony.sablona')
@section('kontent')
    <section>
        <div class="telo">
            <div class="nadpis col-auto">
                <h1>Základní údaje</h1>
            </div>
            <div class="row">
                <form action="{{ route('zakladni_udajeToCacheToCache') }}" method="POST">
                    @csrf
                    <div class="col-md-6 col-12">
                        <input placeholder="Jméno" class="input" name="name">
                    </div>
                    <div class="col-md-6 col-12">
                        <input placeholder="Příjmení" class="input" name="last_name">
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-outline-light" style="margin-right: 20px;">Pokračovat</button>
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/hlavni_stranka'">Vrátit se</button>
        </div>
                </form>
            </div>
            <br>
        </div>
    </section>
@endsection