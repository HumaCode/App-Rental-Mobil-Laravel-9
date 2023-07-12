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

                     <form action="{{ route('kendaraan') }}" method="GET">
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
            <h1 class="gallery_taital">Penawaran Terbaik</h1>
         </div>
      </div>
      <div class="row mt-4">

         @forelse ($daftarmobil as $value)
         <div class="col-md-4">
            <div class="gallery_box">
               <div class="gallery_img"><img src="{{ asset($value->gambar) }}"></div>
               <h3 class="types_text">{{ $value->nama_mobil }}</h3>
               <div class="read_bt"><a href="{{ route('detailmobil', $value->slug) }}">Detail</a></div>
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
@endsection