@extends('sablony.sablona')

@section('kontent')
<section>
    <div class="text">
        <h1>
            Seznamte se s někým,
            <br>
            kdo má stejnou chuť na život
            <br>
            a ochutnejte svět společně.
        </h1>
        <br>
        <br>
        <button type="button" class="btn btn-outline-dark btn-lg tlacitko"
            onclick="window.location.href='/zakladni_udaje'">Jdu do toho!</button><br>
            <button type="button" class="btn btn-outline-dark tlacitko" onclick="window.location.href='/vyber_jidla'">Chci se podívat jaký je výběr</button>
    </div>

</section>
@endsection