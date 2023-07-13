@extends('layout.main')
@section('content')
    <!-- Contact Start -->
    <br><br>
    <div class="container-xxl py-5 mt-5">
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

                    <form action="{{ route('penawaran') }}" method="POST">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Nama Lengkap">
                                </div>
                            </div>


                            <div class="col-12 mt-2">
                                <div class="form-floating">
                                    <label for="message">Ada Yang Bisa Kami Bantu</label>
                                    <textarea class="form-control" placeholder="Ketikan disini.." name="message" id="message" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                {{-- <input type="button " value="klik" onclick="whatsapp()"> --}}
                                <button class="btn btn-primary py-3 px-4" type="submit" onclick="whatsapp()">Kirim
                                    Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        {!! $setting->location !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    {{-- <script>
   function whatsapp() {
         var name = document.getElementById('name').value;
         var email = document.getElementById('email').value;
         var subject = document.getElementById('subject').value;
         var message = document.getElementById('message').value;


         var whatsappurl = "https://api.whatsapp.com/send?phone=6282324118692?text=" 
                  + "Nama : " + name +"%0a"
                  + "Email : " + email +"%0a"
                  + "Pesan : " + message  +"%0a"

         window.open(whatsappurl,"_blank").focus();
      }
</script> --}}
@endsection
