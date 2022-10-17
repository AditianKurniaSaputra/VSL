@extends('layouts.main')

@section('container')
<div class="all">
<div class="py-3"></div>

<!-- Jumbotron -->
    <!-- <div class="bg-image p-5 text-align shadow-3-strong rounded mb-1 text-white" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/010.webp');">
    <h1><b>Virtual Learning School</b></h1>
    <p>
    Kini, semakin banyak orang yang ingin tahu bagaimana cara mengajar. Baik itu di kelas maupun di rumah, kami berterima kasih atas bantuan semua pihak yang terlibat dalam usaha menjaga kelangsungan proses belajar para siswa.
    </p>
    <a class="btn btn-outline-light btn-lg m-2" href="/categories" role="button" rel="nofollow">Lets Go..</a>
    </div> -->
    <!-- <hr class="my-1" /> -->


              <div class="heading">
                <h1>About Us</h1>
                <span>SMPN 1 CILENGKRANG</span> 
              </div>

              <div class="cd-half-width second-slide ">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="{{ asset('img/sekolah.jpg') }}">
                            <!-- format image: "{{ asset('img/sekolah.jpg') }}" -->

                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4><b>VISI</b></h4>
                              <p><i>PUSAT PENDIDIKAN YANG BERPRESTASI DAN KOMPETITIF BERLANDASKAN IMAN DAN TAQWA SERTA BERWAWASAN LINGKUNGAN</i></p>

                              <h4><b>MISI</b></h4>
                              <ul><i>
                                    <li>Menuntaskan wajib belajar 9 tahun yang dicanangkan pemerintah</li>
                                    <li>Meningkatkan mutu pendidikan untuk mewujudkan kualitas sumber daya</li>
                                    <li>Meningkatkan nilai-nilai keimanan dan ketakwaan bagi segenap komponen</li>
                                    <li>Meningkatkan prestasi dan keterampilan siswa</li>
                                    <li>Meningkatkan kinerja yang spesifik sesuai propesi personal</li>
                                    <li>Meningkatkan azas kekeluargaan yang dilandasi oleh semangat keteladanan</li>
                                </i></ul>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                            <h4><b>STRATEGI</b></h4>
                              <ul><i>
                                    <li>Menjaring siswa putus sekolah</li>
                                    <li>Menyelenggarakan kegiatan ilmiah bagi guru</li>
                                    <li>Mengintegrasikan nilai-nilai keagamaan disekolah</li>
                                    <li>Mempasilitasi pengadaan sarana prasarana yang menunjang terhadap prestasi dan keterampilan siswa</li>
                                    <li>Mempasilitasi kegiatan MGMP</li>
                                    <li>Mengoptimalkan aktifitas sosial sekolah</li>
                                </i></ul>
                              <a class="btn btn-outline-dark btn-lg m-2" href="/categories" role="button" rel="nofollow">Lets Go..</a>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="{{ asset('img/kelompok.jpg') }}">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
              <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<br>


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

        <<!--Start of Tawk.to Script-->
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