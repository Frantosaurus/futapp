@extends('sablony.sablona')

@section('kontent')
    <section>
        @foreach($konkretniRestaurace->chunk(3) as $chunk)
            <div class="karty">
                @foreach($chunk as $restaurace)
                    <a href="{{ route('detail_restaurace.show', ['restaurace' => $restaurace->id]) }}" class="karta">
                        {{ $restaurace->nazev }}
                    </a>
                @endforeach
            </div>
        @endforeach
        <br>
        <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
            @csrf
            <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-light tlacitko" onclick="window.history.back()"
                    style="margin-right: 30px;">Vrátit se</button>           
            </div>
        </form>
    </section>
@endsection
