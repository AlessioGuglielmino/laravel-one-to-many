@extends('layouts.app')

@section('content')
<section class="container mt-5">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-success">Torna alla lista</a>
    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-outline-warning">Torna ai Dettagli</a>

    <h1 class="my-3">Modifica progetto</h1>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="row">
        @csrf
        @method('PATCH')

        <div class="col-12">
            <label for="title" class="from-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$project->title}}">
        </div>

        <div class="col-12 my-3">
            <label for="description" class="from-label">Descrizione</label>
            <textarea name ="description" id="description" class="form-control" rows="5">{{$project->description}}</textarea>
        </div>

        <div class="col-12">
            <label for="url" class="from-label">Link</label>
            <input type="url" name ="url" id="url" class="form-control" value="{{$project->url}}">
        </div>

        <div class="col-12 mt-4">
            <button  class="btn btn-primary">Salva </button>
            
        </div>
    </form>
</section>
@endsection
