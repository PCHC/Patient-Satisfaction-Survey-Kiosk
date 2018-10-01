@extends('layouts.survey')

@section('content')
  <h1>Locations</h1>
  <ul>
  @foreach($locations as $location)
    <li>
      <a href="/locations/{{$location->id}}">{{ $location->location }}</a><br/>
      <a class="btn btn-primary" href="/locations/{{$location->id}}/edit">Edit</a>
      @if ($location->trashed() )
        <form action="/locations/{{$location->id}}/restore" method="POST">
          @csrf
          @method('PATCH')
          <button class="btn btn-success" type="submit">Restore</button>
        </form>
      @else
        <form action="/locations/{{$location->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      @endif
    </li>
  @endforeach
  </ul>
@endsection