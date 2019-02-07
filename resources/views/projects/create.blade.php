@extends('layout')

@section('content')

  <img src="{{ asset('img/bg-tape-logo.png') }}" class="bg-tape-logo" >

  <div class="form-with-bg" >
    <form method="POST" action="/projects" >

      @method('POST')
      @csrf

      <div class="form-row " >
        <input type="text" name="title" placeholder="Project title" class="bg-transparent border-dark" >
      </div >

      <div class="form-row" >
        <textarea name="description"
                  placeholder="Project description"
                  class="mt-4 bg-transparent border-dark" ></textarea >
      </div >
      <button type="submit" class="btn btn-main" >Create</button >
    </form >
  </div >
@endsection