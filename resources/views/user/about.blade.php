@extends('layout.main')
@section('content')

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
                  <h1 class="banner_taital">Tentang <span style="color: #40C0D8;">Kami</span>

               </div>
            </div>
            {!! $setting->about !!}
         </div>
      </div>
   </div>
</div>
<!-- about section end -->

@endsection