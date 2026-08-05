<x-layouts.app title="Blog & Publikasi"
    description="Kumpulan catatan teknis, jurnal rekayasa web, dan studi kasus pengembangan sistem.">
    @push('schema')
        <x-json-ld :data="[
            '@context' => 'https://schema.org',
            '@type' => 'Blog',
            'name' => 'Jurnal & Publikasi - ' . config('app.name'),
            'url' => route('articles.index'),
            'description' => 'Kumpulan catatan teknis, jurnal rekayasa web, dan studi kasus.',
        ]" />
    @endpush

    {{-- HEADER BLOG --}}
    <section class="max-w-7xl mx-auto px-5 pt-32 pb-12">
        <div class="max-w-3xl">
            <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">
                Publikasi & Tinjauan Teknis
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-medium tracking-tight mb-4">
                Jurnal, tutorial & catatan lapangan
            </h1>
            <p class="text-base md:text-lg text-base-content/70 leading-relaxed">
                Dokumentasi arsitektur perangkat lunak, eksplorasi teknologi web modern, serta strategi digitalisasi
                sistem.
            </p>
        </div>

        {{-- Filter Kategori & Pencarian --}}
        <div
            class="mt-10 pt-6 border-t border-base-300 flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-between">
            <div class="flex flex-wrap gap-2">
                <a href="#" class="btn btn-sm btn-primary font-mono text-xs">SEMUA</a>
                <a href="#" class="btn btn-sm btn-ghost border-base-300 font-mono text-xs">REKAYASA WEB</a>
                <a href="#" class="btn btn-sm btn-ghost border-base-300 font-mono text-xs">MANAJEMEN PROYEK</a>
                <a href="#" class="btn btn-sm btn-ghost border-base-300 font-mono text-xs">UI/UX</a>
            </div>

            <div class="form-control w-full sm:w-auto">
                <div class="relative">
                    <input type="text" placeholder="Cari artikel..."
                        class="input input-bordered input-sm w-full sm:w-64 pr-8 font-mono text-xs" />
                    <x-icon name="search"
                        class="h-4 w-4 absolute right-2.5 top-1/2 -translate-y-1/2 text-base-content/40" />
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION ARTIKEL UTAMA & GRID --}}
    <section class="max-w-7xl mx-auto px-5 pb-24">

        {{-- Featured Article Card (Model sama seperti di home.blade.php) --}}
        @if (isset($featuredArticle) || true)
            <article class="card lg:card-side border border-base-300 bg-base-100 p-4 mb-16 shadow-sm">
                <figure class="lg:w-1/2 h-64 lg:h-auto bg-base-300 rounded-box overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1000&auto=format&fit=crop"
                        alt="Ilustrasi layar kode pemrograman" class="w-full h-full object-cover" loading="lazy"
                        decoding="async" />
                </figure>
                <div class="card-body lg:w-1/2 justify-center p-6 lg:p-10">
                    <div
                        class="eyebrow flex items-center gap-2 mb-4 text-secondary font-mono text-xs uppercase tracking-wider">
                        <span class="badge badge-secondary badge-xs" aria-hidden="true"></span>
                        ARTIKEL UNGGULAN
                    </div>
                    <h2 class="card-title font-display text-2xl sm:text-3xl font-medium leading-tight mb-4">
                        <a href="{{ route('articles.show', 1) }}" class="hover:text-primary transition-colors">
                            Arsitektur Sistem E-Learning Berbasis Laravel & Tailwind CSS
                        </a>
                    </h2>
                    <p class="text-sm sm:text-base leading-relaxed mb-8 text-base-content/70">
                        Metodologi perancangan platform pembelajaran interaktif yang berfokus pada skalabilitas,
                        keamanan data siswa, dan responsivitas antarmuka.
                    </p>
                    <div class="card-actions flex items-center justify-between mt-auto pt-4 border-t border-base-300">
                        <a href="{{ route('articles.show', 1) }}"
                            class="link link-primary no-underline hover:underline text-sm font-semibold flex items-center gap-2 group">
                            Baca artikel selengkapnya
                            <x-icon name="arrow-right" class="h-4 w-4 group-hover:translate-x-1 transition-transform" />
                        </a>
                        <span class="font-mono text-xs text-base-content/50">12 MENIT BACA</span>
                    </div>
                </div>
            </article>
        @endif

        {{-- Grid Daftar Artikel --}}
        @php
            $articles = $articles ?? [
                [
                    'id' => 1,
                    'category' => 'MANAJEMEN PROYEK',
                    'title' => 'Strategi Akuisisi Klien B2B dalam Industri Lepas',
                    'desc' =>
                        'Menyusun proposal teknis berorientasi nilai bisnis untuk memenangkan tender proyek perangkat lunak.',
                    'date' => '10 AGUSTUS 2026',
                    'read_time' => '5 MENIT BACA',
                ],
                [
                    'id' => 2,
                    'category' => 'KAJIAN EDUKASI',
                    'title' => 'Implementasi Gamifikasi pada Kurikulum Pemrograman',
                    'desc' =>
                        'Efektivitas mekanika permainan terapan dalam meningkatkan retensi dan partisipasi siswa.',
                    'date' => '28 JULI 2026',
                    'read_time' => '7 MENIT BACA',
                ],
                [
                    'id' => 3,
                    'category' => 'TEKNIS PENGEMBANGAN',
                    'title' => 'Integrasi Pihak Ketiga via REST API pada Ekosistem Laravel',
                    'desc' =>
                        'Praktik terbaik mengonsumsi layanan eksternal untuk stabilitas dan keamanan pertukaran data.',
                    'date' => '15 JULI 2026',
                    'read_time' => '8 MENIT BACA',
                ],
                [
                    'id' => 4,
                    'category' => 'DESAIN UI/UX',
                    'title' => 'Prinsip Hierarki Visual dalam Merancang Dashboard Admin',
                    'desc' =>
                        'Meminimalisir beban kognitif pengguna melalui penataan grid dan kontras tipografi yang tepat.',
                    'date' => '02 JULI 2026',
                    'read_time' => '4 MENIT BACA',
                ],
                [
                    'id' => 5,
                    'category' => 'REKAYASA WEB',
                    'title' => 'Mengoptimalkan Performa Query Eloquent pada Skala Besar',
                    'desc' => 'Teknik eager loading, indexing database, dan caching strategi untuk aplikasi Laravel.',
                    'date' => '20 JUNI 2026',
                    'read_time' => '10 MENIT BACA',
                ],
                [
                    'id' => 6,
                    'category' => 'INFRASTRUKTUR',
                    'title' => 'Panduan Otomasi Deploy Laravel Menggunakan GitHub Actions',
                    'desc' =>
                        'Langkah praktis mengonfigurasi alur CI/CD dari repository hingga live production server.',
                    'date' => '05 JUNI 2026',
                    'read_time' => '6 MENIT BACA',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-12">
            @foreach ($articles as $article)
                <article class="group flex flex-col justify-between">
                    <div>
                        <div class="font-mono text-[11px] mb-3 text-secondary uppercase tracking-wider">
                            {{ $article['category'] }}
                        </div>
                        <h3
                            class="font-display text-xl font-medium leading-snug mb-3 group-hover:text-primary transition-colors">
                            <a href="{{ route('articles.show', $article['id']) }}">
                                {{ $article['title'] }}
                            </a>
                        </h3>
                        <p class="text-sm leading-relaxed mb-6 text-base-content/70">
                            {{ $article['desc'] }}
                        </p>
                    </div>
                    <div
                        class="pt-4 border-t border-base-300 font-mono text-[11px] text-base-content/50 flex justify-between items-center">
                        <span>{{ $article['date'] }}</span>
                        <span>{{ $article['read_time'] }}</span>
                    </div>
                </article>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-16 flex justify-center">
            <div class="join border border-base-300">
                <button class="join-item btn btn-sm btn-ghost font-mono text-xs">« SEBELUMNYA</button>
                <button class="join-item btn btn-sm btn-active font-mono text-xs">1</button>
                <button class="join-item btn btn-sm btn-ghost font-mono text-xs">2</button>
                <button class="join-item btn btn-sm btn-ghost font-mono text-xs">SELANJUTNYA »</button>
            </div>
        </div>
    </section>
</x-layouts.app>
