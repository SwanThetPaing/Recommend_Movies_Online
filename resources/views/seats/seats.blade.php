@if(session('success')) 
    <div class="alert alert-success text-center">{{session('success')}}</div>
@endif

<h3>Seats Page</h3>

<x-seat_section :seats="$seats" :movies="$movies"/>
<a href="">Back</a>

