@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
            <a class="nav-link {{ !isset($isAll) ? 'active' : '' }}" href="{{ route('locations.index') }}">Active Locations</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ isset($isAll) ? 'active' : '' }}" href="{{ route('locations.all') }}">All Locations</a>
            </li>
          </ul>
          <a class="btn btn-success" href="{{ route('locations.create') }}">Add Location</a>
        </div>

        <div class="card-body">
          <h5 class="card-title">{{ __('Survey Locations') }}</h5>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Location</th>
                <th>Responses</th>
                <th>Average Approval</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($locations as $location)
              <tr class="{{ $location->trashed() ? 'text-muted' : '' }}">
                <th scope="col">{{$location->id}}</th>
                <td>
                  @if( $location->trashed() )
                    {{ $location->location }}
                  @else
                    <a href="/locations/{{$location->id}}/edit">
                      {{ $location->location }}
                    </a>
                  @endif
                </td>
                <td>{{ $location->responses->count() }}</td>
                <td>
                {{ number_format($location->responses->average('response') * 100, 2) }}%
                </td>
                <td>
                  @if(!$location->trashed())
                    <a href="/locations/{{$location->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                  @endif
                </td>
                <td>
                  @if($location->id > 1)
                    @if ($location->trashed())
                      <form action="/locations/{{$location->id}}/restore" method="POST">
                      @csrf
                      @method('PATCH')
                      <button class="btn btn-sm btn-success" type="submit">Restore</button>
                      </form>
                    @else
                      <form action="/locations/{{$location->id}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-danger" type="submit">Disable</button>
                      </form>
                    @endif
                  @endif
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection