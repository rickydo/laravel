{{Form::label('name', 'List Title')}}
{{Form::text('name')}}
{{$errors->first('name', '<small class="error">:message</small>')}}
{{Form::submit('Save', array('class' => 'button'))}}