@extends('layout')

@section('title')
  Projects
@endsection

@section('content')
  <div >
    @foreach ($projects as $project)
      <a href="/projects/{{ $project->id }}/edit" >
        <div class="project" >
          <h2 class="card-title" >{{ $project->title }}</h2 >
          <p class="card-desc" >{{ $project->description }}</p >
        </div >
      </a >
    @endforeach
  </div >

  <div class="columns" >
    <a href="/projects/create" class="column" >
      @if(count($projects) > 0)
        <div >
          <i class="fas fa-2x fa-plus-circle icon btn" ></i >
        </div >
      @else
        <div class="column" >
          <h4 >
            <button class="bg-translucent btn" >New Project</button >
          </h4 >
        </div >
      @endif
    </a >
  </div >

@endsection
