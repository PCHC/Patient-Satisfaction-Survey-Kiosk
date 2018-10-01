@extends('layouts.survey')

@section('content')
  <h1>Survey Location</h1>
  <strong>{{ $location->location }}</strong>
  <form action="/locations/{{$location->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
  </form>
@endsection