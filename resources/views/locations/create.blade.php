@extends('layouts.survey')

@section('content')
  <h1>Create Location</h1>
  @include('layouts.partials.errors')
  <form method="POST" action="/locations">
    {{ csrf_field() }}
    <div>
      <input type="text" name="location" placeholder="Location" required />
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
@endsection