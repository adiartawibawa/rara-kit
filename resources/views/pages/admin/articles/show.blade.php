<x-layouts.admin title="Detail Artikel - {{ $post->title ?? 'Panduan Membangun CMS Modern' }}">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('articles.index') }}" class="btn btn-circle btn-ghost btn-sm" title="Kembali ke Daftar">
                    <x-icon name="arrow-left" class="size-5" />
                </a>
                <div>
                    <div class="flex items-center gap-2">
                        <h1 class="text-xl sm:text-2xl font-bold text-base-content line-clamp-1">
                            {{ $post->title ?? 'Panduan Membangun CMS Modern Menggunakan Laravel 11 & DaisyUI' }}
                        </h1>
                        <span class="badge badge-success badge-sm text-white shrink-0">Terbit</span>
                    </div>
                    <p class="text-xs text-base-content/70">Dipublikasikan pada 03 Ags 2026 • 14:20 WIB</p>
                </div>
            </div>

            {{-- Tombol Aksi Utama --}}
            <div class="flex items-center gap-2 self-end sm:self-auto shrink-0">
                <a href="#" target="_blank" class="btn btn-outline btn-sm gap-2">
                    <x-icon name="external-link" class="size-4" />
                    Lihat di Web
                </a>
                <a href="#" class="btn btn-info btn-sm text-white gap-2">
                    <x-icon name="pencil" class="size-4" />
                    Edit Artikel
                </a>
                <button class="btn btn-error btn-outline btn-sm" title="Hapus Artikel">
                    <x-icon name="trash" class="size-4" />
                </button>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- 1. RINGKASAN STATISTIK (STAT CARDS) --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            {{-- Views --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-primary/10 text-primary rounded-xl">
                    <x-icon name="eye" class="size-6" />
                </div>
                <div>
                    <div class="text-2xl font-black text-base-content">2,420</div>
                    <div class="text-xs text-base-content/60 font-medium">Total Pembaca</div>
                </div>
            </div>

            {{-- Komentar --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-secondary/10 text-secondary rounded-xl">
                    <x-icon name="messages-square" class="size-6" />
                </div>
                <div>
                    <div class="text-2xl font-black text-base-content">12</div>
                    <div class="text-xs text-base-content/60 font-medium">Komentar</div>
                </div>
            </div>

            {{-- Suka / Likes --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-error/10 text-error rounded-xl">
                    <x-icon name="heart" class="size-6" />
                </div>
                <div>
                    <div class="text-2xl font-black text-base-content">184</div>
                    <div class="text-xs text-base-content/60 font-medium">Menyukai</div>
                </div>
            </div>

            {{-- Waktu Baca --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-accent/10 text-accent rounded-xl">
                    <x-icon name="clock" class="size-6" />
                </div>
                <div>
                    <div class="text-2xl font-black text-base-content">5 Menit</div>
                    <div class="text-xs text-base-content/60 font-medium">Est. Waktu Baca</div>
                </div>
            </div>
        </div>


        {{-- GRID UTAMA --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- KOLOM KIRI: PRATINJAU KONTEN & INTERAKSI PENGUNJUNG --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- PRATINJAU KONTEN ARTIKEL --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm overflow-hidden">

                    {{-- Featured Image Header --}}
                    <div class="w-full h-64 sm:h-80 bg-base-200 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800"
                            alt="Featured Image" class="w-full h-full object-cover" />
                    </div>

                    <div class="card-body p-6 space-y-6">

                        {{-- Excerpt Box --}}
                        <div
                            class="p-4 bg-base-200/50 rounded-xl border-l-4 border-primary text-sm italic text-base-content/80">
                            "Langkah demi langkah merancang CMS yang fleksibel, responsif, dan mudah dikustomisasi dari
                            awal hingga siap rilis ke server produksi."
                        </div>

                        {{-- Isi Konten Utama (Rendered HTML) --}}
                        <div class="prose max-w-none text-base-content/90 leading-relaxed space-y-4">
                            <p>
                                Dalam era pengembangan web modern saat ini, memiliki sistem manajemen konten (CMS) yang
                                cepat dan mudah dipelihara adalah aset yang sangat berharga. Laravel 11 menghadirkan
                                struktur baru yang jauh lebih ringan dan efisien.
                            </p>
                            <h3 class="text-lg font-bold text-base-content">Mengapa Menggunakan DaisyUI?</h3>
                            <p>
                                DaisyUI menambahkan class utilitas komponen di atas Tailwind CSS. Hal ini memungkinkan
                                kita membuat antarmuka bersih tanpa perlu menulis ratusan Utility Class yang panjang
                                secara berulang.
                            </p>
                            <pre class="bg-base-300 p-4 rounded-lg font-mono text-xs overflow-x-auto">composer create-project laravel/laravel cms-app</pre>
                        </div>

                    </div>
                </div>

                {{-- INTERAKSI PENGUNJUNG (MODERASI KOMENTAR) --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-6 space-y-4">

                        <div class="flex items-center justify-between pb-3 border-b border-base-200">
                            <h3 class="font-bold text-lg flex items-center gap-2">
                                <x-icon name="messages-square" class="size-5 text-primary" />
                                Komentar Pengunjung (12)
                            </h3>
                            <div class="tabs tabs-boxed bg-base-200/60 p-1 text-xs">
                                <a class="tab tab-active">Semua</a>
                                <a class="tab">Perlu Moderasi <span
                                        class="badge badge-warning badge-xs ml-1">2</span></a>
                            </div>
                        </div>

                        {{-- List Komentar --}}
                        <div class="space-y-4 divide-y divide-base-200">

                            {{-- Item Komentar 1 --}}
                            <div class="pt-4 first:pt-0 flex items-start gap-4">
                                <div class="avatar shrink-0">
                                    <div class="w-10 h-10 rounded-full">
                                        <img src="https://i.pravatar.cc/100?img=11" alt="Avatar" />
                                    </div>
                                </div>
                                <div class="flex-1 space-y-1">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <span class="font-bold text-sm text-base-content">Rian Prasetya</span>
                                            <span class="text-xs text-base-content/50">• 2 jam lalu</span>
                                        </div>
                                        <span class="badge badge-success badge-xs text-white">Disetujui</span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-base-content/80">
                                        Artikel yang sangat membantu! Apakah ada tutorial lanjutan untuk konfigurasi
                                        Role & Permission-nya?
                                    </p>

                                    {{-- Aksi Komentar --}}
                                    <div class="flex items-center gap-3 pt-2 text-xs">
                                        <button class="text-primary hover:underline font-medium">Balas</button>
                                        <button class="text-warning hover:underline font-medium">Tandai Spam</button>
                                        <button class="text-error hover:underline font-medium">Hapus</button>
                                    </div>
                                </div>
                            </div>

                            {{-- Item Komentar 2 (Perlu Moderasi) --}}
                            <div class="pt-4 flex items-start gap-4">
                                <div class="avatar shrink-0">
                                    <div class="w-10 h-10 rounded-full">
                                        <img src="https://i.pravatar.cc/100?img=5" alt="Avatar" />
                                    </div>
                                </div>
                                <div class="flex-1 space-y-1">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <span class="font-bold text-sm text-base-content">Anonim</span>
                                            <span class="text-xs text-base-content/50">• 5 jam lalu</span>
                                        </div>
                                        <span class="badge badge-warning badge-xs">Menunggu Moderasi</span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-base-content/80">
                                        Kunjungi website kami untuk promo hosting murah meriah!
                                    </p>

                                    {{-- Aksi Moderasi Fast Track --}}
                                    <div class="flex items-center gap-2 pt-2">
                                        <button class="btn btn-success btn-xs text-white">Setujui</button>
                                        <button class="btn btn-ghost btn-xs text-error">Hapus</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


            {{-- KOLOM KANAN: METADATA & SIDEBAR DETAIL --}}
            <div class="space-y-6">

                {{-- CARD INFORMASI PUBLIKASI --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 space-y-4">
                        <h3 class="font-bold text-base border-b border-base-200 pb-2">Informasi Artikel</h3>

                        {{-- Penulis --}}
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-base-content/60">Penulis</span>
                            <div class="flex items-center gap-2 font-medium">
                                <div class="avatar">
                                    <div class="w-6 h-6 rounded-full">
                                        <img src="https://i.pravatar.cc/100?img=33" alt="Author" />
                                    </div>
                                </div>
                                <span>Admin Utama</span>
                            </div>
                        </div>

                        {{-- Kategori --}}
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-base-content/60">Kategori</span>
                            <span class="badge badge-primary badge-sm">Teknologi</span>
                        </div>

                        {{-- Tag --}}
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-base-content/60">Tag</span>
                            <div class="flex flex-wrap gap-1 justify-end">
                                <span class="badge badge-ghost badge-xs">Laravel</span>
                                <span class="badge badge-ghost badge-xs">DaisyUI</span>
                            </div>
                        </div>

                        {{-- Permalink Slug --}}
                        <div class="space-y-1 pt-2 border-t border-base-200">
                            <span class="text-xs text-base-content/60 font-medium">Permalink Slug</span>
                            <div class="p-2 bg-base-200 rounded font-mono text-xs text-base-content/80 break-all">
                                /panduan-membangun-cms-laravel-11
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CARD METADATA SEO --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 space-y-3">
                        <h3
                            class="font-bold text-base border-b border-base-200 pb-2 flex items-center justify-between">
                            <span>Pratinjau SEO</span>
                            <x-icon name="search" class="size-4 text-base-content/50" />
                        </h3>

                        {{-- Snippet Preview Google --}}
                        <div class="p-3 bg-base-200/50 rounded-lg space-y-1">
                            <div class="text-xs text-emerald-600 truncate font-mono">https://domain.com › posts ›
                                panduan-membangun-cms</div>
                            <div
                                class="text-sm font-semibold text-blue-600 hover:underline cursor-pointer line-clamp-1">
                                Panduan Membangun CMS Modern Menggunakan Laravel 11
                            </div>
                            <div class="text-xs text-base-content/70 line-clamp-2">
                                Langkah demi langkah merancang CMS yang fleksibel, responsif, dan mudah dikustomisasi
                                dari awal hingga siap rilis...
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CARD LOG AKTIVITAS (TIMELINE) --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 space-y-3">
                        <h3 class="font-bold text-base border-b border-base-200 pb-2">Riwayat Aktivitas</h3>

                        <ul class="timeline timeline-vertical timeline-compact text-xs space-y-1">
                            <li>
                                <div class="timeline-middle text-primary">
                                    <x-icon name="check-circle" class="size-4" />
                                </div>
                                <div class="timeline-end timeline-box bg-base-200 border-none p-2">
                                    <span class="font-bold">Artikel Diterbitkan</span>
                                    <div class="text-[10px] text-base-content/50">03 Ags 2026, 14:20 WIB</div>
                                </div>
                                <hr class="bg-primary" />
                            </li>
                            <li>
                                <hr class="bg-primary" />
                                <div class="timeline-middle text-info">
                                    <x-icon name="pencil" class="size-4" />
                                </div>
                                <div class="timeline-end timeline-box bg-base-200 border-none p-2">
                                    <span class="font-bold">Diperbarui oleh Budi S.</span>
                                    <div class="text-[10px] text-base-content/50">02 Ags 2026, 09:15 WIB</div>
                                </div>
                                <hr />
                            </li>
                            <li>
                                <hr />
                                <div class="timeline-middle">
                                    <x-icon name="plus-circle" class="size-4 text-base-content/40" />
                                </div>
                                <div class="timeline-end timeline-box bg-base-200 border-none p-2">
                                    <span class="font-bold">Draft Dibuat</span>
                                    <div class="text-[10px] text-base-content/50">01 Ags 2026, 10:00 WIB</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>

</x-layouts.admin>
