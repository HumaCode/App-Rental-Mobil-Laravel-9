@extends('layout.main')
@section('content')
    <br><br><br><br>

    <center>
        <h1 class="banner_taital ">Detail <span style="color: #40C0D8;">Kendaraan</span></h1>
    </center>

    <div class="untree_co-section mt-4">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <div class="row ">
                    <div class="col-lg-5">
                        <figure class="img-play-video">

                            <img src="{{ asset($motorDetail->gambar) }}" alt="Image" class="img-fluid rounded-20">
                        </figure>
                    </div>

                    <div class="col-lg-6 offset-1">
                        <h2 class="section-title text-left mb-4"><strong>{{ $motorDetail->nama_motor }}</strong></h2>


                        <table class="table">

                            <tbody>
                                <tr>
                                    <th scope="row" width="250">Merek Mobil</th>
                                    <td>{{ $motorDetail->merekMotor->merek_motor }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tahun</th>
                                    <td>{{ $motorDetail->tahun }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan Lain</th>
                                    <td>{!! $motorDetail->ket_lain !!}</td>
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

                                        <form action="{{ route('penawaran2') }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="nama_motor" value="{{ $motorDetail->nama_motor }}">
                                            <input type="hidden" name="tahun" value="{{ $motorDetail->tahun }}">

                                            <input type="text" class="mail_text" placeholder="Nama" name="name">

                                            <textarea class="massage-bt" name="message" placeholder="Tulis pesan disini" rows="5" id="comment"
                                                name="Massage"></textarea>
                                            <center>
                                                <button type="submit" class="btn btn-danger btn-lg">Kirim</button>
                                            </center>

                                        </form>
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
