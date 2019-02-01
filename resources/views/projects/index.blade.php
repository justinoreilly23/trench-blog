@extends('layout')

@section('title')
  Projects
@endsection

@section('content')
  <ul >
    @foreach ($projects as $project)
      <li class="project" >
        <a href="/projects/{{ $project->id }}/edit" >
          <h2 class="card-title" >{{ $project->title }}</h2 >
          <p class="card-desc" >{{ $project->description }}</p >
        </a >
      </li >
    @endforeach
  </ul >

  <div >
    <a href="/projects/create" >
      @if (isset($project))
        <i class="fas fa-2x fa-plus-circle icon mb-2 i-light" ></i >
      @else
        <button class="button-yellow" >Create a new project</button >
      @endif
    </a >
  </div >
@endsection

