@extends('layouts.master')

@section('title','My Dictionary - Users')

@section('content')
<h2>Users - {{$users->count()}} </h2>

    @if ( !$users->count() )
        You have no users
    @else
        <ul>
            @foreach( $users as $user )
                <li>
                  {!! Form::open(array('class'=>'form-inline', 'method'=>'DELETE', 'route'=>array('users.destroy',$user->id))) !!}
                  <a href="{{ route ('users.show', $user->id) }}">{{ $user->name }}</a>
                  (
                    {!! link_to_route('users.edit','Edit',array($user->id),array('class'=>'btn btn-info')) !!}
                    {!! Form::submit('Delete',array('class'=>'btn btn-danger')) !!}
                  )
                  {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    <p>
       {!! link_to_route('users.create', 'Add User') !!}
   </p>
   <div class="content">
  	@if (Session::has('message'))
  		<div class="flash alert-info">
  			<p>{{ Session::get('message') }}</p>
  		</div>
  	@endif
    @yield('content')
  </div>
@stop
