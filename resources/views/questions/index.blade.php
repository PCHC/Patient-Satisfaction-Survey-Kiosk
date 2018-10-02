@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
            <a class="nav-link {{ !isset($isAll) ? 'active' : '' }}" href="{{ route('questions.index') }}">Active Questions</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ isset($isAll) ? 'active' : '' }}" href="{{ route('questions.all') }}">All Questions</a>
            </li>
          </ul>
          <a class="btn btn-success" href="{{ route('questions.create') }}">Add Question</a>
        </div>

        <div class="card-body">
          <h5 class="card-title">{{ __('Survey Questions') }}</h5>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Responses</th>
                <th>Average Approval</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($questions as $question)
              <tr class="{{ $question->trashed() ? 'text-muted table-secondary' : '' }}">
                <th scope="col">{{$question->id}}</th>
                <td>
                  @if( $question->trashed() )
                    {{ $question->question }}
                  @else
                    <a href="/questions/{{$question->id}}/edit">
                      {{ $question->question }}
                    </a>
                  @endif
                </td>
                <td>{{ $question->responses->count() }}</td>
                <td>
                {{ number_format($question->responses->average('response') * 100, 2) }}%
                </td>
                <td>
                  @if(!$question->trashed())
                    <a href="/questions/{{$question->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                  @endif
                </td>
                <td>
                  @if ($question->trashed() )
                    <form action="/questions/{{$question->id}}/restore" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-sm btn-success" type="submit">Restore</button>
                    </form>
                  @else
                    <form action="/questions/{{$question->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Disable</button>
                    </form>
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