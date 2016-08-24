@extends('layouts.master')

@section('title','My Dictionary - Show User')

@section('content')

<h2>{{ $user->name }}</h2>
<p><label>Email: </label>{{$user->email}}</p>
<p><label>Created: </label>{{$user->created_at}}</p>
<p><label>Updated: </label>{{$user->updated_at}}</p>

<div class="content">
 @if (Session::has('message'))
   <div class="flash alert-info">
     <p><b>{{ Session::get('message') }}</b></p>
   </div>
 @endif
 @yield('content')
</div>
@stop
