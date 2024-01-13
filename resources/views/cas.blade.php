@extends('sablony.sablona')
@section('kontent')
    <div class="text">Kdy máte čas?
        <form action="{{ route('casToCache') }}" method="POST">
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
                <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/zakladni_udaje'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-dark">Pokračovat</button>
            </div>
        </div>
    </form>
@endsection