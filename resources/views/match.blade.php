@foreach($users as $user)
    <p>Name: {{ $user->name }}</p>
    <p>Last Name: {{ $user->last_name }}</p>
    <p>Den: {{ $user->den }}</p>
    <p>Od Kdy: {{ $user->od_kdy }}</p>
    <p>Do Kdy: {{ $user->do_kdy }}</p>
    <p>Restaurant Type: {{ $user->restaurant_type }}</p>
    <p>Restaurant Name: {{ $user->restaurant_name }}</p>
    <hr>
@endforeach