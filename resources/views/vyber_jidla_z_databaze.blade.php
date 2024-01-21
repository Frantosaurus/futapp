@extends('sablony.sablona')
@section('kontent')
<section>
    <div class="karty">
        @php $counter = 0 @endphp
        @foreach($typyRestauraci as $typRestaurace)
        @if($counter % 3 == 0)
    </div>
    <div class="karty">
        @endif
        <button class="karta" onclick="window.location.href='{{ route('konkretni_restaurace', $typRestaurace->id) }}'">
            {{ $typRestaurace->typ_restaurace }}
        </button>
        @php $counter++ @endphp
        @endforeach
    </div>
    <br>
    <form action="{{ route('celamezipametToCacheAndSaveToDatabase') }}" method="POST">
        @csrf
        <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-outline-light tlacitko" onclick="window.location.href='/cas'"
                style="margin-right: 30px;">Vrátit se</button>
        </div>
    </form>
</section>
@endsection