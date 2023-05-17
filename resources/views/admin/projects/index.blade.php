@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Lista progetti
    </h2>
</div>
<div class="container">
    <div class="row">
        @foreach ($projects as $project)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$project->title}}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{$project->stack}}</h6>
                      <p class="card-text">{{$project->description}}</p>
                      <a href="{{route('admin.projects.show',$project->id)}}" class="btn btn-sm btn-primary">Show</a>
                      <a href="#" class="btn btn-sm btn-warning">Edit</a>
                      <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
