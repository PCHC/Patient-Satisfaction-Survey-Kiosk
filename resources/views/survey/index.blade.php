@extends('layouts.survey')

@section('content')
  <h1>Question</h1>
  <h2>Welcome to {{$location->location}}</h2>
  <strong>{{ $question->question }}</strong>
  <form action="/responses" method="POST">
    @csrf
    <input type="hidden" name="question_id" value="{{$question->id}}"/>
    <input type="hidden" name="location_id" value="{{$location->id}}"/>
    <button type="submit" name="response" value="1" class="btn btn-success">Yes</button>
    <button type="submit" name="response" value="0" class="btn btn-danger">No</button>
  </form>
@endsection