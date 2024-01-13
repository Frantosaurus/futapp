<section>
        <div class="telo">
            <div class="nadpis col-auto">
                <h1 class="title">Vaše údaje:</h1>
                <p>Jméno: {{ $latestUser->name }}</p>
                <p>Příjmení: {{ $latestUser->last_name }}</p>
                <p>Kontakt: {{ $latestUser->contact }}</p>
                <p>Den: {{ $latestUser->den }}</p>
                <p>Od Kdy: {{ $latestUser->od_kdy }}</p>
                <p>Do Kdy: {{ $latestUser->do_kdy }}</p>
                <p>Typ restaurace: {{ $latestUser->restaurant_type }}</p>
                <p>Konkrétní restaurace: {{ $latestUser->restaurant_name }}</p>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-6 col-12 vyber">
                    <h2 class="title">Lidé kteří si vybrali stejnou restauraci jako Vy:</h2>
                    @foreach($peopleWithSameRestaurant as $person)
                        <div class="karta">
                            <p>Jméno: {{ $person->name }}</p>
                            <p>Příjmení: {{ $person->last_name }}</p>
                            <p>Kontakt: {{ $latestUser->contact }}</p>
                            <p>Den: {{ $person->den }}</p>
                            <p>Od Kdy: {{ $person->od_kdy }}</p>
                            <p>Do Kdy: {{ $person->do_kdy }}</p>
                            <p>Typ restaurace: {{ $person->restaurant_type }}</p>
                            <p>Konkrétní restaurace: {{ $person->restaurant_name }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-6 col-12 vyber">
                    <h2 class="title">Lidé kteří si vybrali stejný typ restaurace jako Vy, ale chtějí jinam:</h2>
                    @foreach($peopleWithSameTypeDifferentLocation as $person)
                        <div class="karta">
                            <p>Jméno: {{ $person->name }}</p>
                            <p>Příjmení: {{ $person->last_name }}</p>
                            <p>Kontakt: {{ $latestUser->contact }}</p>
                            <p>Den: {{ $person->den }}</p>
                            <p>Od Kdy: {{ $person->od_kdy }}</p>
                            <p>Do Kdy: {{ $person->do_kdy }}</p>
                            <p>Typ restaurace: {{ $person->restaurant_type }}</p>
                            <p>Konkrétní restaurace: {{ $person->restaurant_name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>