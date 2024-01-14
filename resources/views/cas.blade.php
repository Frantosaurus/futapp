@extends('sablony.sablona')
@section('kontent')
    <div class="text">
        <h1>Kdy máte čas?</h1>
        <form id="casForm" action="{{ route('casToCache') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                <div class="col-md-4 col-12">
                    <label for="den">Den</label>
                    <input type="date" id="den" placeholder="Den" class="input mb-3" name="den" required min="{{ now()->toDateString() }}">
                </div>
                <div class="col-md-4 col-12">
                    <label for="od_kdy_hours">Od kdy</label>
                    <select name="od_kdy_hours" id="od_kdy_hours" class="input mb-3" required>
                        @for ($hour = 6; $hour < 24; $hour++)
                            @for ($minute = 0; $minute < 60; $minute += 15)
                                <option value="{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($minute, 2, '0', STR_PAD_LEFT) }}">{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($minute, 2, '0', STR_PAD_LEFT) }}</option>
                            @endfor
                        @endfor
                    </select>
                </div>
                <div class="col-md-4 col-12">
                    <label for="do_kdy_hours">Do kdy</label>
                    <select name="do_kdy_hours" id="do_kdy_hours" class="input mb-3" required>
                        <option value="je_mi_to_jedno">Je mi to jedno</option>
                        @for ($hour = 6; $hour < 24; $hour++)
                            @for ($minute = 0; $minute < 60; $minute += 15)
                                <option value="{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($minute, 2, '0', STR_PAD_LEFT) }}">{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($minute, 2, '0', STR_PAD_LEFT) }}</option>
                            @endfor
                        @endfor
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-dark tlacitko" onclick="window.location.href='/zakladni_udaje'" style="margin-right: 30px;">Vrátit se</button>
                <button type="submit" class="btn btn-outline-dark tlacitko">Pokračovat</button>
            </div>
        </form>
    </div>

    <script>
        // Skript pro ověření, aby "do_kdy" nebylo nižší než "od_kdy" a minimální rozdíl byl 15 minut
        document.getElementById('od_kdy_hours').addEventListener('change', function() {
            var odKdy = this.value;
            var doKdySelect = document.getElementById('do_kdy_hours');
            for (var i = 0; i < doKdySelect.options.length; i++) {
                if (doKdySelect.options[i].value !== 'je_mi_to_jedno' && doKdySelect.options[i].value <= odKdy) {
                    doKdySelect.options[i].disabled = true;
                } else {
                    doKdySelect.options[i].disabled = false;
                }
            }
            updateMinDifference();
        });

        document.getElementById('do_kdy_hours').addEventListener('change', function() {
            updateMinDifference();
        });

        function updateMinDifference() {
            var odKdy = document.getElementById('od_kdy_hours').value;
            var doKdy = document.getElementById('do_kdy_hours').value;
            if (doKdy !== 'je_mi_to_jedno' && doKdy <= odKdy) {
                alert('Prosím, zvolte "Do kdy" s časem později než "Od kdy".');
                // Resetovat do_kdy_hours na první povolenou hodnotu
                document.getElementById('do_kdy_hours').value = document.getElementById('do_kdy_hours').options[0].value;
            }
        }

        function validateForm() {
            var den = document.getElementById('den').value;
            var odKdy = document.getElementById('od_kdy_hours').value;
            var doKdy = document.getElementById('do_kdy_hours').value;

            if (!den || !odKdy || !doKdy) {
                alert('Prosím, vyplňte všechny hodnoty.');
                return false;
            }

            // Skript pro ověření, aby "do_kdy" nebylo nižší než "od_kdy" a minimální rozdíl byl 15 minut
            var odKdyDate = new Date('2000-01-01 ' + odKdy);
            var doKdyDate = new Date('2000-01-01 ' + doKdy);
            var differenceInMinutes = (doKdyDate - odKdyDate) / (60 * 1000);

            if (differenceInMinutes < 15) {
                alert('Minimální doba trvání musí být 15 minut.');
                return false;
            }

            return true;
        }
    </script>
@endsection
