@extends('layouts.admin')

@section('content')
  <h1>Create Location</h1>
  @include('layouts.partials.errors')
  @include('locations.form')
@endsection