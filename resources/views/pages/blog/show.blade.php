<x-layouts.app :title="$article['title'] ?? 'Arsitektur Sistem E-Learning Berbasis Laravel & Tailwind CSS'" :description="$article['excerpt'] ??
    'Metodologi perancangan platform pembelajaran interaktif yang berfokus pada skalabilitas dan performa.'">

    @push('schema')
        <x-json-ld :data="[
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => $article['title'] ?? 'Arsitektur Sistem E-Learning Berbasis Laravel & Tailwind CSS',
            'datePublished' => '2026-08-05',
            'author' => [
                '@type' => 'Person',
                'name' => 'Tim Pengembang',
            ],
        ]" />
    @endpush

    <article class="max-w-4xl mx-auto px-5 py-12 md:py-16">

        {{-- Breadcrumb Navigasi --}}
        <div class="mb-8">
            <a href="{{ route('articles.index') }}"
                class="inline-flex items-center gap-2 text-xs font-mono uppercase text-base-content/60 hover:text-primary transition-colors">
                <x-icon name="arrow-left" class="h-4 w-4" />
                Kembali ke Indeks Artikel
            </a>
        </div>

        {{-- Header Artikel --}}
        <header class="mb-10">
            <div
                class="flex flex-wrap items-center gap-3 font-mono text-xs text-secondary mb-4 uppercase tracking-wider">
                <span class="badge badge-outline badge-secondary font-mono text-[11px]">REKAYASA WEB</span>
                <span>•</span>
                <span>05 AGUSTUS 2026</span>
                <span>•</span>
                <span>12 MENIT BACA</span>
            </div>

            <h1 class="font-display text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight mb-6">
                Arsitektur Sistem E-Learning Berbasis Laravel & Tailwind CSS
            </h1>

            <p class="text-base sm:text-lg leading-relaxed text-base-content/70">
                Metodologi perancangan platform pembelajaran interaktif yang berfokus pada skalabilitas, keamanan data
                siswa, dan responsivitas antarmuka dalam jaringan sekolah.
            </p>

            {{-- Info Penulis --}}
            <div class="mt-8 pt-6 border-t border-base-300 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="https://i.pravatar.cc/150?img=11" alt="Penulis"
                        class="w-10 h-10 rounded-full object-cover border border-base-300" />
                    <div>
                        <h4 class="font-medium text-sm">Drs. H. Ahmad Fauzi</h4>
                        <span class="font-mono text-xs text-base-content/50">TIM TEKNIS & PENGEMBANG</span>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <button class="btn btn-circle btn-ghost btn-xs text-base-content/60" title="Bagikan">
                        <x-icon name="share-2" class="h-4 w-4" />
                    </button>
                </div>
            </div>
        </header>

        {{-- Cover Image --}}
        <figure class="border border-base-300 bg-base-300 rounded-box overflow-hidden mb-12">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1200&auto=format&fit=crop"
                alt="Tampilan antarmuka kode" class="w-full h-[320px] sm:h-[450px] object-cover" />
            <figcaption
                class="p-3 text-center font-mono text-xs text-base-content/60 border-t border-base-300 bg-base-100">
                FIG 01. Struktur direktori dan pengorganisasian modul dalam aplikasi E-Learning.
            </figcaption>
        </figure>

        {{-- Konten Utama (Body Article) --}}
        <div class="prose prose-neutral max-w-none text-base-content/80 leading-relaxed space-y-6 text-sm sm:text-base">
            <p>
                Dalam membangun infrastruktur sistem edukasi digital, tantangan utama yang dihadapi bukan sekadar
                menyajikan materi, melainkan bagaimana menjaga keandalan sistem saat diakses secara bersamaan oleh
                ribuan siswa saat ujian berlangsung.
            </p>

            <h2 class="font-display text-2xl font-medium text-base-content pt-4">1. Pendekatan Modular pada Backend</h2>
            <p>
                Dengan memanfaatkan kerangka kerja Laravel, struktur aplikasi dibagi menjadi beberapa domain terpisah:
                otentikasi pengguna, manajemen tugas, dan penilaian otomatis. Pembagian ini mempermudah pemeliharaan
                jangka panjang tanpa merusak komponen lainnya.
            </p>

            <div class="p-5 bg-base-200/50 border-l-2 border-primary rounded-r-box my-6">
                <p class="italic text-base-content/90 font-display text-base">
                    "Kecepatan muat halaman di bawah 1.5 detik adalah standar minimum untuk mencegah hilangnya fokus
                    siswa saat proses pembelajaran jarak jauh."
                </p>
            </div>

            <h2 class="font-display text-2xl font-medium text-base-content pt-4">2. Antarmuka yang Efisien dengan
                Tailwind CSS</h2>
            <p>
                Penggunaan utilitas CSS atomik dari Tailwind memungkinkan kita membangun komponen antarmuka yang sangat
                ringan. Tanpa beban pustaka JavaScript yang berat, peramban dapat merender tampilan dengan sangat cepat
                bahkan pada perangkat ponsel dengan spesifikasi rendah.
            </p>

            <ul class="list-disc list-inside space-y-2 text-base-content/70">
                <li>Pemanfaatan sistem caching database menggunakan Redis.</li>
                <li>Optimasi aset gambar dan penggunaan format modern WebP.</li>
                <li>Pengurangan request HTTP dengan arsitektur SPA parsial.</li>
            </ul>
        </div>

        {{-- Tagging & Tombol Atas --}}
        <footer
            class="mt-12 pt-6 border-t border-base-300 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <span class="font-mono text-xs text-base-content/50 uppercase">TAGS:</span>
                <span class="badge badge-outline badge-secondary font-mono text-[11px]">LARAVEL</span>
                <span class="badge badge-outline badge-secondary font-mono text-[11px]">TAILWIND</span>
                <span class="badge badge-outline badge-secondary font-mono text-[11px]">E-LEARNING</span>
            </div>

            <a href="#beranda" class="btn btn-xs btn-ghost font-mono text-xs">
                KEMBALI KE ATAS ↑
            </a>
        </footer>

        {{-- SECTION KOMENTAR & DISKUSI --}}
        <section class="mt-16 pt-12 border-t border-base-300">
            <div class="eyebrow mb-2 text-secondary font-mono text-xs uppercase tracking-wider">
                DISKUSI & TANGGAPAN
            </div>
            <h3 class="font-display text-2xl font-medium tracking-tight mb-8">
                Komentar (2)
            </h3>

            {{-- Form Tambah Komentar --}}
            <form action="#" method="POST" class="mb-12 border border-base-300 p-6 rounded-box bg-base-100">
                @csrf
                <h4 class="font-display text-base font-medium mb-4">Tinggalkan Pertanyaan atau Tanggapan</h4>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                    <div class="form-control">
                        <label class="label py-1">
                            <span class="label-text font-mono text-xs uppercase">Nama Lengkap *</span>
                        </label>
                        <input type="text" placeholder="Masukkan nama..."
                            class="input input-bordered input-sm font-mono text-xs w-full" required />
                    </div>
                    <div class="form-control">
                        <label class="label py-1">
                            <span class="label-text font-mono text-xs uppercase">Alamat Email *</span>
                        </label>
                        <input type="email" placeholder="nama@email.com"
                            class="input input-bordered input-sm font-mono text-xs w-full" required />
                    </div>
                </div>

                <div class="form-control mb-4">
                    <label class="label py-1">
                        <span class="label-text font-mono text-xs uppercase">Pesan Komentar *</span>
                    </label>
                    <textarea class="textarea textarea-bordered h-28 font-sans text-sm w-full leading-relaxed"
                        placeholder="Tulis komentar atau opini Anda mengenai topik artikel di atas..." required></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary btn-sm font-mono text-xs">
                        KIRIM KOMENTAR
                    </button>
                </div>
            </form>

            {{-- Daftar Komentar --}}
            <div class="space-y-6">

                {{-- Komentar 1 --}}
                <div class="border border-base-300 p-5 rounded-box bg-base-100">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <div class="avatar placeholder">
                                <div
                                    class="bg-neutral text-neutral-content rounded-full w-8 h-8 font-mono text-xs flex items-center justify-center">
                                    <span>BP</span>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-medium text-sm">Budi Pratama</h5>
                                <span class="font-mono text-[11px] text-base-content/50">06 AGUSTUS 2026 • 10:15
                                    WITA</span>
                            </div>
                        </div>
                        <button class="btn btn-xs btn-ghost border-base-300 font-mono text-[11px]">BALAS</button>
                    </div>
                    <p class="text-sm text-base-content/80 leading-relaxed pl-11">
                        Penjelasan tentang modularisasi di backend sangat ringkas dan padat. Apakah ada pustaka khusus
                        yang Anda rekomendasikan untuk menangani caching Redis pada skala puluhan ribu pengguna
                        bersamaan?
                    </p>
                </div>

                {{-- Komentar 2 (Dengan Balasan Penulis) --}}
                <div class="border border-base-300 p-5 rounded-box bg-base-100">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <div class="avatar placeholder">
                                <div
                                    class="bg-primary text-primary-content rounded-full w-8 h-8 font-mono text-xs flex items-center justify-center">
                                    <span>SR</span>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-medium text-sm">Siti Rahmawati</h5>
                                <span class="font-mono text-[11px] text-base-content/50">06 AGUSTUS 2026 • 11:30
                                    WITA</span>
                            </div>
                        </div>
                        <button class="btn btn-xs btn-ghost border-base-300 font-mono text-[11px]">BALAS</button>
                    </div>
                    <p class="text-sm text-base-content/80 leading-relaxed pl-11">
                        Sangat menginspirasi. Penggunaan Tailwind CSS terbukti ampuh mempercepat loading time terutama
                        di daerah dengan koneksi internet terbatas.
                    </p>

                    {{-- Balasan Penulis (Nested Reply) --}}
                    <div class="ml-4 sm:ml-11 mt-4 pt-4 border-t border-base-300">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-3">
                                <img src="https://i.pravatar.cc/150?img=11" alt="Penulis"
                                    class="w-7 h-7 rounded-full object-cover border border-base-300" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h5 class="font-medium text-sm">Drs. H. Ahmad Fauzi</h5>
                                        <span class="badge badge-secondary badge-xs font-mono text-[9px]">PENULIS</span>
                                    </div>
                                    <span class="font-mono text-[10px] text-base-content/50">06 AGUSTUS 2026 • 12:05
                                        WITA</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-base-content/80 leading-relaxed pl-10">
                            Tepat sekali, Mbak Siti. Eliminasi CSS yang tidak terpakai (purging) saat build production
                            menjadi kunci utama efisiensinya.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        {{-- SECTION ARTIKEL TERKAIT --}}
        <section class="mt-20 pt-12 border-t border-base-300">
            <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                Rekomendasi Lanjutan
            </div>
            <h3 class="font-display text-2xl font-medium tracking-tight mb-8">
                Artikel terkait lainnya
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <article
                    class="group border border-base-300 p-5 rounded-box bg-base-100 flex flex-col justify-between">
                    <div>
                        <div class="font-mono text-[11px] mb-2 text-secondary">TEKNIS PENGEMBANGAN</div>
                        <h4
                            class="font-display text-lg font-medium leading-snug mb-2 group-hover:text-primary transition-colors">
                            <a href="#">Integrasi Pihak Ketiga via REST API pada Ekosistem Laravel</a>
                        </h4>
                        <p class="text-xs text-base-content/70 line-clamp-2 leading-relaxed mb-4">
                            Praktik terbaik mengonsumsi layanan eksternal untuk stabilitas pertukaran data.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-base-300 font-mono text-[11px] text-base-content/50">
                        15 JULI 2026
                    </div>
                </article>

                <article
                    class="group border border-base-300 p-5 rounded-box bg-base-100 flex flex-col justify-between">
                    <div>
                        <div class="font-mono text-[11px] mb-2 text-secondary">DESAIN UI/UX</div>
                        <h4
                            class="font-display text-lg font-medium leading-snug mb-2 group-hover:text-primary transition-colors">
                            <a href="#">Prinsip Hierarki Visual dalam Merancang Dashboard Admin</a>
                        </h4>
                        <p class="text-xs text-base-content/70 line-clamp-2 leading-relaxed mb-4">
                            Meminimalisir beban kognitif pengguna melalui penataan grid yang tepat.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-base-300 font-mono text-[11px] text-base-content/50">
                        02 JULI 2026
                    </div>
                </article>
            </div>
        </section>

    </article>
</x-layouts.app>
