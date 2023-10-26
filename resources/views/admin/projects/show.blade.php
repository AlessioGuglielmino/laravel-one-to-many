@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{route('admin.projects.index')}}"><button class="btn btn-primary my-5">ritorna alla lista progetti </button>
  </a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Url Git</th>
            <th scope="col">Slug</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->url}}</td>
                <td>{{$project->slug}}</td>
              </tr>
           
          
        
        
        </tbody>
      </table>
    
</div>
@endsection
