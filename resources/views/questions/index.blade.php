@extends('layouts.survey')

@section('content')
  <h1>Survey Index</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Question</th>
        <th>Responses</th>
        <th>Average Approval</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach($questions as $question)
      <tr>
        <td><a href="/questions/{{$question->id}}/edit">{{ $question->question }}</a></td>
        <td>{{ $question->responses->count() }}</td>
        <td>
          {{ number_format($question->responses->average('response') * 100, 2) }}%
        </td>
        <td><a href="/questions/{{$question->id}}/edit" class="btn btn-primary">Edit</a></td>
        <td>
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
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection