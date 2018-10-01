@extends('layouts.survey')

@section('content')
  <h1>Edit Question</h1>
  @include('layouts.partials.errors')
  @include('questions.form')
@endsection