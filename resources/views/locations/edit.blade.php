@extends('layouts.admin')

@section('content')
  <h1>Edit Location</h1>
  @include('layouts.partials.errors')
  @include('locations.form')
@endsection