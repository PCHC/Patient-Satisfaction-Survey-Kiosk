{!! Form::model($question, [
  'action' => !empty($question->id) ? [ 'QuestionsController@update', $question->id ] : [ 'QuestionsController@store' ],
  'method' => !empty($question->id) ? 'PATCH' : null,
]) !!}
  {{ Form::label('question', 'Question') }}
  {{ Form::textarea('question', null, [
    'required' => true
  ]) }}
  {{ Form::button('Submit', [
    'type' => 'submit'
  ]) }}
{!! Form::close() !!}