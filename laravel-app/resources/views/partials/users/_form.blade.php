<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name') !!}
</div>
<div class="form-group">
  {!! Form::label('email', 'Email:') !!}
  {!! Form::email('email') !!}
</div>
<div class="form-group">
  {!! Form::label('password', 'Password:') !!}
  {!! Form::password('password') !!}
</div>
<div class="form-group">
  {!! Form::submit($submit_text) !!}
</div>
