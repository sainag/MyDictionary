@extends('layouts.master')

@section('title','My Dictionary - Add User')

@section('content')
<h2>Add a User</h2>
  {!! Form::model(new App\User, ['route'=> ['users.store']]) !!}
  @include('partials/users/_form', ['submit_text'=>'Save User'])
  {!! Form::close() !!}
  @if ($errors->any())
    <div class="flash alert-danger">
      @foreach ($errors->all() as $error)
      <p>
        {{$error}}
      </p>
      @endforeach
    </div>
  @endif
@stop
