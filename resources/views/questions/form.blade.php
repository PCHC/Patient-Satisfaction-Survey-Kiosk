{!! Form::model($question, [
  'action' => !empty($question->id) ? [ 'QuestionsController@update', $question->id ] : [ 'QuestionsController@store' ],
  'method' => !empty($question->id) ? 'PATCH' : null,
]) !!}
  <div class="form-group">
    {{ Form::label('question', 'Question') }}
    {{ Form::textarea('question', null, [
      'required' => true,
      'class' => 'form-control',
      'rows' => 3
    ]) }}
    <small id="questionHelp" class="form-text text-muted">Form your question so a "yes" response is a positive result. <em>Example:</em> "Were you satisfied with your visit today?"</small>
  </div>
  {{ Form::button(!empty($question->id) ? 'Update' : 'Add', [
    'type' => 'submit',
    'class' => 'btn btn-primary'
  ]) }}
{!! Form::close() !!}