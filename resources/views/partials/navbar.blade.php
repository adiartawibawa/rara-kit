<div class="navbar bg-base-100 max-w-7xl shadow-sm mx-auto md:rounded-full px-4 md:px-8">

    <div class="navbar-start">
        <!-- Tombol hamburger membuka drawer (mobile only) -->
        <!-- FIX: tambah role="button" + tabindex agar label ini bisa difokus keyboard,
                             karena <label> tidak otomatis masuk tab order seperti <button> -->
        <label for="mobile-drawer" role="button" tabindex="0" class="btn btn-ghost lg:hidden" aria-label="Buka menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
        </label>
        <a href="{{ url('/') }}" class="text-xl font-bold">{{ config('app.name') }}</a>
    </div>

    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="#beranda">Beranda</a></li>
            {{-- TODO: section #tentang belum ada di halaman ini.
                                 Tambahkan <section id="tentang"> atau arahkan link ini
                                 ke section lain (mis. #layanan) sampai section-nya dibuat. --}}
            <li><a href="#tentang">Tentang</a></li>
            <li>
                <details>
                    <summary>Layanan</summary>
                    <ul class="p-2 bg-base-100 w-48 z-1 rounded-box shadow">
                        <li><a href="#layanan-sekolah">Website Sekolah</a></li>
                        <li><a href="#layanan-bisnis">Website Bisnis</a></li>
                    </ul>
                </details>
            </li>
            <li><a href="#portofolio">Portofolio</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </div>

    <div class="navbar-end gap-2">
        @auth
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm md:btn-md">Dashboard</a>
        @else
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="btn btn-ghost btn-sm md:btn-md hidden sm:inline-flex">Masuk</a>
            @endif
            <a href="#kontak" class="btn btn-primary btn-sm md:btn-md">Hubungi Kami</a>
        @endauth
    </div>

</div>
