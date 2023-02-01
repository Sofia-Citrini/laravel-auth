@extends('layouts.app')

@section('content')

<div class="card flex-row my-5">
    <div style="width: 37rem">
        <img src="{{$project->image}}" class="card-img-top img-fluid" >
    </div>
    
    <div class="card-body">
      <h5 class="card-title">{{$project->title}}</h5>
      <p class="card-text">{{$project->description}}</p>
      <a href="{{$project->link_github}}" class="d-block">Codice GitHub</a>

      <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-primary my-3">Modifica progetto</a>

      <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="d-inline-block">
        @csrf

        @method('delete')

        <button class="btn btn-danger">Elimina Progetto</button>
    </form>
    </div>
</div>


<div class="py-4">
    <a href="{{route('admin.projects.index')}}">Tutti i progetti</a>
</div>



@endsection
