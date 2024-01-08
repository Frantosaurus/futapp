@extends('sablony.sablona')
@section('kontent')
       <section>
            <div class="telo">
                <div class="nadpis col-auto">
                    <h1>Kdy máš čas?</h1>
                </div>
                <div class="row">
                    <div class="col-12"><input placeholder="Den" class="input"></div>
                    <div class="col-md-6 col-12"><input placeholder="Od kdy?" class="input"></div>
                    <div class="col-md-6 col-12"><input placeholder="Do kdy?" class="input"></div>
                </div>
                <div class="row">
                    <div class="col-auto"><a class="dalsi" href="{{ url('/vyber_jidla') }}">Uložit a pokračovat</a></div>
                </div>
                <br>
            </div>
        </section>
        @endsection