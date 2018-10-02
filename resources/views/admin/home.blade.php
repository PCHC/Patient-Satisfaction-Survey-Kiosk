@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5 class="mb-0">Admin Dashboard</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center">
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-primary m-2">Edit Questions</a>
                        <a href="{{ route('locations.index') }}" class="btn btn-outline-primary m-2">Edit Locations</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-primary m-2">Add User</a>
                        <a href="{{ route('logout') }}" class="btn btn-outline-primary m-2"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
