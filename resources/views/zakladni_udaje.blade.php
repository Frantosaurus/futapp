@extends('sablony.sablona')
@section('kontent')
        <section>
            <div class="telo">
                <div class="nadpis col-auto">
                    <h1>Základní údaje</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12"><input placeholder="Jméno" class="input"></div>
                    <div class="col-md-6 col-12"><input placeholder="Věk" class="input"></div>
                    <div class="col-md-6 col-12"><input placeholder="Škola/Fakulta" class="input"></div>
                    <div class="col-md-6 col-12"><input placeholder="Kontakt" class="input"></div>
                </div>
                <div class="row">
                    <div class="col-auto"><a class="dalsi" href="kdy_mas_cas.html">Uložit a pokračovat</a></div>
                </div>
                <br>
            </div>
        </section>
        @endsection
