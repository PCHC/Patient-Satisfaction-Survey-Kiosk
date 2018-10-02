@extends('layouts.survey')

@section('content')
<h1>PCHC Patient Satisfaction Survey</h1>
<div class="card">
  <div class="card__header">
    <h5>Welcome to {{$location->location}}</h5>
  </div>
  <div class="card__body">
    Thank you for your response. Your feedback helps PCHC better serve our patients.
  </div>
</div>
@endsection

@section('redirect')
  <meta http-equiv="refresh" content="3;url=/survey/{{$location->id}}" />
@endsection
