@extends('sablony.sablona')
@section('kontent')
<div class="telo">
    <div class="d-flex align-items-start justify-content-start">
        <img src="/img/logo.png" alt="logo" class="my-2" style="width: 10%;"> 
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 25vh;">
        <h1>Kdy máte čas?</h1>
    </div>
    <form action="{{ route('storeToCacheAndSaveToDatabase') }}" method="POST">
        @csrf
        <div class="d-flex flex-column justify-content-center align-items-center mb-3" >
            <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                <input type="text" placeholder="Den" class="input mb-3" name="den">
            </div>
            <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                <input type="text" placeholder="Od kdy?" class="input mb-3" name="od_kdy">
            </div>
            <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                <input type="text" placeholder="Do kdy?" class="input mb-3" name="do_kdy">
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-outline-light" style="margin-right: 20px;">Uložit a pokračovat</button>
            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/zakladni_udaje'">Vrátit se</button>
        </div>
    </form>
</div>
@endsection