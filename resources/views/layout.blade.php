<!doctype html>
<html lang="en" >
<head >

  <!-- Required meta tags -->
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" >

  <!-- Font Awesome -->
  <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous" >

  @include('partials.title')

</head >
<body >

@include('partials.header')

<div class="content center" > n
  <div class="header-tape rotate-left" >
    <h1 >
      @include('partials.section_header')
    </h1 >
  </div >
  <div class="center content-body m-auto" >
    @hasSection('content')
      @yield('content')
    @else
      <h3 class="text-center m-auto w-50 text-muted" >Nothing to see here...</h3 >
    @endif
    @include('partials.footer')
  </div >
  <img src="{{ asset('img/tape.png') }}" class="footer-tape rotate-left" >
</div >


<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9" ></script >

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous" ></script >
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous" ></script >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous" ></script >

</body >
</html >