<section>
    <div class="telo">
        <div class="nadpis col-auto">
            <h1 class="title">Vaše údaje:</h1>
            <p>Jméno: {{ $latestUser->name }}</p>
            <p>Příjmení: {{ $latestUser->last_name }}</p>
            <p>Kontakt: {{ $latestUser->contact }}</p>
            <p>Den: {{ \Carbon\Carbon::parse($latestUser->den)->format('d.m.Y') }}</p>
            <p>Od Kdy: {{ $latestUser->od_kdy }}</p>
            <p>Do Kdy: {{ $latestUser->do_kdy }}</p>
            <p>Typ restaurace: {{ $latestUser->restaurant_type }}</p>
            <p>Konkrétní restaurace: {{ $latestUser->restaurant_name }}</p>
            <hr>
            <hr>
        </div>

        <div class="row">
            @if(count($peopleWithSameRestaurant) > 0)
                <div class="col-md-6 col-12 vyber">
                    <h2 class="title">Lidé kteří si vybrali stejnou restauraci jako Vy:</h2>
                    @foreach($peopleWithSameRestaurant as $person)
                    <div class="karta">
                        <p>Jméno: {{ $person->name }}</p>
                        <p>Příjmení: {{ $person->last_name }}</p>
                        <p>Kontakt: {{ $latestUser->contact }}</p>
                        <p>Den: {{ \Carbon\Carbon::parse($person->den)->format('d.m.Y') }}</p>
                        <p>Od Kdy: {{ $person->od_kdy }}</p>
                        <p>Do Kdy: {{ $person->do_kdy }}</p>
                        <p>Typ restaurace: {{ $person->restaurant_type }}</p>
                        <p>Konkrétní restaurace: {{ $person->restaurant_name }}</p>
                        <hr>
                    </div>
                @endforeach
            </div>
            @endif
            @if(count($peopleWithSameTypeDifferentLocation) > 0)
                <div class="col-md-6 col-12 vyber">
                    <h2 class="title">Lidé kteří si vybrali stejný typ restaurace jako Vy, ale chtějí jinam:</h2>
                    @foreach($peopleWithSameTypeDifferentLocation as $person)
                    <div class="karta">
                        <p>Jméno: {{ $person->name }}</p>
                        <p>Příjmení: {{ $person->last_name }}</p>
                        <p>Kontakt: {{ $latestUser->contact }}</p>
                        <p>Den: {{ \Carbon\Carbon::parse($person->den)->format('d.m.Y') }}</p>
                        <p>Od Kdy: {{ $person->od_kdy }}</p>
                        <p>Do Kdy: {{ $person->do_kdy }}</p>
                        <p>Typ restaurace: {{ $person->restaurant_type }}</p>
                        <p>Konkrétní restaurace: {{ $person->restaurant_name }}</p>
                        <hr>
                    </div>
                    @endforeach
                </div>
            @endif
            @if(count($peopleWithSameRestaurant) == 0 && count($peopleWithSameTypeDifferentLocation) == 0)
                <p class="no-matches-message">Je nám líto, ale bohužel jsme nikoho nenašli. Ale nezoufej, máme tě uloženého a třeba se ti za chvíli někdo ozve :D</p>
            @endif
        </div>
    </div>
</section>
