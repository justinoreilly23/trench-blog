@extends('layout')

@section('content')

  <img src="{{ asset('img/bg-tape-logo.png') }}" alt="" class="bg-tape-logo" >

  <div class="form-with-bg" >
    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom:1em" id="update" >
      {{ method_field('PATCH') }}
      {{ csrf_field() }}

      <div class="field" >
        <label class="label" for="title" ></label >
      </div >

      <div class="control" >
        <input type="text"
               class="input"
               name="title"
               placeholder="Title"
               value="{{ $project->title }}" >
      </div >

      <div class="field" >
        <label class="label" for="description" ></label >
        <div class="control" >
          <textarea name="description"
                    class="textarea bg-translucent border-0"
                    title="textarea" >{{ $project->description }}</textarea >
        </div >
      </div >
    </form >

    <form method="POST" action="/projects/{{ $project->id }}" id="delete" >
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form >

    <div class="field" >
      <div class="control" >
        <button type="submit" class="btn btn-main" form="update" >UPDATE</button >
        <button type="submit" class="btn btn-flicker" form="delete" >DELETE</button >
      </div >
    </div >
  </div >
@endsection