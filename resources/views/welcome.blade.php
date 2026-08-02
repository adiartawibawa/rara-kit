<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @fonts

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen antialiased flex flex-col scroll-smooth bg-base-200 text-base-content">

    {{-- ====================================================================
         DRAWER WRAPPER
         Membungkus seluruh halaman (header + main) karena pola daisyUI
         mengharuskan drawer-content & drawer-side sejajar sebagai
         sibling di dalam .drawer.
    ==================================================================== --}}
    <div class="drawer">
        <input id="mobile-drawer" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex flex-col">

            <header class="fixed w-full top-5 z-50 px-4">
                <div class="navbar bg-base-100 max-w-7xl shadow-sm mx-auto md:rounded-full px-4 md:px-8">

                    <div class="navbar-start">
                        <!-- Tombol hamburger membuka drawer (mobile only) -->
                        <!-- FIX: tambah role="button" + tabindex agar label ini bisa difokus keyboard,
                             karena <label> tidak otomatis masuk tab order seperti <button> -->
                        <label for="mobile-drawer" role="button" tabindex="0" class="btn btn-ghost lg:hidden"
                            aria-label="Buka menu">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h8m-8 6h16" />
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

                    <div class="navbar-end">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm md:btn-md">Dashboard</a>
                        @else
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}"
                                    class="btn btn-ghost btn-sm md:btn-md hidden sm:inline-flex">Masuk</a>
                            @endif
                            <a href="#kontak" class="btn btn-primary btn-sm md:btn-md">Hubungi Kami</a>
                        @endauth
                    </div>

                </div>
            </header>

            <main>
                {{-- ============================================================
                     HERO SECTION
                     FIX: id="beranda" ditambahkan supaya link nav "Beranda" valid.
                     FIX: scroll-mt-* ditambahkan di section berikutnya, bukan di sini,
                     karena hero adalah halaman pertama (tidak perlu offset scroll).
                ============================================================ --}}
                <section id="beranda">
                    <div class="hero min-h-screen relative overflow-hidden"
                        style="background-image: url(https://images.unsplash.com/photo-1657970757741-c95fdb7da4d9?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
                        <div class="hero-overlay bg-linear-to-br from-primary/70 via-black/40 to-secondary/40"></div>

                        <div class="hero-content text-center text-neutral-content px-4">
                            <div class="max-w-2xl">

                                <h1 class="mb-5 text-4xl md:text-6xl font-bold leading-tight">
                                    Wujudkan <span class="text-primary">Website Impian</span> Anda
                                </h1>

                                <p class="mb-8 text-base md:text-lg opacity-90 max-w-xl mx-auto">
                                    Kami membantu sekolah, institusi, dan bisnis membangun kehadiran digital
                                    yang profesional, cepat, dan mudah dikelola — tanpa ribet urusan teknis.
                                </p>

                                <!-- FIX: sebelumnya <button> tanpa aksi apa pun (tidak bisa diklik ke mana-mana).
                                     Diganti jadi <a> dengan style btn daisyUI agar benar-benar mengarah
                                     ke section/route yang relevan. -->
                                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                                    <a href="#kontak" class="btn btn-primary btn-lg">
                                        Mulai Sekarang
                                    </a>
                                    <a href="#portofolio"
                                        class="btn btn-outline btn-lg text-neutral-content border-neutral-content/50 hover:bg-neutral-content/10">
                                        Lihat Portofolio
                                    </a>
                                </div>

                                {{-- Catatan: 3 blok checkmark di bawah ini identik strukturnya.
                                     Kandidat bagus untuk di-extract jadi Blade component
                                     <x-check-item>Dipercaya sekolah & institusi</x-check-item>
                                     supaya tidak duplikasi SVG 3x. Dibiarkan inline dulu
                                     supaya kamu bisa lihat hasilnya sebelum refactor. --}}
                                <div class="mt-10 flex flex-wrap justify-center gap-6 text-sm opacity-80">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Dipercaya sekolah & institusi
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Support responsif
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Harga bersahabat
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Scroll indicator (dekoratif saja -> aria-hidden) -->
                        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-neutral-content/70"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </div>
                    </div>
                </section>

                <div class="max-w-7xl mx-auto px-5">
                    <div class="border-t border-base-300"></div>
                </div>

                {{-- ============================================================
                     SECTION ARTIKEL
                     FIX: scroll-mt-32 ditambahkan supaya saat user klik anchor
                     link (#artikel dari nav), bagian atas section tidak
                     ketutup header yang position:fixed.
                ============================================================ --}}
                <section id="artikel"
                    class="max-w-7xl mx-auto px-5 py-20 md:py-24 border-t border-base-300 scroll-mt-32">
                    <div class="mb-14">
                        <!-- Catatan: class "eyebrow" bukan utility Tailwind/daisyUI bawaan,
                             pastikan sudah didefinisikan di CSS/tema kamu (mis. resources/css/app.css).
                             Begitu juga "font-display" — perlu di-extend di tailwind config
                             (font-mono sudah bawaan Tailwind, tidak perlu extend). -->
                        <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                            Publikasi & Tinjauan Teknis
                        </div>
                        <h2 class="font-display text-3xl md:text-4xl font-medium tracking-tight">Catatan dari lapangan
                        </h2>
                    </div>

                    <!-- Featured Article Card -->
                    <article class="card lg:card-side border border-base-300 bg-base-100 p-4 mb-16 shadow-sm">
                        <figure class="lg:w-1/2 h-64 lg:h-auto bg-base-300 rounded-box overflow-hidden">
                            <!-- FIX: loading="lazy" + decoding="async" pada gambar di bawah fold
                                 untuk mempercepat initial page load -->
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1000&auto=format&fit=crop"
                                alt="Ilustrasi layar kode pemrograman" class="w-full h-full object-cover"
                                loading="lazy" decoding="async" />
                        </figure>
                        <div class="card-body lg:w-1/2 justify-center p-6 lg:p-10">
                            <div class="eyebrow flex items-center gap-2 mb-4 text-secondary">
                                <span class="badge badge-secondary badge-xs" aria-hidden="true"></span>
                                Studi Kasus Terkini
                            </div>
                            <h3 class="card-title font-display text-2xl sm:text-3xl font-medium leading-tight mb-4">
                                Arsitektur Sistem E-Learning Berbasis Laravel & Tailwind CSS
                            </h3>
                            <p class="text-sm sm:text-base leading-relaxed mb-8 text-base-content/70">
                                Metodologi perancangan platform pembelajaran interaktif yang berfokus pada
                                skalabilitas, keamanan data siswa, dan responsivitas antarmuka.
                            </p>
                            <div class="card-actions flex items-center justify-between mt-auto">
                                <a href="#"
                                    class="link link-primary no-underline hover:underline text-sm font-semibold flex items-center gap-2 group">
                                    Baca laporan lengkap
                                    <span class="group-hover:translate-x-1 transition-transform"
                                        aria-hidden="true">→</span>
                                </a>
                                <span class="font-mono text-xs text-base-content/50">12 MENIT BACA</span>
                            </div>
                        </div>
                    </article>

                    <!-- Grid 3 Artikel -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-12">
                        <article class="group">
                            <div class="font-mono text-[11px] mb-3 text-secondary">MANAJEMEN PROYEK</div>
                            <h3
                                class="font-display text-xl font-medium leading-snug mb-3 group-hover:text-primary transition-colors">
                                Strategi Akuisisi Klien B2B dalam Industri Lepas
                            </h3>
                            <p class="text-sm leading-relaxed mb-6 text-base-content/70">
                                Menyusun proposal teknis berorientasi nilai bisnis untuk memenangkan tender
                                proyek perangkat lunak.
                            </p>
                            <div class="pt-4 border-t border-base-300 font-mono text-[11px] text-base-content/50">10
                                AGUSTUS 2026</div>
                        </article>

                        <article class="group">
                            <div class="font-mono text-[11px] mb-3 text-secondary">KAJIAN EDUKASI</div>
                            <h3
                                class="font-display text-xl font-medium leading-snug mb-3 group-hover:text-primary transition-colors">
                                Implementasi Gamifikasi pada Kurikulum Pemrograman
                            </h3>
                            <p class="text-sm leading-relaxed mb-6 text-base-content/70">
                                Efektivitas mekanika permainan terapan dalam meningkatkan retensi dan
                                partisipasi siswa.
                            </p>
                            <div class="pt-4 border-t border-base-300 font-mono text-[11px] text-base-content/50">28
                                JULI 2026</div>
                        </article>

                        <article class="group">
                            <div class="font-mono text-[11px] mb-3 text-secondary">TEKNIS PENGEMBANGAN</div>
                            <h3
                                class="font-display text-xl font-medium leading-snug mb-3 group-hover:text-primary transition-colors">
                                Integrasi Pihak Ketiga via REST API pada Ekosistem Laravel
                            </h3>
                            <p class="text-sm leading-relaxed mb-6 text-base-content/70">
                                Praktik terbaik mengonsumsi layanan eksternal untuk stabilitas dan keamanan
                                pertukaran data.
                            </p>
                            <div class="pt-4 border-t border-base-300 font-mono text-[11px] text-base-content/50">15
                                JULI 2026</div>
                        </article>
                    </div>

                    <div class="mt-16 flex justify-center">
                        <a href="#" class="btn btn-outline btn-neutral px-7">
                            Tinjau indeks artikel lengkap
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </section>

                {{-- ============================================================
                     SECTION LAYANAN
                     FIX: scroll-mt-32 di section, sama alasannya dengan di atas.
                ============================================================ --}}
                <section id="layanan" class="bg-base-100 scroll-mt-32">
                    <div class="max-w-7xl mx-auto px-5 py-20 md:py-24">
                        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-14">
                            <div>
                                <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                                    Silabus Layanan
                                </div>
                                <h2 class="font-display text-3xl md:text-4xl font-medium tracking-tight">Apa yang
                                    saya kerjakan</h2>
                            </div>
                            <p class="text-sm max-w-sm leading-relaxed text-base-content/70">
                                Tiga bidang inti yang disusun seperti kurikulum — dari fondasi teknis hingga
                                strategi implementasi di lapangan.
                            </p>
                        </div>

                        <div class="divide-y divide-base-300 border-y border-base-300">
                            <div
                                class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-8 py-8 md:py-10 items-baseline">
                                <div class="md:col-span-2 font-mono text-xs text-secondary tracking-wide">§ 01</div>
                                <h3
                                    class="md:col-span-4 font-display text-xl md:text-2xl font-medium text-primary group-hover:text-secondary transition-colors">
                                    Rekayasa Web Berkinerja Tinggi
                                </h3>
                                <p class="md:col-span-5 text-sm leading-relaxed text-base-content/70">
                                    Pengembangan sistem berbasis web — ERP, e-learning, company profile —
                                    menggunakan Laravel, Vue, dan Tailwind CSS sebagai fondasi.
                                </p>
                                <div
                                    class="md:col-span-1 hidden md:block text-right font-mono text-xs text-base-content/50">
                                    01</div>
                            </div>

                            <div
                                class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-8 py-8 md:py-10 items-baseline">
                                <div class="md:col-span-2 font-mono text-xs text-secondary tracking-wide">§ 02</div>
                                <h3
                                    class="md:col-span-4 font-display text-xl md:text-2xl font-medium text-primary group-hover:text-secondary transition-colors">
                                    Konsultasi Transformasi Digital
                                </h3>
                                <p class="md:col-span-5 text-sm leading-relaxed text-base-content/70">
                                    Pendampingan strategis bagi sekolah dan instansi dalam mengimplementasikan
                                    infrastruktur TI serta digitalisasi administrasi.
                                </p>
                                <div
                                    class="md:col-span-1 hidden md:block text-right font-mono text-xs text-base-content/50">
                                    02</div>
                            </div>

                            <div
                                class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-8 py-8 md:py-10 items-baseline">
                                <div class="md:col-span-2 font-mono text-xs text-secondary tracking-wide">§ 03</div>
                                <h3
                                    class="md:col-span-4 font-display text-xl md:text-2xl font-medium text-primary group-hover:text-secondary transition-colors">
                                    Desain Antarmuka (UI/UX)
                                </h3>
                                <p class="md:col-span-5 text-sm leading-relaxed text-base-content/70">
                                    Merancang hierarki visual dan pengalaman pengguna yang intuitif — fungsional
                                    sekaligus estetis pada setiap titik interaksi.
                                </p>
                                <div
                                    class="md:col-span-1 hidden md:block text-right font-mono text-xs text-base-content/50">
                                    03</div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- ============================================================
                     SECTION PORTOFOLIO
                ============================================================ --}}
                <section id="portofolio"
                    class="max-w-7xl mx-auto px-5 py-20 md:py-24 border-t border-base-300 scroll-mt-32">
                    <div class="flex flex-col md:flex-row justify-between items-end mb-14 gap-4">
                        <div class="max-w-xl">
                            <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                                Katalog Karya
                            </div>
                            <h2 class="font-display text-3xl md:text-4xl font-medium tracking-tight">Karya
                                terselesaikan</h2>
                        </div>
                        <a href="#"
                            class="link link-primary no-underline hover:underline text-sm font-semibold flex items-center gap-2 group">
                            Lihat seluruh portofolio
                            <span class="group-hover:translate-x-1 transition-transform" aria-hidden="true">→</span>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-16">
                        <!-- Project 1 -->
                        <div class="group cursor-pointer">
                            <div class="relative overflow-hidden border border-base-300 mb-5 bg-base-300 rounded-box">
                                <span class="badge badge-neutral absolute top-3 left-3 z-10 font-mono text-[11px]">FIG.
                                    01</span>
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop"
                                    alt="Tampilan dashboard sistem LMS" class="w-full h-64 object-cover"
                                    loading="lazy" decoding="async" />
                            </div>
                            <div class="flex gap-2 mb-3">
                                <span class="badge badge-outline badge-secondary font-mono text-[11px]">LARAVEL</span>
                                <span class="badge badge-outline badge-secondary font-mono text-[11px]">LIVEWIRE</span>
                            </div>
                            <h3
                                class="font-display text-2xl font-medium mb-2 group-hover:text-primary transition-colors">
                                Sistem Manajemen Pembelajaran Terpadu
                            </h3>
                            <p class="text-sm leading-relaxed text-base-content/70">
                                Platform e-learning kustom untuk institusi pendidikan dengan pemantauan
                                akademik secara real-time.
                            </p>
                        </div>

                        <!-- Project 2 -->
                        <div class="group cursor-pointer md:mt-14">
                            <div class="relative overflow-hidden border border-base-300 mb-5 bg-base-300 rounded-box">
                                <span class="badge badge-neutral absolute top-3 left-3 z-10 font-mono text-[11px]">FIG.
                                    02</span>
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop"
                                    alt="Tampilan antarmuka platform e-commerce" class="w-full h-64 object-cover"
                                    loading="lazy" decoding="async" />
                            </div>
                            <div class="flex gap-2 mb-3">
                                <span class="badge badge-outline badge-secondary font-mono text-[11px]">VUE</span>
                                <span class="badge badge-outline badge-secondary font-mono text-[11px]">TAILWIND</span>
                            </div>
                            <h3
                                class="font-display text-2xl font-medium mb-2 group-hover:text-primary transition-colors">
                                Platform E-Commerce B2B Skala Menengah
                            </h3>
                            <p class="text-sm leading-relaxed text-base-content/70">
                                Aplikasi penjualan grosir berbasis web dengan integrasi payment gateway
                                otomatis.
                            </p>
                        </div>
                    </div>
                </section>
            </main>

            {{-- ================================================================
                 FOOTER
                 FIX: form newsletter sebelumnya action="#" tanpa method/@csrf/name
                 pada input — submit tidak akan pernah sampai ke server Laravel.
            ================================================================ --}}
            <footer id="kontak" class="border-t border-base-300 bg-base-100 scroll-mt-32">
                <div class="max-w-7xl mx-auto px-5 py-16 border-b border-base-300">
                    <div class="max-w-2xl mb-8">
                        <div class="eyebrow mb-3 text-secondary">Buletin</div>
                        <h3 class="font-display text-2xl md:text-3xl font-medium mb-3">Berlangganan catatan
                            profesional</h3>
                        <p class="text-sm leading-relaxed text-base-content/70">
                            Pembaruan berkala mengenai tren rekayasa web, wawasan edukasi teknologi, dan
                            studi kasus eksklusif — langsung ke kotak masuk Anda.
                        </p>
                    </div>
                    {{-- Sesuaikan nama route 'newsletter.subscribe' dengan route yang benar-benar
                         kamu daftarkan di routes/web.php. Ganti action="#" lama karena itu
                         hanya reload halaman tanpa mengirim data apa pun. --}}
                    @if (Route::has('newsletter.subscribe'))
                        <form class="join max-w-md" method="POST" action="{{ route('newsletter.subscribe') }}">
                        @else
                            <form class="join max-w-md" method="POST" action="#">
                    @endif
                    @csrf
                    <input type="email" name="email" placeholder="Alamat surel resmi Anda"
                        class="input input-bordered join-item w-full focus:outline-none" required />
                    <button type="submit" class="btn btn-primary join-item font-semibold">Daftar</button>
                    </form>
                </div>

                <div class="max-w-7xl mx-auto px-5 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                    <div class="lg:col-span-1">
                        <a href="/" class="font-display text-xl font-semibold tracking-tight">
                            {{ config('app.name', 'Ahmad — Studi & Studio') }}
                        </a>
                        <p class="text-sm mt-5 leading-relaxed text-base-content/70">
                            Solusi digital yang terukur dan elegan — mendukung akselerasi digitalisasi
                            bisnis dan pendidikan masa kini.
                        </p>
                        <div class="flex gap-5 mt-6">
                            <a href="#" aria-label="LinkedIn"
                                class="text-base-content/60 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="GitHub"
                                class="text-base-content/60 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div>
                        <h4 class="eyebrow mb-6 text-base-content/50">Peta Situs</h4>
                        <ul class="flex flex-col gap-3 text-sm font-medium">
                            <li><a href="#layanan" class="hover:text-primary transition-colors">Silabus Layanan</a>
                            </li>
                            <li><a href="#portofolio" class="hover:text-primary transition-colors">Katalog
                                    Portofolio</a></li>
                            <li><a href="#artikel" class="hover:text-primary transition-colors">Publikasi
                                    Terkini</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="eyebrow mb-6 text-base-content/50">Spesialisasi Teknis</h4>
                        <ul class="flex flex-col gap-3 text-sm font-medium text-base-content/70">
                            <li>Infrastruktur Web (Backend)</li>
                            <li>Antarmuka Interaktif (Frontend)</li>
                            <li>Integrasi Sistem Eksternal (API)</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="eyebrow mb-6 text-base-content/50">Inisiasi Kolaborasi</h4>
                        <ul class="flex flex-col gap-5 text-sm">
                            <li>
                                <span class="block font-semibold mb-1">Pertanyaan Umum & Bisnis</span>
                                <a href="mailto:kontak@ahmad.dev"
                                    class="link link-primary no-underline hover:underline font-medium">kontak@ahmad.dev</a>
                            </li>
                            <li>
                                <span class="block font-semibold mb-1">Status Ketersediaan</span>
                                <span class="font-medium flex items-center gap-2 text-primary">
                                    <span class="badge badge-primary badge-xs" aria-hidden="true"></span>
                                    Menerima Klien Baru (Remote Work)
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="max-w-7xl mx-auto px-5 py-6 border-t border-base-300 flex justify-between items-center text-xs font-mono text-base-content/50">
                    <p>© {{ date('Y') }} {{ config('app.name', 'Ahmad — Studi & Studio') }}. Seluruh hak cipta
                        dilindungi.</p>
                </div>
            </footer>

        </div>

        <!-- Sidebar drawer untuk mobile -->
        <div class="drawer-side z-[60]">
            <label for="mobile-drawer" aria-label="Tutup menu" class="drawer-overlay"></label>
            <ul class="menu bg-base-100 min-h-full w-72 p-4">
                <li class="mb-4">
                    <span class="text-xl font-bold px-2">{{ config('app.name') }}</span>
                </li>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li>
                    <details open>
                        <summary>Layanan</summary>
                        <ul>
                            <li><a href="#layanan-sekolah">Website Sekolah</a></li>
                            <li><a href="#layanan-bisnis">Website Bisnis</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="#portofolio">Portofolio</a></li>
                <li><a href="#kontak">Kontak</a></li>
                <li class="mt-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-block">Dashboard</a>
                    @else
                        <a href="#kontak" class="btn btn-primary btn-block">Hubungi Kami</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
