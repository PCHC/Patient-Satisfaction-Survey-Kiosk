@extends('layouts.survey')

@section('content')
<h1>PCHC Patient Satisfaction Survey</h1>
<div class="card">
  <div class="card__header">
    <h5>Welcome to {{$location->location}}</h5>
  </div>
  <div class="card__body">
    <p class="card__question">
      {{ $question->question }}
    </p>
    <form action="/responses" method="POST">
      @csrf
      <input type="hidden" name="question_id" value="{{$question->id}}"/>
      <input type="hidden" name="location_id" value="{{$location->id}}"/>
      <div class="card__responses">
        <div class="btn__wrap">
          <button class="btn btn--positive" type="submit" name="response" value="1">
            <img src="{{ asset('images/survey-smile.png') }}" />
          </button>
        </div>
        <div class="btn__wrap">
          <button class="btn btn--neutral" type="submit" name="response" value="0.5">
            <img src="{{ asset('images/survey-meh.png') }}" />
          </button>
        </div>
        <div class="btn__wrap">
          <button class="btn btn--negative" type="submit" name="response" value="0">
            <img src="{{ asset('images/survey-frown.png') }}" />
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
