@extends('layouts.master')

@section('title','My Dictionary - Edit user')

@section('content')
<h2>Edit User: {{$user->name}}</h2>
  {!! Form::model($user, ['method'=>'PATCH','route'=> ['users.update',$user->id]]) !!}
  @include('partials/users/_form', ['submit_text'=>'Update User'])
  {!! Form::close() !!}
@stop
