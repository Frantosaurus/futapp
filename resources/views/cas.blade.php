@extends('sablony.sablona')
@section('kontent')
    <div class="text">
        <h1>Kdy máte čas?</h1>
        <form action="{{ route('casToCache') }}" method="POST">
            @csrf
            <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                    <!-- Upraveno pro kalendář -->
                    <label>Den
                    <input type="date" placeholder="Den" class="input mb-3" name="den" required>
                </div>
                <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                    <!-- Upraveno pro výběr času -->
                    <label>Od kdy
                    <input type="time" placeholder="Od kdy?" class="input mb-3" name="od_kdy" required>
                </div>
                <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                    <!-- Upraveno pro výběr času -->
                    <label>Do kdy
                    <input type="time" placeholder="Do kdy?" class="input mb-3" name="do_kdy" required>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-dark tlacitko" onclick="window.location.href='/zakladni_udaje'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-dark tlacitko">Pokračovat</button>
            </div>
        </form>
    </div>
@endsection
