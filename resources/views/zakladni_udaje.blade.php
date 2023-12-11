@extends('sablony.sablona')
@section('kontent')
        <section>
            <div class="telo">
                <div class="nadpis col-auto">
                    <h1>Základní údaje</h1>
                </div>
                <div class="row">
                    <form action="{{ route('udaje') }}" method="POST">
                        @csrf
                    <div class="col-md-6 col-12">
                        <input placeholder="Jméno" class="input" name="name">
                    </div>
                    <div class="col-md-6 col-12">
                        <input placeholder="Příjmení" class="input" name="lastName">
                    </div>
                    <div class="col-md-6 col-12 vyber">
                        <label>Druh jídla</label>
                        <select name="type_of_food" id="type_of_food" name="type_of_food">
                         @foreach($typJidla as $konkterni_typJidla)
                            <option>{{$konkterni_typJidla->typ}}</option>  
                        @endforeach
                        </select>      
                    </div>
                    <div class="col-md-6 col-12 vyber">
                        <label>Konkétní restaurace</label>
                        <select name="specific_restaurant" id="specific_restaurant" name="specific_restaurant">
                            <option>Indie</option>
                            <option>Čína</option>
                            <option>Fast food</option>
                        </select>
                        <input type="submit" value="Uložit">
                    </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-auto"><a class="dalsi" href="{{ route('cas') }}">Pokračovat</a></div>
                </div>
                <br>
            </div>
        </section>
        @endsection
