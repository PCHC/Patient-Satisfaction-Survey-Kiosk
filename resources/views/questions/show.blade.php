@extends('layouts.survey')

@section('content')
  <h1>Survey Question</h1>
  <strong>{{ $question->question }}</strong>
@endsection