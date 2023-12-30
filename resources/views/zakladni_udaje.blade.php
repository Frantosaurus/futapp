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
                        <input placeholder="Příjmení" class="input" name="last_name">
                    </div>
                    <div class="col-md-6 col-12 vyber">

                    <label>Druh jídla</label><br>
                        @foreach($typJidla as $konkretni_typJidla)
                            <br>
                            <input type="checkbox" class="type_of_food" name="type_of_food" value="{{ $konkretni_typJidla->id }}">{{ $konkretni_typJidla->typ_res }}<br>
                                    <label>Konkrétní restaurace</label>
                                <select name="specific_restaurant" class="specific_restaurant">
                                    <option>Vyber možnost</option>
                                    @foreach($nazevRestaurace as $konkretni_nazevRestaurace)
                                        @if($konkretni_nazevRestaurace->typ == $konkretni_typJidla->id)
                                            <option value="{{ $konkretni_nazevRestaurace->typ }}">{{ $konkretni_nazevRestaurace->nazev }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <label>(nepovinné)</label>
                                <br>

                        @endforeach
                    </form>
                </div>
                <div class="row">
                    <p class="mssg">{{ session('mssg')}}
                    <div class="col-auto"><a class="dalsi" href="{{ route('cas') }}">Pokračovat</a></div>
                </div>
                <br>
            </div>
        </section>
        @endsection