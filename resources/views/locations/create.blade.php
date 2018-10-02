@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h5 class="mb-0">{{ __('Add Location') }}</h5></div>

        <div class="card-body">
          @include('layouts.partials.errors')
          @include('locations.form')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection