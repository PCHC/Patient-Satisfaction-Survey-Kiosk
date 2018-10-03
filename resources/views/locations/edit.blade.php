@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h5 class="mb-0">{{ __('Edit Location') }}</h5></div>

        <div class="card-body">
          @include('layouts.partials.errors')
          @include('locations.form')
        </div>
      </div>

      <div class="card mt-4">
        <div class="card-header"><h5 class="mb-0">{{ __('Survey Results') }}</h5></div>

        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Question</th>
                <th>Responses</th>
                <th>Average Approval</th>
              </tr>
            </thead>
            <tbody>
            @foreach($questions as $question)
              @php( $responses = $question->responses()->where('location_id', $location->id)->get())
              <tr class="{{ $question->trashed() ? 'text-muted' : '' }}">
                <td>
                  @if( $question->trashed() )
                    {{ $question->question }}
                  @else
                    <a href="/questions/{{$question->id}}/edit">
                      {{ $question->question }}
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