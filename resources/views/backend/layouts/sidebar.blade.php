<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li> -->


            <li><a href="{{ route('dashboard') }}" aria-expanded="false"><i class="icon icon-world-2"></i><span
                        class="nav-text">Dashboard</span></a></li>

            <li class="nav-label">Lainya</li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-plug"></i><span
                        class="nav-text">Pengaturan</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('setting') }}">Website</a></li>
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