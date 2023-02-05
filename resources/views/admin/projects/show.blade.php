@extends('layouts.app')

@section('content')

<div class="card flex-row my-5">
    <div class="img-container">
        <img src="{{asset('storage/' . $project->image)}}" class="card-img-top img-fluid" >
    </div>
    
    
    <div class="card-body">
      <h3 class="card-title py-4">{{$project->title}}</h3>
      <p class="card-text">{{$project->description}}</p>
      <a href="{{$project->link_github}}" class="d-block">Codice GitHub</a>

      <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-outline-primary mt-5 mb-3">Modifica progetto</a>

      <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="d-inline-block">
        @csrf

        @method('delete')

        <button class="btn btn-outline-danger">Elimina Progetto</button>
    </form>
    </div>
</div>


<div class="py-4">
    <a href="{{route('admin.projects.index')}}">Tutti i progetti</a>
</div>



@endsection