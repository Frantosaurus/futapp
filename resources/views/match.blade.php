<section>
    <div class="telo">
        <div class="nadpis col-auto">
            <h1 class="title">Vaše údaje:</h1>
            <p><strong>Jméno:</strong> {{ $latestUser->name }}</p>
            <p><strong>Příjmení:</strong> {{ $latestUser->last_name }}</p>
            <p><strong>Kontakt:</strong> {{ $latestUser->contact }}</p>
            <p><strong>Den:</strong> {{ \Carbon\Carbon::parse($latestUser->den)->format('d.m.Y') }}</p>
            <p><strong>Od Kdy:</strong> {{ $latestUser->od_kdy }}</p>
            <p><strong>Do Kdy:</strong> {{ $latestUser->do_kdy == 'je_mi_to_jedno' ? 'Je mi to jedno' : $latestUser->do_kdy }}</p>
            <p><strong>Typ restaurace:</strong> {{ $latestUser->restaurant_type }}</p>
            <p><strong>Konkrétní restaurace:</strong> {{ $latestUser->restaurant_name }}</p>
            <hr>
            <hr>
        </div>

        <div class="row">
            @if(count($peopleWithSameRestaurant) > 0)
                <div class="col-md-6 col-12 vyber">
                    <h2 class="title">Lidé kteří si vybrali stejnou restauraci jako Vy:</h2>
                    @foreach($peopleWithSameRestaurant as $person)
                    <div class="karta">
                        <p><strong>Jméno:</strong> {{ $person->name }}</p>
                        <p><strong>Příjmení:</strong> {{ $person->last_name }}</p>
                        <p><strong>Kontakt:</strong> {{ $latestUser->contact }}</p>
                        <p><strong>Den:</strong> {{ \Carbon\Carbon::parse($person->den)->format('d.m.Y') }}</p>
                        <p><strong>Od Kdy:</strong> {{ $person->od_kdy }}</p>
                        <p><strong>Do Kdy:</strong> {{ $person->do_kdy == 'je_mi_to_jedno' ? 'Je mi to jedno' : $person->do_kdy }}</p>
                        <p><strong>Typ restaurace:</strong> {{ $person->restaurant_type }}</p>
                        <p><strong>Konkrétní restaurace:</strong> {{ $person->restaurant_name }}</p>
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
                        <p><strong>Jméno:</strong> {{ $person->name }}</p>
                        <p><strong>Příjmení:</strong> {{ $person->last_name }}</p>
                        <p><strong>Kontakt:</strong> {{ $latestUser->contact }}</p>
                        <p><strong>Den:</strong> {{ \Carbon\Carbon::parse($person->den)->format('d.m.Y') }}</p>
                        <p><strong>Od Kdy:</strong> {{ $person->od_kdy }}</p>
                        <p><strong>Do Kdy:</strong> {{ $person->do_kdy == 'je_mi_to_jedno' ? 'Je mi to jedno' : $person->do_kdy }}</p>
                        <p><strong>Typ restaurace:</strong> {{ $person->restaurant_type }}</p>
                        <p><strong>Konkrétní restaurace:</strong> {{ $person->restaurant_name }}</p>
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
