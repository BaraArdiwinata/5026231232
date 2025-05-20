<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Mari Bicara dengan SariWangi Teh Celup</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/logo-sariwangi.webp" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        function formvalidation() {
          var nrp = document.getElementById("phone").value;
          var nama = document.getElementById("nama").value;
  
          if (nrp.length == 0) {
            Swal.fire({
              title: "Pesan Kesalahan",
              text: "Nomor harus diisi!",
              icon: "error",
            });
            document.getElementById("phone").focus();
            return false;
          }
  
          if (nama.length == 0) {
            Swal.fire({
              title: "Pesan Kesalahan",
              text: "Nama harus diisi!",
              icon: "error",
            });
            document.getElementById("nama").focus();
            return false;
          }
          
          var regexHuruf = /^[A-Za-z]+$/;
          if (!regexHuruf.test(nama)) {
            Swal.fire({
              title: "Pesan Kesalahan",
              text: "Nama tidak boleh mengandung angka!",
              icon: "error",
            });
            document.getElementById("nama").focus();
            return false;
          }

          var regexHuruf = /^[0-9]+$/;
          if (!regexHuruf.test(phone)) {
            Swal.fire({
              title: "Pesan Kesalahan",
              text: "Nomor tidak boleh mengandung huruf!",
              icon: "error",
            });
            document.getElementById("phone").focus();
            return false;
          }
  
          return true;
        }
      </script>
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html" style="width: 10%;"><img src="images/logo-sariwangi.webp"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="icecream.html">Artikel & Resep</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Produk</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Kebaikan Teh</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Rainforest Alliance</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt"><a href="#">Login <span style="color: #222222;"><i class="fa fa-user" aria-hidden="true"></i></span></a></div>
                     <div class="fa fa-search form-control-feedback"></div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">SariWangi</h1>
                              <p class="banner_text">SariWangi adalah merek teh lokal Indonesia yang diperkenalkan pada tahun 1973 dan merupakan pioner dalam format teh celup.</p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="images/konten-1.avif" style="border-radius: 15px;"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">SariWangi</h1>
                              <p class="banner_text">SariWangi percaya, secangkir teh nikmat adalah teh yang ASLI dan berkualitas tinggi yang tidak hanya memberikan rasa dan aroma yang nikmat, tapi juga memberikan manfaat di setiap gelasnya.</p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="images/konten-1.avif" style="border-radius: 15px;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
       <!-- cream sectuion start -->
      <div class="cream_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h1 class="cream_taital">The Series</h1>
              </div>
           </div>
           <div class="cream_section_2">
              <div class="row">
                 <div class="col-md-4">
                    <div class="cream_box">
                       <div class="cream_img"><img src="images/konten-2-1.avif"></div>
                       <h6 class="strawberry_text">SariWangi Jahe Kunyit</h6>
                       <div class="cart_bt"><a href="#">Jelajahi</a></div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="cream_box">
                       <div class="cream_img"><img src="images/konten-2-2.avif"></div>
                       <h6 class="strawberry_text">Resep Milk Tea Cookies</h6>
                       <div class="cart_bt"><a href="#">Jelajahi</a></div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="cream_box">
                       <div class="cream_img"><img src="images/konten-2-3.avif"></div>
                       <h6 class="strawberry_text">4 Resep Es Teh Manis</h6>
                       <div class="cart_bt"><a href="#">Jelajahi</a></div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="cream_section_2">
              <div class="row">
                 <div class="col-md-4">
                    <div class="cream_box">
                       <div class="cream_img"><img src="images/konten-2-4.avif"></div>
                       <h6 class="strawberry_text">Resep Kolak Pisang Milk Tea</h6>
                       <div class="cart_bt"><a href="#">Jelajahi</a></div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="cream_box">
                       <div class="cream_img"><img src="images/konten-2-5.avif"></div>
                       <h6 class="strawberry_text">Cara Membuat Milk Tea Mawar</h6>
                       <div class="cart_bt"><a href="#">Jelajahi</a></div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="cream_box">
                       <div class="cream_img"><img src="images/konten-2-6.avif"></div>
                       <h6 class="strawberry_text">Kue Dadar Gulung Milk Tea</h6>
                       <div class="cart_bt"><a href="#">Jelajahi</a></div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="seemore_bt"><a href="#">Lebih Lanjut</a></div>
        </div>
     </div>
     <!-- cream sectuion end -->
      <!-- testimonial section start -->
      <div class="testimonial_section layout_padding">
        <div class="container">
           <div class="row">
           </div>
           <div class="testimonial_section_2">
              <div class="row">
                 <div class="col-md-12">
                    <div class="testimonial_box">
                       <div id="main_slider" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                             <div class="carousel-item active">
                                <p class="testimonial_text">Sariwangi 100% Teh Asli, kaya akan flavonoid, senyawa alami dari tumbuhan yang memiliki banyak manfaat untuk Kesehatan.</p>
                                <h4 class="client_name">Seduh dan Rasakan Kebaikan FLAVONOID</h4>
                                <div class="client_img"><img src="images/konten-3-1.avif" style="width: 20%;"></div>
                             </div>
                             <div class="carousel-item">
                                <p class="testimonial_text">Kami bangga untuk menawarkan produk dengan 100% Sertifikasi Rainforest Alliance.
                                  Sariwangi bekerjasama dengan Rainforest Alliance untuk membantu melindungi lingkungan dan memastikan kehidupan dan kondisi kerja yang lebih baik bagi petani teh.</p>
                                <h4 class="client_name">Secangkir teh yang nikmat, BERI KEBAIKAN</h4>
                                <div class="client_img"><img src="images/konten-3-2.avif" style="width: 35%;"></div>
                             </div>
                             <div class="carousel-item">
                                <p class="testimonial_text">SariWangi hadir sebagai merek teh celup yang menginspirasi keluarga Indonesia untuk terus menjaga kebersamaan dan kehangatan keluarga, dengan cara berkumpul Bersama setidaknya 15 menit setiap harinya dengan #SariWangiTime. Saatnya Bicara, Saatnya SariWangi #MariBicara</p>
                                <h4 class="client_name">Momen Hangat, di Sela KESIBUKAN</h4>
                                <div class="client_img"><img src="images/konten-3-3.avif" style="width: 20%;"></div>
                             </div>
                          </div>
                          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                          <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                          <i class="fa fa-angle-right"></i>
                          </a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- testimonial section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h1 class="services_taital">KEBAIKAN TEH</h1>
                 <p class="services_text">Temukan berbagai kebaikan alami dalam satu seduhan Teh SariWangi</p>
              </div>
           </div>
           <div class="services_section_2">
              <div class="row">
                 <div class="col-md-4">
                    <div class="services_box">
                       <span class="icon_img"><img src="images\konten-4-1.avif"></span>
                       <br /> <br />
                       <h5>Ketahui 5 Manfaat Teh untuk Kesehatan Tubuh Anda</h5>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="services_box">
                       <span class="icon_img"><img src="images\konten-4-2.avif"></span>
                       <br /> <br />
                       <h5>Manfaat Flavonoid yang Harus Anda Ketahui untuk Kesehatan</h5>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="services_box">
                       <span class="icon_img"><img src="images\konten-4-3.avif"></span>
                       <br /> <br />
                       <h5>Manfaat Teh Hitam yang Perlu Kamu Ketahui</h5>
                    </div>
                 </div>
              </div>
           </div>
           <div class="seemore_bt"><a href="#">Read More</a></div>
        </div>
     </div>
     <!-- services section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="contact_main">
                     <h1 class="contact_taital">Contact Us</h1>
                     <br />
                      <form id="formpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation();" >
                        <input type="text" id="phone" class="form-control" placeholder="Phone Number" name="phone" />
                        <br />
                        <input type="text" id="nama" class="form-control" placeholder="Name" name="nama" />
                        <br />
                        <input type="text" id="nama" class="form-control" placeholder="Your Messages" name="nama" />
                        <br />
                        <input type="submit" class="btn btn-primary" value="SEND" />
                      </form>
                    </div>
                  </div>
               <div class="col-md-8">
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <span class="padding_left_10 active"><i class="fa fa-map-marker" aria-hidden="true"></i></span>Making this the first true</a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>Call : +01 1234567890
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>Email : demo@gmail.com
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="mail_main">
                     <h3 class="newsletter_text">Newsletter</h3>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
   </body>
</html>