@extends('layout.main')
@section('content')

<!-- banner section start -->
<div class="banner_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div id="banner_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="banner_taital_main">
                        <h1 class="banner_taital">Kualitas Terbaik<br><span style="color: #40C0D8;">Untuk Kamu</span>
                        </h1>
                        <p class="banner_text">Rasakan kebebasan berkendara dengan rental mobil terbaik di kota ini!!
                        </p>
                        {{-- <div class="btn_main">
                           <div class="contact_bt"><a href="#">Read More</a></div>
                           <div class="contact_bt active"><a href="#">Booking</a></div>
                        </div> --}}
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="banner_taital_main">
                        <h1 class="banner_taital">Rental Mobil <br><span style="color: #40C0D8;">Terpercaya</span>
                        </h1>
                        <p class="banner_text">Dengan armada yang beragam, kami menawarkan
                           pengalaman berkendara yang nyaman dan aman</p>
                        {{-- <div class="btn_main">
                           <div class="contact_bt"><a href="#">Read More</a></div>
                           <div class="contact_bt active"><a href="#">Booking</a></div>
                        </div> --}}
                     </div>
                  </div>

               </div>
               <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
         <div class="col-md-6">
            <div class="banner_img"><img src="images/banner-img.png"></div>
         </div>
      </div>
   </div>
</div>
<!-- banner section end -->
<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <div class="about_section_2">
         <div class="row">
            <div class="col-md-6">
               <div class="image_iman"><img src="assets/images/about.png" class="about_img"></div>
            </div>
            <div class="col-md-6">
               <div class="about_taital_box">
                  <h1 class="about_taital">Tentang <span style="color: #40C0D8;">Kami</span></h1>
                  {!! $setting->about !!}
                  <div class="readmore_btn"><a href="about">Selengkapnya</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->
<div class="search_section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="search_taital">Cari Mobil Terbaik Kamu</h1>
            <p class="search_text">Cari mobil terbaik kamu di Aries Rentang Mobil, Sorong Papua </p>
            <!-- select box section start -->
            <div class="container">
               <div class="select_box_section">
                  <div class="select_box_main">

                     <form action="{{ route('home') }}" method="GET">
                        <div class="row">
                           <div class="col-md-6 select-outline">
                              <select class="mdb-select md-form md-outline colorful-select dropdown-primary" name="q">
                                 <option value="" disabled selected>Merek Mobil</option>
                                 @foreach ($brandMobil as $item)
                                 <option value="{{ $item->id }}">{{ $item->merek }}</option>
                                 @endforeach
                              </select>
                           </div>


                           <div class="col-md-3">
                              <button type="submit" class="btn search_btn">Cari Sekarang</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- select box section end -->
         </div>
      </div>
   </div>
</div>
<!-- gallery section start -->
<div class="gallery_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="gallery_taital mb-4">Penawaran Terbaik</h1>
         </div>
      </div>

      <div class="row">

         @forelse ($daftarmobil as $item)

         <div class="col-md-4">
            <div class="gallery_box">
               <div class="gallery_img"><img src="{{ $item->gambar }}"></div>
               <h3 class="types_text">{{ $item->nama_mobil }}</h3>
               <div class="read_bt"><a href="{{ route('detailmobil', $item->slug) }}">Cek Sekarang</a></div>
            </div>
         </div>
         @empty

         <center>
            <div class="alert alert-danger ">
               Tidak ada data
            </div>
         </center>

         @endforelse


      </div>

   </div>
</div>
<!-- gallery section end -->
<!-- choose section start -->
<div class="choose_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="choose_taital text-center">MENGAPA PILIH KAMI</h1>
         </div>
      </div>
      <div class="choose_section_2">
         <div class="row text-center">
            <div class="col-sm-4">
               <div class="icon_1"><img src="assets/images/icon-1.png"></div>
               <h4 class="safety_text">Kualitas & Keamanan</h4>
               <p class="ipsum_text"> Setiap mobil yang kami sewakan dalam kondisi prima dan terawat dengan baik </p>
            </div>
            <div class="col-sm-4">
               <div class="icon_1"><img src="assets/images/icon-2.png"></div>
               <h4 class="safety_text">Online Booking</h4>
               <p class="ipsum_text">Anda dapat memesan mobil melalui telepon atau online melalui situs web kami. </p>
            </div>
            <div class="col-sm-4">
               <div class="icon_1"><img src="assets/images/icon-3.png"></div>
               <h4 class="safety_text">Best Drivers</h4>
               <p class="ipsum_text">Tim layanan pelanggan kami siap membantu Anda dengan ramah dan responsif </p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- choose section end -->

<!-- client section start -->
<div class="client_section layout_padding">
   <div class="container">
      <div id="custom_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="client_taital mb-3">Apa Kata Pelanggan</h1>
                  </div>
               </div>
               <div class="row mb-2">

                  @foreach ($testimoni as $item)
                  <div class="col-md-4 mt-4 ">
                     <div class="client_taital_box ">
                        @if ($item->testimoni == 'Puas')
                        <center>
                           <div class="client_img  w-25 "><img src="{{ asset('assets') }}/images/3.png">
                           </div>
                        </center>
                        @elseif($item->testimoni == 'Biasa')
                        <center>
                           <div class="client_img  w-25"><img src="{{ asset('assets') }}/images/1.png"></div>
                        </center>
                        @elseif($item->testimoni == 'Tidak Puas')
                        <center>
                           <div class="client_img  w-25"><img src="{{ asset('assets') }}/images/2.png"></div>
                        </center>
                        @endif
                        <p class="client_text">' {{ $item->testimoni }} '</p>
                        <h3 class="moark_text mt-2">{{ $item->name }}</h3>
                        <p class="client_text">{{ $item->message }}</p>
                     </div>
                  </div>
                  @endforeach


               </div>
            </div>


         </div>

      </div>
   </div>
</div>
<!-- client section end -->

<!-- contact section start -->
<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="contact_taital">Testimoni</h1>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="contact_section_2">
         <div class="row">
            <div class="col-md-12">
               <form action="{{ route('testimoni') }}" method="POST">
                  @csrf

                  <div class="mail_section_1">
                     <input type="text" class="mail_text " placeholder="Nama" name="name">
                     <select name="testimoni" id="" class="mail_text">
                        <option disabled selected>-- Pilih Tingkat Kepuasan --</option>
                        <option value="Puas">Puas</option>
                        <option value="Biasa">Biasa</option>
                        <option value="Tidak Puas">Tidak Puas</option>
                     </select>
                     <textarea class="massage-bt" placeholder="Testimoni" rows="5" id="comment"
                        name="message"></textarea>

                     <div class="text-center text-white">
                        <button type="submit" class="btn btn-danger btn-lg "
                           style="color: white !important;">Kirim</button>

                     </div>

               </form>
            </div>
         </div>
      </div>

      <a href="https://api.whatsapp.com/send?phone=6282399231548" target="_blank">
         <button class="btn-floating whatsapp">
            <img src="assets/images/wa.png">
            <span>082399231548</span>
         </button>
      </a>
   </div>
</div>
</div>
<!-- contact section end -->
@endsection