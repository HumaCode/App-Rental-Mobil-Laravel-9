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
   <title>Aries Rental | {{ $title }}</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="{{ asset('assets') }}/images/fevicon.png" type="image/gif" />
   <!-- font css -->
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="{{ asset('assets') }}/css/iziToast.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


   <!-- GARDENER -->
   <link href="assetgarden/css/style.css" rel="stylesheet">

   <style>
      .search_btn {
         height: 50px;
      }
   </style>

</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('assets') }}/images/logoar.png"
                  width="40%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">

                  <li class="nav-item">
                     <a href="{{ url('home') }}" class="nav-item nav-link {{ Request::is('home') || Request::is('/') ? 'active' : '' }}
                     ">Home</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('kendaraan') }}" class="nav-item nav-link  {{ Request::is('kendaraan') ? 'active' : '' }}
   ">Kendaraan</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('layanan') }}" class="nav-item nav-link {{ Request::is('layanan') ? 'active' : '' }}
                     ">Layanan</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ url('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}
                     ">Tentang</a>
                  </li>
                  {{-- <li class="nav-item">
                     <a href="{{ url('client') }}" class="nav-item nav-link {{ Request::is('client') ? 'active' : '' }}
                     ">Testimoni</a>
                  </li> --}}
                  <li class="nav-item">
                     <a href="{{ url('kontak') }}" class="nav-item nav-link {{ Request::is('kontak') ? 'active' : '' }}
                     ">Kontak</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
               </form>
            </div>
         </nav>
      </div>
   </div>


   @yield('content')


   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="footeer_logo"><img src="{{ asset('assets') }}/images/logoar.png" width="30%"></div>
            </div>
         </div>
         <div class="footer_section_2">
            <div class="row">

               <div class="col">
                  <h4 class="footer_taital">Informasi</h4>
                  <p class="lorem_text">Kami menyediakan paket penyewaan yang fleksibel, mulai dari sewa harian,
                     mingguan, hingga bulanan.
                  </p>
               </div>

               <div class="col">
                  <h4 class="footer_taital">Layanan</h4>
                  <p class="lorem_text">Layanan sewa mobil kami memberikan Anda fleksibilitas, kenyamanan, dan kebebasan
                     untuk menjelajahi tempat tujuan Anda dengan mudah.
                  </p>
               </div>

               <div class="col">
                  <h4 class="footer_taital">Menu</h4>
                  <div class="location_text"><a href="home"><i class="fa fa-arrow-right" aria-hidden="true"></i><span
                           class="padding_left_15">Halaman Home</span></a></div>
                  <div class="location_text"><a href="kendaraan"><i class="fa fa-arrow-right"
                           aria-hidden="true"></i><span class="padding_left_15">Halaman Kendaraan</span></a></div>
                  <div class="location_text"><a href="layanan"><i class="fa fa-arrow-right" aria-hidden="true"></i><span
                           class="padding_left_15">Halaman Layanan</span></a></div>
                  <div class="location_text"><a href="about"><i class="fa fa-arrow-right" aria-hidden="true"></i><span
                           class="padding_left_15">Halaman Tentang</span></a></div>
                  <div class="location_text"><a href="client"><i class="fa fa-arrow-right" aria-hidden="true"></i><span
                           class="padding_left_15">Halaman Client</span></a></div>
               </div>

               <div class="col">
                  <h4 class="footer_taital">Kontak Kami</h4>
                  <div class="location_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span
                           class="padding_left_15">Sorong
                           Papua Barat</span></a></div>
                  <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span
                           class="padding_left_15">0823-9923-1548</span></a></div>
                  <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span
                           class="padding_left_15">ariesrental@gmail.com</span></a></div>
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        {{-- <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> --}}
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <p class="copyright_text">2023 All Rights Reserved. Design by Aries Rental</p>
            </div>
         </div>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
   <script src="{{ asset('assets') }}/js/popper.min.js"></script>
   <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
   <script src="{{ asset('assets') }}/js/jquery-3.0.0.min.js"></script>
   <script src="{{ asset('assets') }}/js/plugin.js"></script>
   <script src="{{ asset('assets') }}/js/iziToast.min.js"></script>
   <!-- sidebar -->
   <script src="{{ asset('assets') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="{{ asset('assets') }}/js/custom.js"></script>

   @stack('scripts')

   @if ($errors->any())
   @foreach ($errors->all() as $error)
   <script>
      iziToast.error({
                    title: '',
                    position: 'topRight',
                    message: '{{ $error }}',
                });
   </script>
   @endforeach
   @endif

   @if (session()->get('error'))
   <script>
      iziToast.error({
                position: 'topRight',
                message: '{{ session()->get('error') }}',
            });
   </script>
   @endif


   @if (session()->get('success'))
   <script>
      iziToast.success({
                position: 'topRight',
                message: '{{ session()->get('success') }}',
            });
   </script>
   @endif
</body>

</html>