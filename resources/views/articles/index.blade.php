@extends('app')

@section('content')

    <h1>Articles</h1>
    <hr>



    @if(count($articles))

        @foreach($articles as $article)
            <h2><a href="{{url('/articles', $article->id)}}">  {{$article->title}}</a></H2>
            <div> {{$article->body}}</div>
        @endforeach

    @else
        <h4>No articles available</h4>
    @endif

@stop



@section('footer')

@stop