@extends('layouts.master')

@section('title','My Dictionary - Show')

@section('content')

<h2>{{ $word->word }}</h2>
<p><label>Meaning: </label>{{$word->meaning}}</p>
<p><label>Language: </label>{{$word->language}}</p>
<p><label>Note: </label>{{$word->note}}</p>
<p><label>Created: </label>{{$word->created_at}}</p>
<p><label>Updated: </label>{{$word->updated_at}}</p>

<div class="content">
 @if (Session::has('message'))
   <div class="flash alert-info">
     <p><b>{{ Session::get('message') }}</b></p>
   </div>
 @endif
 @yield('content')
</div>
@stop
