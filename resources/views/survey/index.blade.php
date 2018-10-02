<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
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
  </div>
</body>
</html>
