@extends('layout')

@section('title')
  Projects
@endsection

@section('content')
  <div >
    @foreach ($projects as $project)
      <a href="/projects/{{ $project->id }}/edit" >
        <div class="project" >
          <h2 class="project-card-title" >{{ $project->title }}</h2 >
          <p class="card-desc" >{{ $project->description }}</p >
          <div class="bg-flower-slide" ></div >
        </div >
      </a >
    @endforeach
  </div >

  <div class="columns" >
    <a href="/projects/create" class="column m-auto" >
      @if(count($projects) > 0)
        <i class="fas fa-2x fa-plus-circle icon btn" ></i >
      @else
        <button class="bg-translucent btn bg-flicker bg-black text-white"
                style="box-shadow: white 0 0 50px 0px; padding: 30px 50px;" >New Project
        </button >
      @endif
    </a >
  </div >

@endsection
