@extends('layouts.master')

@section('title','My Dictionary - Home')

@section('sidebar')
  @parent
  <p>
    This is appended to master sidebar.
  </p>
@stop

@section('content')
<p>
   {!! link_to_route('words.create', 'Add Word') !!}
</p>
<div class="content">
@if (Session::has('message'))
  <div class="flash alert-info">
    <p>{{ Session::get('message') }}</p>
  </div>
@endif
@yield('content')
</div>
<h2>Words - {{$words->count()}} </h2>

    @if ( !$words->count() )
        You have no words
    @else
        <ul>
            @foreach( $words as $word )
                <li>
                  {!! Form::open(array('class'=>'form-inline', 'method'=>'DELETE', 'route'=>array('words.destroy',$word->slug))) !!}
                  <a href="{{ route ('words.show', $word->slug) }}">{{ $word->word }}</a>
                  (
                    {!! link_to_route('words.edit','Edit',array($word->slug),array('class'=>'btn btn-info')) !!}
                    {!! Form::submit('Delete',array('class'=>'btn btn-danger')) !!}
                  )
                  {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
@stop
