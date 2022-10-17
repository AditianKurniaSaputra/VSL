@extends('layouts.main')
@section('container')



<div class="all">
<div class="py-4"></div>


<!-- Jumbotron --> 
    
    <div class="bg-image p-5 text-align shadow-3-strong rounded mb-1 text-white" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/010.webp');">
    <h1><b>Virtual Learning School</b></h1>
    <p>
    Kini, semakin banyak orang yang ingin tahu bagaimana cara mengajar. Baik itu di kelas maupun di rumah, kami berterima kasih atas bantuan semua pihak yang terlibat dalam usaha menjaga kelangsungan proses belajar para siswa.
    </p>
    <a class="btn btn-outline-light btn-lg m-2" href="/about" role="button" rel="nofollow">Lets Go..</a>
    </div>
    <!-- <hr class="my-1" /> -->

<br>


 <!-- contoh import gambar 
 {{ asset('img/running1.jpg') }}  -->


        <!--Main layout-->
        <main class="mt-3">
            <div class="container">
            <!--Section: Content-->
            <section>
                <div class="row">
                <div class="col-md-6 gx-4 mb-4 mt-3">
                    <img src="https://source.unsplash.com/500x350?reading" class="img-fluid">
                </div>

          <div class="col-md-6 gx-5 mb-4">
            <h2><strong>Mengapa kami ada?</strong></h2>
            <p>
            Sebagai sebuah platform penyelenggara Virtual Learning School asli dari Indonesia, Virtual Learning School didirikan dengan visi dan misi dapat menginspirasi dan memotivasikan semua orang untuk membangun gaya hidup yang lebih bermanfaat.
            </p>

            <h5 class="mb-3"><strong>Jadilah Sumber Inspirasi Menuju Gaya Hidup yang Lebih Bermanfaat</strong></h5>
            <p>
            Sebelumnya, seperti beberapa teman-teman lainnya, kami tahu bahwa belajar adalah kegiatan yang sangat positif, tetapi tidak melakukan action. Kami ingin menjadikan pelajar semakin termotivasi, tapi kurang pendorong untuk mulai belajar. Oleh karena itu, kami memilih nama Virtual Learning School ini untuk melambangkan visi dan misi kami agar menjadi alasan dan pendorong bagi teman-teman untuk membangun semangat belajar yang lebih baik. 
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-1" />
      <br>



      <!--Section: Content-->
      <section class="text-align">
        <h2 class="mb-5 text-center"><b>POST</b></h2>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://source.unsplash.com/500x350?learning" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><b>Reading</b></h5>
                <p class="card-text">
                  Jangan mudah bosan membaca ya.. Mari bergabung dengan kami agar nanti kalian menjadi orang sukses.
                </p>
                <a class="btn btn-outline-dark btn-lg m-1" href="/posts?category=reading" role="button"
              rel="nofollow">Klik sini ya..</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://source.unsplash.com/500x350?history" class="img-fluid" />
                <a href="/history">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><b>History</b></h5>
                <p class="card-text">
                  Jangan lupakan sejarah kami... Gabunglah bersama kami agar kalian bisa mengingat kami kembali.
                </p>
                <a class="btn btn-outline-dark btn-lg m-1" href="/posts?category=history" role="button"
              rel="nofollow">Klik sini ya..</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://source.unsplash.com/500x350?motivation" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><b>Motivation</b></h5>
                <p class="card-text">
                Apakah kalian merasa lelah? yuk mari kunjungi halaman ini supaya bersemangat kembali.
                </p>
                <a class="btn btn-outline-dark btn-lg m-1" href="/posts?category=motivation" role="button"
              rel="nofollow">Klik sini ya..</a>
              </div>
            </div>
          </div>
        </div>
        <br><br>

      </section>


      <hr class="my-1" />
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
                    <a href="https://www.instagram.com/siapaajabolehweh/"><i class="icon ion-social-instagram"></i></a>
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
    

  