@extends('layouts.app')

@section('content')
    <h3 class="text-center py-3">Modifica Progetto</h3>

    <div class="row justify-content-center my-3">
        <div class="col-7">
            <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
                @csrf

                @method('put')

                <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror" 
                    name="title" value="{{old('title', $project->title)}}">

                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @elseif(old('description')) is-valid @enderror" name="description">
                        {{old('description',$project->description)}}
                    </textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" class="form-control @error('image') is-invalid @elseif(old('image')) is-valid @enderror" name="image" 
                    placeholder="Inserire link" value="{{old('image', $project->image)}}">

                    @error('image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">GitHub link</label>
                    <input type="text" class="form-control @error('link_github') is-invalid @elseif(old('link_github')) is-valid @enderror" name="link_github" 
                    value="{{old('link_github', $project->link_github)}}">

                    @error('link_github')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Salva modifica</button>
            </form>
        </div>
    </div>
@endsection