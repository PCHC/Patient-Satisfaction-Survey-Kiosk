@extends('layouts.survey')

@section('content')
  <h1>Create Question</h1>
  @include('layouts.partials.errors')
  <form method="POST" action="/questions">
    {{ csrf_field() }}
    <div>
      <textarea name="question" placeholder="Question" required></textarea>
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
@endsection