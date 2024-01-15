@extends('sablony.sablona')
@section('kontent')
<section>
    @foreach($konkretniRestaurace->chunk(3) as $chunk)
        <div class="karty">
            @foreach($chunk as $restaurace)
                <button class="karta">
                    {{ $restaurace->nazev }}
                </button>
            @endforeach
        </div>
    @endforeach
    <br>
    <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
        @csrf
        <input type="hidden" name="restaurant_name" value="Je mi to jedno">
        <input type="hidden" name="restaurant_type" value="Je mi to jedno">
        <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-outline-light tlacitko" onclick="window.history.back()"
                style="margin-right: 30px;">Vrátit se</button>
            <button type="submit" class="btn btn-outline-light tlacitko">Je mi to jedno</button>
        </div>
    </form>
</section>
@endsection
