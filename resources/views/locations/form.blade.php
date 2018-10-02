{!! Form::model($location, [
  'action' => !empty($location->id) ? [ 'LocationsController@update', $location->id ] : [ 'LocationsController@store' ],
  'method' => !empty($location->id) ? 'PATCH' : null,
]) !!}
  <div class="form-group">
    {{ Form::label('location', 'Location Name') }}
    {{ Form::text('location', null, [
      'required' => true,
      'class' => 'form-control'
    ]) }}
  </div>
  {{ Form::button(!empty($location->id) ? 'Update' : 'Add', [
    'type' => 'submit',
    'class' => 'btn btn-primary'
  ]) }}
{!! Form::close() !!}