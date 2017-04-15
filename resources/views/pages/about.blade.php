@extends('app')

@section('content')
    <div class="title">About Volkeno</div>
    <h2>
        Staff
    </h2>

    @if(count($staff))


            @foreach($staff as $person)
                <h4> {{$person}}</h4>
            @endforeach

    @else
        <h4>No staff Member found</h4>

    @endif

@stop
