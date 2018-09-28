@extends('layouts.survey')

@section('content')
  <h1>Survey Index</h1>
  <ul>
  @foreach($questions as $question)
    <li><a href="/questions/{{$question->id}}">{{ $question->question }}</a></li>
  @endforeach
  </ul>
@endsection