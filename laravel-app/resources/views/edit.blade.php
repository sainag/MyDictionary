@extends('layouts.master')

@section('title','My Dictionary - Edit word')

@section('content')
<h2>Edit Word: {{$word->word}}</h2>
  {!! Form::model($word, ['method'=>'PATCH','route'=> ['words.update',$word->slug]]) !!}
  @include('partials/_form', ['submit_text'=>'Update Word'])
  {!! Form::close() !!}
@stop
