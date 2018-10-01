@extends('layouts.survey')

@section('content')
  <h1>Edit Question</h1>
  @include('layouts.partials.errors')
  <form method="POST" action="/questions/{{ $question->id }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div>
      <textarea name="question" placeholder="Question" required>{{ $question->question }}</textarea>
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
@endsection