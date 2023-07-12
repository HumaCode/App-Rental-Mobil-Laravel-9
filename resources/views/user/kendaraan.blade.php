@extends('layout.main')
@section('content')

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
 @endsection