@extends('layouts.master')

@section('title','My Dictionary - Home')

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
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <td>Word</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            @foreach( $words as $word )
                <tr>
                  {!! Form::open(array('class'=>'form-inline', 'method'=>'DELETE', 'route'=>array('words.destroy',$word->slug))) !!}
                  <td><a href="{{ route ('words.show', $word->slug) }}">{{ $word->word }}</a></td>
                  <td>
                    {!! link_to_route('words.edit','Edit',array($word->slug),array('class'=>'btn btn-info')) !!}
                    {!! Form::submit('Delete',array('class'=>'btn btn-danger')) !!}
                  </td>
                  {!! Form::close() !!}
                </tr>
            @endforeach
          </tbody>
        </table>
    @endif
@stop
