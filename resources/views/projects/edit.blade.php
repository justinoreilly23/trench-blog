@extends('layout')

@section('content')

  <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom:1em" >

    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div class="field" >
      <label class="label" for="title" >Title</label >
    </div >

    <div class="control" >
      <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}" >
    </div >

    <div class="field" >
      <label class="label" for="description" >Description</label >

      <div class="control" >
        <textarea name="description" class="textarea" >{{ $project->description }}</textarea >
      </div >
    </div >


    <div class="field" >
      <div class="control" >
        <button type="submit" class="button is-link button button-yellow" >Update Project</button >
      </div >
    </div >

  </form >

  <form method="POST" action="/projects/{{ $project->id }}">

    {{ method_field('DELETE') }}
    {{ csrf_field() }}

    <div class="field" >
      <div class="control" >
        <button type="submit" class="button button-dark" >Delete Project</button >
      </div >
    </div >

  </form >
@endsection