@extends('layouts.app')

@section('content')

<h3 class="text-center py-3">Tutti i progetti</h3>

<a href="{{route('admin.projects.create')}}" class="btn btn-primary my-4">Aggiungi proogetto</a>

<table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Immagine</th>
          <th scope="col">Link GitHub</th>
          <th scope="col">Modifica</th>
          <th scope="col">Elimina</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
            <tr>
                <td><a href="{{route('admin.projects.show', $project->id)}}">{{$project->title}}</a></td>
                <td>{{Str::limit($project->description, 60)}}</td>
                <td>{{Str::limit($project->image, 50)}}</td>
                <td>{{$project->link_github}}</td>
                <td><a href="{{route('admin.projects.edit', $project->id)}}" class="text-decoration-none btn btn-outline-dark">&#10002;</a></td>
                <td>
                    <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="d-inline-block">
                      @csrf
          
                      @method('delete')
          
                      <button class="btn btn-danger">&#128465;</button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
</table>

@endsection