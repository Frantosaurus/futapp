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
        <input type="hidden" name="restaurant_name" value="Je mi to jedno">
        <input type="hidden" name="restaurant_type" value="Je mi to jedno">
        <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-outline-light tlacitko" onclick="window.location.href='/cas'"
                style="margin-right: 30px;">Vrátit se</button>
            <button type="submit" class="btn btn-outline-light tlacitko">Je mi to jedno</button>
        </div>
    </form>
</section>
@endsection