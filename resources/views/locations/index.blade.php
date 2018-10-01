@extends('layouts.survey')

@section('content')
  <h1>Locations</h1>
  <ul>
  @foreach($locations as $location)
    <li><a href="/locations/{{$location->id}}/edit">{{ $location->location }}</a></li>
  @endforeach
  </ul>
@endsection