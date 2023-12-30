@extends('sablony.sablona')
@section('kontent')
    <section>
        <div class="telo">
            <div class="nadpis col-auto">
                <h1>Základní údaje</h1>
            </div>
            <div class="row">
                <form action="{{ route('udaje') }}" method="POST">
                    @csrf
                    <div class="col-md-6 col-12">
                        <input placeholder="Jméno" class="input" name="name">
                    </div>
                    <div class="col-md-6 col-12">
                        <input placeholder="Příjmení" class="input" name="last_name">
                    </div>
                    <div class="col-md-6 col-12 vyber">
                        <label>Druh jídla</label><br>
                        @foreach($typJidla as $konkretni_typJidla)
                            <br>
                            <input type="checkbox" class="type_of_food_checkbox" name="type_of_food[]" value="{{ $konkretni_typJidla->id }}">{{ $konkretni_typJidla->typ_res }}<br>
                        @endforeach
                        <br>
                        <input type="button" value="Zobrazit restaurace" onclick="zobrazRestaurace()">
                        <div class="zaskrnuiti" style="display: none;">
                            @foreach($typJidla as $konkretni_typJidla)
                                <label class="typ-popis" data-type-id="{{ $konkretni_typJidla->id }}">{{ $konkretni_typJidla->popis }}</label>
                                <select name="specific_restaurant[{{ $konkretni_typJidla->id }}][]" class="specific_restaurant" data-type-id="{{ $konkretni_typJidla->id }}">
                                    <option>Vyber možnost</option>
                                    @foreach($nazevRestaurace as $konkretni_nazevRestaurace)
                                        @if($konkretni_nazevRestaurace->typ == $konkretni_typJidla->id)
                                            <option value="{{ $konkretni_nazevRestaurace->id }}">{{ $konkretni_nazevRestaurace->nazev }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <label>(nepovinné)</label>
                                <br>
                            @endforeach
                        </div>
                        <input type="submit" value="Uložit">
                    </div>
                </form>
            </div>
            <div class="row">
                <p class="mssg">{{ session('mssg')}}</p>
                <div class="col-auto"><a class="dalsi" href="{{ route('cas') }}">Pokračovat</a></div>
            </div>
            <br>
        </div>
    </section>

    <script>
        function zobrazRestaurace() {
            var checkboxes = document.querySelectorAll('.type_of_food_checkbox');
            var zaskrnuitiDiv = document.querySelector('.zaskrnuiti');

            zaskrnuitiDiv.innerHTML = ''; // Vyprázdní obsah divu před přidáním nových elementů

            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    var typeId = checkbox.value;
                    var select = document.createElement('select');
                    select.name = 'specific_restaurant[' + typeId + '][]';
                    select.className = 'specific_restaurant';
                    select.dataset.typeId = typeId;
                    var option = document.createElement('option');
                    option.text = 'Vyber možnost';
                    select.add(option);

                    @foreach($nazevRestaurace as $konkretni_nazevRestaurace)
                        if ({{$konkretni_nazevRestaurace->typ}} == typeId) {
                            var option = document.createElement('option');
                            option.value = '{{ $konkretni_nazevRestaurace->id }}';
                            option.text = '{{ $konkretni_nazevRestaurace->nazev }}';
                            select.add(option);
                        }
                    @endforeach

                    var label = document.createElement('label');
                    label.className = 'typ-popis';
                    label.dataset.typeId = typeId;
                    label.textContent = document.querySelector('.type_of_food_checkbox[value="' + typeId + '"]').nextSibling.textContent.trim();

                    zaskrnuitiDiv.appendChild(label);
                    zaskrnuitiDiv.appendChild(select);
                }
            });

            if (zaskrnuitiDiv.childElementCount > 0) {
                zaskrnuitiDiv.style.display = 'block';
            } else {
                zaskrnuitiDiv.style.display = 'none';
            }
        }
    </script>
@endsection
