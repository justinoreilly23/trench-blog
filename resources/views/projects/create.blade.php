@extends('layout')

@section('content')
  <form method="POST" action="/projects" >

    {{ csrf_field() }}

    <div class="form-row">
      <input type="text" name="title" placeholder="Project title" >
    </div >

    <div class="form-row">
      <textarea name="description" placeholder="Project description" class="mt-4" ></textarea >
    </div >

    <button type="submit" class="button-yellow btn" >Create</button >
  </form >
@endsection