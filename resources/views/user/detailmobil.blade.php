@extends('layout.main')
@section('content')

<br><br><br><br>

    <center>
        <h1 class="banner_taital">Detail <span style="color: #40C0D8;">Kendaraan</span></h1>
    </center>

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="row">
                <div class="col-lg-5">
                    <figure class="img-play-video">

                        <h2 class="section-title text-left mb-4">PANTAI WONOKERTO</h2>
                        <img src="assets/images/alphard.jpeg" alt="Image" class="img-fluid rounded-20">
                    </figure>
                </div>

                <div class="col-lg-6 offset-1">
                    <h2 class="section-title text-left mb-4">adada</h2>


                    <table class="table">

                        <tbody>
                            <tr>
                                <th scope="row" width="250">Tipe Mobil</th>
                                <td>adada</td>
                            </tr>
                            <tr>
                                <th scope="row">Tahun</th>
                                <td>dada</td>
                            </tr>
                            <tr>
                                <th scope="row">Jumlah Kursi</th>
                                <td>dadad</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Bahan Bakar</th>
                                <td>dadad</td>
                            </tr>
                            <tr>
                                <th scope="row">Ket Lain</th>
                                <td><a href="" class="btn btn-success btn-sm"
                                        target="_blank">Klik</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Harga Sewa</th>
                                <td>11 Kali</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
            {{-- <p>{!! $destinasi->deskripsi !!}</p> --}}


       <!-- contact section start -->
        <div class="contact_section layout_padding">
            <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Dapatkan Penawaran</h1>
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

        </div>
    </div>
</div>

@endsection