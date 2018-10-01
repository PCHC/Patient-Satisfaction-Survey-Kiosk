@extends('layouts.survey')

@section('content')
  <h1>Survey Index</h1>
  <ul>
  @foreach($questions as $question)
    <li>
      <a href="/questions/{{$question->id}}">{{ $question->question }}</a><br/>
      <a class="btn btn-primary" href="/questions/{{$question->id}}/edit">Edit</a>
      @if ($question->trashed() )
        <form action="/questions/{{$question->id}}/restore" method="POST">
          @csrf
          @method('PATCH')
          <button class="btn btn-success" type="submit">Restore</button>
        </form>
      @else
        <form action="/questions/{{$question->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      @endif
    </li>
  @endforeach
  </ul>
@endsection