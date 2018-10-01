@extends('layouts.survey')

@section('content')
  <h1>Edit Location</h1>
  @include('layouts.partials.errors')
  <form method="POST" action="/locations/{{ $location->id }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div>
      <input type="text" name="location" placeholder="Location" value="{{ $location->location }}" required />
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
@endsection