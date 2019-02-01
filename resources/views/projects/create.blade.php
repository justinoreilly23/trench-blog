@extends('layout')

@section('title')
  Create
@endsection

@section('content')
  <form method="POST" action="/projects" >

    {{ csrf_field() }}

    <div >
      <input type="text" name="title" placeholder="Project title" >
    </div >

    <div >
      <textarea name="description" placeholder="Project description" class="mt-4"></textarea >
    </div >

      <button type="submit" class="button-yellow">Create</button >
  </form >
@endsection