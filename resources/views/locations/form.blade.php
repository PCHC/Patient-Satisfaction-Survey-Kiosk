{!! Form::model($location, [
  'action' => !empty($location->id) ? [ 'LocationsController@update', $location->id ] : [ 'LocationsController@store' ],
  'method' => !empty($location->id) ? 'PATCH' : null,
]) !!}
  {{ Form::label('location', 'Location') }}
  {{ Form::text('location', null, [
    'required' => true
  ]) }}
  {{ Form::button('Submit', [
    'type' => 'submit'
  ]) }}
{!! Form::close() !!}