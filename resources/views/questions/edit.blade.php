@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h5 class="mb-0">{{ __('Edit Question') }}</h5></div>

        <div class="card-body">
          @include('layouts.partials.errors')
          @include('questions.form')
        </div>
      </div>

      <div class="card mt-4">
        <div class="card-header"><h5 class="mb-0">{{ __('Survey Results') }}</h5></div>

        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Location</th>
                <th>Responses</th>
                <th>Average Approval</th>
              </tr>
            </thead>
            <tbody>
            @foreach($locations as $location)
              @php( $responses = $location->responses()->where('question_id', $question->id)->get())
              <tr class="{{ $location->trashed() ? 'text-muted' : '' }}">
                <td>
                  @if( $location->trashed() )
                    {{ $location->location }}
                  @else
                    <a href="/locations/{{$location->id}}/edit">
                      {{ $location->location }}
                    </a>
                  @endif
                </td>
                <td>
                  {{ $responses->count() }}
                </td>
                <td>
                  {{ number_format($responses->average('response') * 100, 2) }}%
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