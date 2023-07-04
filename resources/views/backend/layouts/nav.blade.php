<div class="nav-header">
    <a href="index.html" class="brand-logo">
        {{-- <img class="logo-abbr" src="{{ asset('backend') }}/images/logo.png" alt=""> --}}
        <img class="logo-abbr"
            src="{{ $setting->logo == null ? asset('backend/images/noimage.png') : \Storage::url($setting->logo) }}"
            alt="">
        <img class="logo-compact" src="{{ asset('backend') }}/images/logo-text.png" alt="">
        <img class="brand-title"
            src="{{ $setting->logo == null ? asset('backend/images/noimage.png') : \Storage::url($setting->logo) }}"
            alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>