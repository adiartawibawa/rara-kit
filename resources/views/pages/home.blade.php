<x-layouts.app title="Beranda" description="Selamat datang di platform kami.">
    @push('schema')
        <x-json-ld :data="[
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => config('app.name'),
            'url' => url('/'),
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => url('/search?q={search_term_string}'),
                'query-input' => 'required name=search_term_string',
            ],
        ]" />
    @endpush

    {{-- HERO SECTION --}}
    <section id="beranda">
        <div class="hero min-h-screen relative overflow-hidden"
            style="background-image: url('https://images.unsplash.com/photo-1657970757741-c95fdb7da4d9?q=80&w=1171&auto=format&fit=crop');">
            <div class="hero-overlay bg-gradient-to-br from-primary/70 via-black/40 to-secondary/40"></div>

            <div class="hero-content text-center text-neutral-content px-4">
                <div class="max-w-2xl">
                    <h1 class="mb-5 text-4xl md:text-6xl font-bold leading-tight">
                        Wujudkan <span class="text-primary">Website Impian</span> Anda
                    </h1>

                    <p class="mb-8 text-base md:text-lg opacity-90 max-w-xl mx-auto">
                        Kami membantu sekolah, institusi, dan bisnis membangun kehadiran digital
                        yang profesional, cepat, dan mudah dikelola — tanpa ribet urusan teknis.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3 justify-center">
                        <a href="#kontak" class="btn btn-primary btn-lg">
                            Mulai Sekarang
                        </a>
                        <a href="#portofolio"
                            class="btn btn-outline btn-lg text-neutral-content border-neutral-content/50 hover:bg-neutral-content/10">
                            Lihat Portofolio
                        </a>
                    </div>

                    {{-- Highlight Features --}}
                    @php
                        $highlights = ['Dipercaya sekolah & institusi', 'Support responsif', 'Harga bersahabat'];
                    @endphp
                    <div class="mt-10 flex flex-wrap justify-center gap-6 text-sm opacity-80">
                        @foreach ($highlights as $highlight)
                            <div class="flex items-center gap-2">
                                <x-icon name="check" class="h-5 w-5 text-primary" aria-hidden="true" />
                                <span>{{ $highlight }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Scroll Down Indicator --}}
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce" aria-hidden="true">
                <x-icon name="arrow-down" class="h-6 w-6 text-neutral-content/70" />
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-5">
        <div class="border-t border-base-300"></div>
    </div>

    {{-- SECTION ARTIKEL --}}
    <section id="artikel" class="max-w-7xl mx-auto px-5 py-20 md:py-24 border-t border-base-300 scroll-mt-32">
        <div class="mb-14">
            <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                Publikasi & Tinjauan Teknis
            </div>
            <h2 class="font-display text-3xl md:text-4xl font-medium tracking-tight">
                Catatan dari lapangan
            </h2>
        </div>

        {{-- Featured Article Card --}}
        <article class="card lg:card-side border border-base-300 bg-base-100 p-4 mb-16 shadow-sm">
            <figure class="lg:w-1/2 h-64 lg:h-auto bg-base-300 rounded-box overflow-hidden">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1000&auto=format&fit=crop"
                    alt="Ilustrasi layar kode pemrograman" class="w-full h-full object-cover" loading="lazy"
                    decoding="async" />
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
                        <x-icon name="arrow-right" class="h-4 w-4 group-hover:translate-x-1 transition-transform"
                            aria-hidden="true" />
                    </a>
                    <span class="font-mono text-xs text-base-content/50">12 MENIT BACA</span>
                </div>
            </div>
        </article>

        {{-- Grid Artikel --}}
        @php
            $articles = [
                [
                    'category' => 'MANAJEMEN PROYEK',
                    'title' => 'Strategi Akuisisi Klien B2B dalam Industri Lepas',
                    'desc' =>
                        'Menyusun proposal teknis berorientasi nilai bisnis untuk memenangkan tender proyek perangkat lunak.',
                    'date' => '10 AGUSTUS 2026',
                ],
                [
                    'category' => 'KAJIAN EDUKASI',
                    'title' => 'Implementasi Gamifikasi pada Kurikulum Pemrograman',
                    'desc' =>
                        'Efektivitas mekanika permainan terapan dalam meningkatkan retensi dan partisipasi siswa.',
                    'date' => '28 JULI 2026',
                ],
                [
                    'category' => 'TEKNIS PENGEMBANGAN',
                    'title' => 'Integrasi Pihak Ketiga via REST API pada Ekosistem Laravel',
                    'desc' =>
                        'Praktik terbaik mengonsumsi layanan eksternal untuk stabilitas dan keamanan pertukaran data.',
                    'date' => '15 JULI 2026',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-12">
            @foreach ($articles as $article)
                <article class="group">
                    <div class="font-mono text-[11px] mb-3 text-secondary">{{ $article['category'] }}</div>
                    <h3
                        class="font-display text-xl font-medium leading-snug mb-3 group-hover:text-primary transition-colors">
                        {{ $article['title'] }}
                    </h3>
                    <p class="text-sm leading-relaxed mb-6 text-base-content/70">
                        {{ $article['desc'] }}
                    </p>
                    <div class="pt-4 border-t border-base-300 font-mono text-[11px] text-base-content/50">
                        {{ $article['date'] }}
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-16 flex justify-center">
            <a href="#" class="btn btn-outline btn-neutral px-7 gap-2">
                Tinjau indeks artikel lengkap
                <x-icon name="arrow-right" class="h-4 w-4" aria-hidden="true" />
            </a>
        </div>
    </section>

    {{-- SECTION LAYANAN --}}
    <section id="layanan" class="bg-base-100 scroll-mt-32">
        <div class="max-w-7xl mx-auto px-5 py-20 md:py-24">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-14">
                <div>
                    <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                        Silabus Layanan
                    </div>
                    <h2 class="font-display text-3xl md:text-4xl font-medium tracking-tight">
                        Apa yang saya kerjakan
                    </h2>
                </div>
                <p class="text-sm max-w-sm leading-relaxed text-base-content/70">
                    Tiga bidang inti yang disusun seperti kurikulum — dari fondasi teknis hingga
                    strategi implementasi di lapangan.
                </p>
            </div>

            @php
                $services = [
                    [
                        'num' => '§ 01',
                        'code' => '01',
                        'title' => 'Rekayasa Web Berkinerja Tinggi',
                        'desc' =>
                            'Pengembangan sistem berbasis web — ERP, e-learning, company profile — menggunakan Laravel, Vue, dan Tailwind CSS sebagai fondasi.',
                    ],
                    [
                        'num' => '§ 02',
                        'code' => '02',
                        'title' => 'Konsultasi Transformasi Digital',
                        'desc' =>
                            'Pendampingan strategis bagi sekolah dan instansi dalam mengimplementasikan infrastruktur TI serta digitalisasi administrasi.',
                    ],
                    [
                        'num' => '§ 03',
                        'code' => '03',
                        'title' => 'Desain Antarmuka (UI/UX)',
                        'desc' =>
                            'Merancang hierarki visual dan pengalaman pengguna yang intuitif — fungsional sekaligus estetis pada setiap titik interaksi.',
                    ],
                ];
            @endphp

            <div class="divide-y divide-base-300 border-y border-base-300">
                @foreach ($services as $service)
                    <div class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-8 py-8 md:py-10 items-baseline">
                        <div class="md:col-span-2 font-mono text-xs text-secondary tracking-wide">{{ $service['num'] }}
                        </div>
                        <h3
                            class="md:col-span-4 font-display text-xl md:text-2xl font-medium text-primary group-hover:text-secondary transition-colors">
                            {{ $service['title'] }}
                        </h3>
                        <p class="md:col-span-5 text-sm leading-relaxed text-base-content/70">
                            {{ $service['desc'] }}
                        </p>
                        <div class="md:col-span-1 hidden md:block text-right font-mono text-xs text-base-content/50">
                            {{ $service['code'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION PORTOFOLIO --}}
    <section id="portofolio" class="max-w-7xl mx-auto px-5 py-20 md:py-24 border-t border-base-300 scroll-mt-32">
        <div class="flex flex-col md:flex-row justify-between items-end mb-14 gap-4">
            <div class="max-w-xl">
                <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                    Katalog Karya
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-medium tracking-tight">
                    Karya terselesaikan
                </h2>
            </div>
            <a href="#"
                class="link link-primary no-underline hover:underline text-sm font-semibold flex items-center gap-2 group">
                Lihat seluruh portofolio
                <x-icon name="arrow-right" class="h-4 w-4 group-hover:translate-x-1 transition-transform"
                    aria-hidden="true" />
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-16">
            {{-- Project 1 --}}
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden border border-base-300 mb-5 bg-base-300 rounded-box">
                    <span class="badge badge-neutral absolute top-3 left-3 z-10 font-mono text-[11px]">FIG. 01</span>
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop"
                        alt="Tampilan dashboard sistem LMS" class="w-full h-64 object-cover" loading="lazy"
                        decoding="async" />
                </div>
                <div class="flex gap-2 mb-3">
                    <span class="badge badge-outline badge-secondary font-mono text-[11px]">LARAVEL</span>
                    <span class="badge badge-outline badge-secondary font-mono text-[11px]">LIVEWIRE</span>
                </div>
                <h3 class="font-display text-2xl font-medium mb-2 group-hover:text-primary transition-colors">
                    Sistem Manajemen Pembelajaran Terpadu
                </h3>
                <p class="text-sm leading-relaxed text-base-content/70">
                    Platform e-learning kustom untuk institusi pendidikan dengan pemantauan
                    akademik secara real-time.
                </p>
            </div>

            {{-- Project 2 --}}
            <div class="group cursor-pointer md:mt-14">
                <div class="relative overflow-hidden border border-base-300 mb-5 bg-base-300 rounded-box">
                    <span class="badge badge-neutral absolute top-3 left-3 z-10 font-mono text-[11px]">FIG. 02</span>
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop"
                        alt="Tampilan antarmuka platform e-commerce" class="w-full h-64 object-cover" loading="lazy"
                        decoding="async" />
                </div>
                <div class="flex gap-2 mb-3">
                    <span class="badge badge-outline badge-secondary font-mono text-[11px]">VUE</span>
                    <span class="badge badge-outline badge-secondary font-mono text-[11px]">TAILWIND</span>
                </div>
                <h3 class="font-display text-2xl font-medium mb-2 group-hover:text-primary transition-colors">
                    Platform E-Commerce B2B Skala Menengah
                </h3>
                <p class="text-sm leading-relaxed text-base-content/70">
                    Aplikasi penjualan grosir berbasis web dengan integrasi payment gateway otomatis.
                </p>
            </div>
        </div>
    </section>

    {{-- SECTION TESTIMONI --}}
    <section id="testimoni" class="bg-base-100 border-t border-base-300 scroll-mt-32">
        <div class="max-w-7xl mx-auto px-5 py-20 md:py-24">
            <div class="text-center max-w-xl mx-auto mb-14">
                <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                    Ulasan Klien
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-medium tracking-tight">
                    Apa kata mereka
                </h2>
            </div>

            @php
                $testimonials = [
                    [
                        'quote' =>
                            'Website sekolah kami menjadi jauh lebih cepat dan mudah diakses oleh wali murid. Dukungan teknisnya luar biasa ramah.',
                        'author' => 'Drs. H. Ahmad Fauzi',
                        'role' => 'Kepala Sekolah SMA Nusantara',
                        'avatar' => 'https://i.pravatar.cc/150?img=11',
                    ],
                    [
                        'quote' =>
                            'Proses pengerjaan transparan dan tepat waktu. Sistem inventory B2B yang dibuat sangat membantu efisiensi tim lapangan.',
                        'author' => 'Budi Santoso',
                        'role' => 'Direktur PT Cahaya Logistik',
                        'avatar' => 'https://i.pravatar.cc/150?img=33',
                    ],
                    [
                        'quote' =>
                            'Tampilan UI/UX modern dan sangat intuitif. Pengunjung portal berita kami naik 40% setelah migrasi tampilan baru.',
                        'author' => 'Siti Rahmawati',
                        'role' => 'Editor in Chief Media Edukasi',
                        'avatar' => 'https://i.pravatar.cc/150?img=47',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($testimonials as $item)
                    <div class="card bg-base-100 border border-base-300 p-6 shadow-sm flex flex-col justify-between">
                        <div class="mb-6">
                            <div class="flex gap-1 text-warning mb-4">
                                @for ($i = 0; $i < 5; $i++)
                                    <x-icon name="star" class="h-4 w-4 fill-current" aria-hidden="true" />
                                @endfor
                            </div>
                            <p class="text-sm italic leading-relaxed text-base-content/80">
                                "{{ $item['quote'] }}"
                            </p>
                        </div>
                        <div class="flex items-center gap-4 pt-4 border-t border-base-300">
                            <img src="{{ $item['avatar'] }}" alt="{{ $item['author'] }}"
                                class="w-10 h-10 rounded-full object-cover" />
                            <div>
                                <h4 class="font-medium text-sm">{{ $item['author'] }}</h4>
                                <span class="text-xs text-base-content/60">{{ $item['role'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION FAQ --}}
    <section id="faq" class="max-w-7xl mx-auto px-5 py-20 md:py-24 border-t border-base-300 scroll-mt-32">
        <div class="text-center max-w-xl mx-auto mb-14">
            <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                Pertanyaan Umum
            </div>
            <h2 class="font-display text-3xl md:text-4xl font-medium tracking-tight">
                Sering Ditanyakan
            </h2>
        </div>

        @php
            $faqs = [
                [
                    'q' => 'Berapa lama estimasi pengerjaan satu proyek website?',
                    'a' =>
                        'Waktu pengerjaan bervariasi mulai dari 1 hingga 4 minggu tergantung pada skala dan kompleksitas fitur yang dibutuhkan.',
                ],
                [
                    'q' => 'Apakah saya mendapatkan akses penuh untuk mengelola konten website?',
                    'a' =>
                        'Ya, kami menyediakan Content Management System (CMS) yang mudah digunakan beserta panduan teknis operasional.',
                ],
                [
                    'q' => 'Bagaimana jika terjadi masalah teknis setelah website selesai dibuat?',
                    'a' =>
                        'Setiap layanan mencakup masa garansi pemeliharaan teknis dan pembaruan sistem berkala selama 3-6 bulan pertama.',
                ],
                [
                    'q' => 'Apakah layanan sudah termasuk domain dan hosting?',
                    'a' =>
                        'Kami dapat membantu mengurus pendaftaran domain dan konfigurasi server hosting sesuai paket yang Anda pilih.',
                ],
            ];
        @endphp

        <div class="max-w-3xl mx-auto space-y-4">
            @foreach ($faqs as $faq)
                <div class="collapse collapse-plus bg-base-100 border border-base-300 rounded-box">
                    <input type="radio" name="faq-accordion" />
                    <div class="collapse-title font-medium text-base md:text-lg">
                        {{ $faq['q'] }}
                    </div>
                    <div class="collapse-content text-sm text-base-content/70 leading-relaxed">
                        <p>{{ $faq['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- SECTION KONTAK --}}
    <section id="kontak" class="bg-base-100 border-t border-base-300 scroll-mt-32">
        <div class="max-w-7xl mx-auto px-5 py-20 md:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                {{-- Info Kontak --}}
                <div class="lg:col-span-5">
                    <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                        Hubungi Kami
                    </div>
                    <h2 class="font-display text-3xl md:text-4xl font-medium tracking-tight mb-6">
                        Mari Diskusi Proyek Anda
                    </h2>
                    <p class="text-sm leading-relaxed text-base-content/70 mb-8">
                        Punya pertanyaan atau ingin mulai membangun sistem digital Anda? Kirimkan pesan atau
                        konsultasikan ide Anda bersama kami.
                    </p>

                    <div class="space-y-6 text-sm">
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-base-200 rounded-box text-primary">
                                <x-icon name="mail" class="h-5 w-5" />
                            </div>
                            <div>
                                <span class="block text-xs text-base-content/50 font-mono">EMAIL</span>
                                <a href="mailto:kontak@domain.com"
                                    class="font-medium hover:text-primary">kontak@domain.com</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-base-200 rounded-box text-primary">
                                <x-icon name="phone" class="h-5 w-5" />
                            </div>
                            <div>
                                <span class="block text-xs text-base-content/50 font-mono">WHATSAPP</span>
                                <a href="https://wa.me/6281234567890" class="font-medium hover:text-primary">+62
                                    812-3456-7890</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-base-200 rounded-box text-primary">
                                <x-icon name="map-pin" class="h-5 w-5" />
                            </div>
                            <div>
                                <span class="block text-xs text-base-content/50 font-mono">LOKASI</span>
                                <span class="font-medium">Jakarta & Bali, Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Formulir Kontak --}}
                <div class="lg:col-span-7">
                    <form action="#" method="POST"
                        class="card border border-base-300 p-6 md:p-8 bg-base-100 shadow-sm space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="form-control w-full">
                                <label class="label"><span
                                        class="label-text font-medium text-xs font-mono uppercase">Nama
                                        Lengkap</span></label>
                                <input type="text" name="name" placeholder="John Doe"
                                    class="input input-bordered w-full" required />
                            </div>
                            <div class="form-control w-full">
                                <label class="label"><span
                                        class="label-text font-medium text-xs font-mono uppercase">Email</span></label>
                                <input type="email" name="email" placeholder="nama@email.com"
                                    class="input input-bordered w-full" required />
                            </div>
                        </div>

                        <div class="form-control w-full">
                            <label class="label"><span
                                    class="label-text font-medium text-xs font-mono uppercase">Subjek / Jenis
                                    Layanan</span></label>
                            <select name="subject" class="select select-bordered w-full">
                                <option disabled selected>Pilih jenis layanan</option>
                                <option value="web">Rekayasa Web / Portal</option>
                                <option value="konsultasi">Konsultasi Digital</option>
                                <option value="uiux">Desain UI/UX</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="form-control w-full">
                            <label class="label"><span
                                    class="label-text font-medium text-xs font-mono uppercase">Pesan</span></label>
                            <textarea name="message" class="textarea textarea-bordered h-32"
                                placeholder="Jelaskan kebutuhan atau gambaran proyek Anda..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-full gap-2">
                            Kirim Pesan
                            <x-icon name="send" class="h-4 w-4" />
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
