@extends('layouts.survey')

@section('content')
  <h1>Create Question</h1>
  <form method="POST" action="/questions">
    {{ csrf_field() }}
    <div>
      <textarea name="question" placeholder="Question"></textarea>
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
@endsection