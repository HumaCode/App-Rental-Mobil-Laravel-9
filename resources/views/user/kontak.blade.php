@extends('layout.main')
@section('content')

<!-- Contact Start -->
<br><br>
<div class="container-xxl py-5">
   <div class="container">
      <div class="row g-5">
         <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="banner_taital_main">
               <h1 class="banner_taital">Kontak <span style="color: #40C0D8;">Kami</span>
               </h1>
               <h4><b>DAPATKAN PENAWARAN</b></h4>
               <p class="banner_text">Rasakan kebebasan berkendara dengan rental mobil terbaik di kota ini!!<br><br>
               </p>
            </div>

            <form action="">
               <div class="row g-3">
                  <div class="col-md-6">
                     <div class="form-floating">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-floating">
                        <label for="nomor">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Nomor Telepon">
                     </div>
                  </div>
                  {{-- <div class="col-12">
                     <div class="form-floating">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="subject" name="subject" placeholder="Email">
                     </div>
                  </div> --}}
                  <div class="col-12 mt-2">
                     <div class="form-floating">
                        <label for="message">Ada Yang Bisa Kami Bantu</label>
                        <textarea class="form-control" placeholder="Ketikan disini.." name="message" id="message"
                           style="height: 100px"></textarea>
                     </div>
                  </div>
                  <div class="col-12 mt-2">
                     <button class="btn btn-primary py-3 px-4" type="submit" onclick="whatsapp()">Kirim Pesan</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
            <div class="position-relative rounded overflow-hidden h-100">
               <iframe class="position-relative w-100 h-100"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3376402913586!2d131.30821957382253!3d-0.8893925353187346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d5eab8d74cafcd3%3A0x7f0b9f508a2c4887!2sAries%20Rental%20Mobil%20Sorong%20Papua!5e0!3m2!1sid!2sid!4v1688972615912!5m2!1sid!2sid"
                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade">
                  frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                  tabindex="0"></iframe>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Contact End -->

<script>
   function whatsapp() {
         var name = document.getElementById('name').value;
         var email = document.getElementById('email').value;
         var subject = document.getElementById('subject').value;
         var message = document.getElementById('message').value;


         var whatsappurl = "https://api.whatsapp.com/send/?phone=082324118692?text=" 
                  + "Nama : " + name +"%0a"
                  + "Email : " + email +"%0a"
                  + "Pesan : " + message  +"%0a"

         window.open(whatsappurl,"_blank").focus();
      }
</script>


@endsection