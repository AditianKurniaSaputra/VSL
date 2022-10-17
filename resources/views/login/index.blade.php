@extends('layouts.main')

@section('container')
<div class="py-4"></div>
<div class="row justify-content-center">
    <div class="col-md-4">

    <!--status -->
        @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        @if(session()->has('loginvlError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginvlError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif







    <!--Form login -->
            <main class="form-signin">
                <br><br>
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
        <form action="/loginvl" method="post">
            @csrf
            <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>



        <!-- untuk register yang dikomentari -->

         <small class="d-block text-center mt-3">Not Registered? <a href="/registervl">Register Now..</a></small> 
        </main>
        </div>
</div>



<hr class="my-5" />
              <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      </head>

      <body>
          <div class="footer-basic">
              <footer>
                  <div class="social">
                    <a href="https://www.instagram.com/aditiank11/"><i class="icon ion-social-instagram"></i></a>
                    <a href="#"><i class="icon ion-social-twitter"></i></a>
                    <a href="https://www.facebook.com/aditiankurnia/"><i class="icon ion-social-facebook"></i></a></div>
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="/">Home</a></li>
                      <li class="list-inline-item"><a href="/about">About</a></li>
                      <li class="list-inline-item"><a href="/posts">Blog</a></li>
                      <li class="list-inline-item"><a href="/categories">Categories</a></li>
                  </ul>
                  <p class="copyright">by. Aditian Kurnia © 2022</p>
              </footer>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
      </body>

@endsection