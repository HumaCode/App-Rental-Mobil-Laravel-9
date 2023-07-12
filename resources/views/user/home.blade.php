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
                           <div class="btn_main">
                              <div class="contact_bt"><a href="#">Read More</a></div>
                              <div class="contact_bt active"><a href="#">Booking</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="banner_taital_main">
                           <h1 class="banner_taital">Rental Mobil <br><span style="color: #40C0D8;">Terpercaya</span>
                           </h1>
                           <p class="banner_text">Dengan armada yang beragam, kami menawarkan
                              pengalaman berkendara yang nyaman dan aman</p>
                           <div class="btn_main">
                              <div class="contact_bt"><a href="#">Read More</a></div>
                              <div class="contact_bt active"><a href="#">Booking</a></div>
                           </div>
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
                     <p class="about_text">Aries Rental adalah penyedia layanan sewa mobil yang terpercaya dan
                        terkemuka di kota ini. Kami memiliki pengalaman lebih dari 10 tahun dalam industri ini dan
                        telah melayani ribuan pelanggan dengan kepuasan tinggi.
                        Komitmen kami adalah memberikan pengalaman sewa mobil yang mudah, nyaman, dan aman bagi setiap
                        pelanggan kami. </p>
                     <div class="readmore_btn"><a href="about">Read More</a></div>
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
                        <div class="row">
                           <div class="col-md-3 select-outline">
                              <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                 <option value="" disabled selected>Tipe Mobil</option>
                                 <option value="1">Option 1</option>
                                 <option value="2">Option 2</option>
                                 <option value="3">Option 3</option>
                              </select>
                           </div>
                           <!-- <div class="col-md-3 select-outline">
                              <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                 <option value="" disabled selected>Any type</option>
                                 <option value="1">Option 1</option>
                                 <option value="2">Option 2</option>
                                 <option value="3">Option 3</option>
                              </select>
                           </div> -->
                           <div class="col-md-3 select-outline">
                              <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                 <option value="" disabled selected>Harga</option>
                                 <option value="1">Option 1</option>
                                 <option value="2">Option 2</option>
                                 <option value="3">Option 3</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <div class="search_btn"><a href="#">Cari Sekarang</a></div>
                           </div>
                        </div>
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
               <h1 class="gallery_taital">Penawaran Terbaik</h1>
            </div>
         </div>
         <div class="gallery_section_2">
            <div class="row">
            
            @foreach($daftarmobil as $value)
               <div class="col-md-4">
                  <div class="gallery_box">
                     <div class="gallery_img"><img src="{{ asset($value->gambar) }}"></div>
                     <h3 class="types_text">{{ $value->nama_mobil }}</h3>
                     <p class="looking_text">{{  $value->harga_sewa }}</p>
                     <div class="read_bt"><a href="detailmobil">Detail</a></div>
                  </div>
               </div>
            @endforeach
            
            </div>
         </div>
         {{-- <div class="gallery_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div class="gallery_box">
                     <div class="gallery_img"><src="{{ url($item->gambar) }}"></div>
                     <h3 class="types_text"></h3>
                     <p class="looking_text"></p>
                     <div class="read_bt"><a href="#">Book Now</a></div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gallery_box">
                     <div class="gallery_img"><img src="images/img-2.png"></div>
                     <h3 class="types_text">Toyota car</h3>
                     <p class="looking_text">Start per day $4500</p>
                     <div class="read_bt"><a href="#">Book Now</a></div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gallery_box">
                     <div class="gallery_img"><img src="images/img-3.png"></div>
                     <h3 class="types_text">Toyota car</h3>
                     <p class="looking_text">Start per day $4500</p>
                     <div class="read_bt"><a href="#">Book Now</a></div>
                  </div>
               </div>
            </div>
         </div> --}}
      </div>
   </div>
   <!-- gallery section end -->
   <!-- choose section start -->
   <div class="choose_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="choose_taital">MENGAPA PILIH KAMI</h1>
            </div>
         </div>
         <div class="choose_section_2">
            <div class="row">
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
                        <h1 class="client_taital">Apa Kata Pelanggan</h1>
                     </div>
                  </div>
                  <div class="client_section_2">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="client_taital_box">
                              <div class="client_img"><img src="assets/images/client-img1.png"></div>
                              <h3 class="moark_text">Hannery</h3>
                              <p class="client_text">It is a long established fact that a reader will be distracted by
                                 the readable content of a page</p>
                           </div>
                           <div class="quick_icon"><img src="assets/images/quote.png" width="20%"></div>
                        </div>
                        <div class="col-md-6">
                           <div class="client_taital_box">
                              <div class="client_img"><img src="assets/images/client-img2.png"></div>
                              <h3 class="moark_text">Channery</h3>
                              <p class="client_text">It is a long established fact that a reader will be distracted by
                                 the readable content of a page</p>
                           </div>
                           <div class="quick_icon"><img src="assets/images/quote.png" width="20%"></div>
                        </div>
                     </div>
                  </div>
               </div>
               
               {{-- <div class="carousel-item">
                  <div class="row">
                     <div class="col-md-12">
                        <h1 class="client_taital">Apa Kata Pelanggan</h1>
                     </div>
                  </div>
                  <div class="client_section_2">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="client_taital_box">
                              <div class="client_img"><img src="images/client-img1.png"></div>
                              <h3 class="moark_text">Hannery</h3>
                              <p class="client_text">It is a long established fact that a reader will be distracted by
                                 the readable content of a page</p>
                           </div>
                           <div class="quick_icon"><img src="assets/images/quote.png"></div>
                        </div>
                        <div class="col-md-6">
                           <div class="client_taital_box">
                              <div class="client_img"><img src="images/client-img2.png"></div>
                              <h3 class="moark_text">Channery</h3>
                              <p class="client_text">It is a long established fact that a reader will be distracted by
                                 the readable content of a page</p>
                           </div>
                           <div class="quick_icon"><img src="assets/images/quote.png"></div>
                        </div>
                     </div>
                  </div>
               </div> --}}
               
               {{-- <div class="carousel-item">
                  <div class="row">
                     <div class="col-md-12">
                        <h1 class="client_taital">What Says Customers</h1>
                     </div>
                  </div>
                  <div class="client_section_2">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="client_taital_box">
                              <div class="client_img"><img src="images/client-img1.png"></div>
                              <h3 class="moark_text">Hannery</h3>
                              <p class="client_text">It is a long established fact that a reader will be distracted by
                                 the readable content of a page</p>
                           </div>
                           <div class="quick_icon"><img src="images/quick-icon.png"></div>
                        </div>
                        <div class="col-md-6">
                           <div class="client_taital_box">
                              <div class="client_img"><img src="images/client-img2.png"></div>
                              <h3 class="moark_text">Channery</h3>
                              <p class="client_text">It is a long established fact that a reader will be distracted by
                                 the readable content of a page</p>
                           </div>
                           <div class="quick_icon"><img src="images/quick-icon.png"></div>
                        </div>
                     </div>
                  </div>
               </div> --}}
            </div>
            <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
            </a>
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
                  <div class="mail_section_1">
                     <input type="text" class="mail_text" placeholder="Nama Lengkap" name="Name">
                     <input type="text" class="mail_text" placeholder="Nomor Telepon" name="Phone Number">
                     <input type="text" class="mail_text" placeholder="Email" name="Email">
                     <textarea class="massage-bt" placeholder="Saya ingin menyakan tarif" rows="5" id="comment" name="Massage"></textarea>
                     <div class="send_bt"><a href="#">Send</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
@endsection