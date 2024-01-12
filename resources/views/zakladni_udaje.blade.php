@extends('sablony.sablona')
@section('kontent')
<section>
                    <div class="text">
                         Základní údaje
                    <div class="row">
                        <form action="{{ route('zakladni_udajeToCacheToCache') }}" method="POST">
                            @csrf
                            <div class="d-flex flex-column justify-content-center align-items-center mb-3" >
                                <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                                    <input type="text" placeholder="Jméno" class="input mb-3" name="name">
                                </div>
                                <div class="d-flex justify-content-center align-items-center col-md-4 col-12">
                                    <input type="text" placeholder="Přijmení" class="input mb-3" name="last_name">
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/hlavni_stranka'" style="margin-right: 30px;">Vrátit se</button>
                                    <button type="submit" class="btn btn-outline-dark">Pokračovat</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
</section>
@endsection