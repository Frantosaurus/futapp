@extends('sablony.sablona')

@section('kontent')
<section>
    <div class="telo">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <img src="/img/logo.png" alt="meet and eat logo">
            <div class="title m-b-md">
            Seznamte se s někým, kdo má stejnou chuť na život, a ochutnejte svět společně.
            </div>

            <button type="button" class="btn btn-outline-light" onclick="window.location.href='/zakladni_udaje'">Jdu do toho!</button>
        </div>
    </div>
</section>
@endsection