@extends('layouts.main')

@section('container')
<div class="all">
<div class="py-4"></div>

    <div class="container">
   
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
            <div class="judulPosts">
                <h1 class="mb-3">{{ $post->title }}</h1>
            </div>

                <p>By. <a href="/posts?author={{ $post->author->username }} " class="text-decoration-none">{{ $post->author->name }} </a>in <a href="/posts?category={{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></p>


                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
        



            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
                <a href="/posts" class="btn btn-dark mt-3">Back To Posts</a>
                <br><br><br>
            </div>



            <!-- disqus comment-->
        
        <div id="disqus_thread" class="col-md-8"></div>
        <script> 
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://virtual-learning.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        </script>
        </div>
    </div>

    




    <!-- class= "d-block mt-3" -> untuk format link biasa --> 

    <hr class="my-4" />
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
                    <a href="https://www.instagram.com/aditianksptr11/"><i class="icon ion-social-instagram"></i></a>
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
      
      
        <!--Start of Tawk.to Script-->
          <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/62aeb7d9b0d10b6f3e781476/1g5t7sb8u';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
        <!--End of Tawk.to Script-->

        </body>
      </div>


     

@endsection

