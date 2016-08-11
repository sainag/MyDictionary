@extends('layouts.master')

@section('title','My Dictionary - Home')

@section('sidebar')
  @parent
  <p>
    This is appended to master sidebar.
  </p>
@stop

@section('content')
<h2>Words - {{$words->count()}} </h2>

    @if ( !$words->count() )
        You have no words
    @else
        <ul>
            @foreach( $words as $word )
                <li><a href="{{ route ('words.show', $word->wordid) }}">{{ $word->word }}</a></li>
            @endforeach
        </ul>
    @endif
@stop
