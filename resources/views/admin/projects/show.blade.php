@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{$project->title}}
    </h2>
</div>
<div class="container">
    <ul>
        <li>{{$project->stack}}</li>
        <li>{{$project->description}}</li>
    </ul>
</div>
@endsection