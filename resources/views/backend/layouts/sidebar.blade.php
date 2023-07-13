<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li> -->


            <li>
                <a href="{{ route('dashboard') }}" aria-expanded="false"><i class="fa fa-tachometer"
                        aria-hidden="true"></i><span class="nav-text">Dashboard</span></a>
            </li>


            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-car"
                        aria-hidden="true"></i><span class="nav-text">Rental Mobil</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('merek') }}">Merek Mobil</a></li>
                    <li><a href="{{ route('mobil') }}">Daftar Mobil</a></li>

                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="fa fa-motorcycle"></i><span class="nav-text">Rental Motor</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('merek_motor') }}">Merek Motor</a></li>
                    {{-- <li><a href="{{ route('motor') }}">Daftar Motor</a></li> --}}

                </ul>
            </li>

            <li>
                <a href="{{ route('admin.testimoni') }}" aria-expanded="false"><i class="fa fa-smile-o"
                        aria-hidden="true"></i><span class="nav-text">Testimoni</span></a>
            </li>

            <li class="nav-label">Lainya</li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-plug"></i><span
                        class="nav-text">Pengaturan</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('setting') }}">Website</a></li>
                    <li><a href="{{ route('data.admin') }}">Daftar Admin</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Profile</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('profile.update') }}">Ubah Profil</a></li>
                            <li><a href="{{ route('ubah.password') }}">Ubah Password</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
