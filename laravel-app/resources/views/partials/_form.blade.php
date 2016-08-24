<div class="form-group">
  {!! Form::label('word', 'Word:') !!}
  {!! Form::text('word') !!}
</div>
<div class="form-group">
  {!! Form::label('slug', 'Slug:') !!}
  {!! Form::text('slug') !!}
</div>
<div class="form-group">
  {!! Form::label('meaning', 'Meaning:') !!}
  {!! Form::textarea('meaning') !!}
</div>
<div class="form-group">
  {!! Form::label('language', 'Language:') !!}
  {!! Form::text('language') !!}
</div>
<div class="form-group">
  {!! Form::label('note', 'Note:') !!}
  {!! Form::textarea('note') !!}
</div>
<div class="form-group">
  {!! Form::submit($submit_text) !!}
</div>
