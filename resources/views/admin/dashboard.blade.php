@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>

        <div class="col-md-8 my-4">
            <a href="{{route('admin.projects.index')}}" class="btn btn-outline-dark">Tutti i tuoi progetti</a>

            <a href="{{route('admin.projects.create')}}" class="btn btn-outline-dark">Pubblica un nuovo progetto</a>
        </div>
    </div>
</div>
@endsection
