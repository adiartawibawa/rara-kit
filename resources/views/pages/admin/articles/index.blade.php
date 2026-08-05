<x-layouts.admin title="Manajemen Artikel">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Manajemen Artikel</h1>
                <p class="text-sm text-base-content/70">Kelola, sunting, dan publikasikan artikel Anda.</p>
            </div>
            <div>
                <a href="{{ route('articles.create') }}" class="btn btn-primary gap-2">
                    <x-icon name="plus" class="size-4" />
                    Buat Artikel Baru
                </a>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- 1. TAB FILTER STATUS & SEARCH --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-4 sm:p-5 space-y-4">

                {{-- Row 1: Quick Filter Tabs & Aksi Massal --}}
                <div
                    class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-4 border-b border-base-200">
                    <div class="tabs tabs-boxed bg-base-200/60 p-1 self-start">
                        <a href="#" class="tab tab-active">Semua <span
                                class="badge badge-sm badge-neutral ml-2">128</span></a>
                        <a href="#" class="tab">Diterbitkan <span
                                class="badge badge-sm badge-success text-white ml-2">94</span></a>
                        <a href="#" class="tab">Draft <span
                                class="badge badge-sm badge-warning ml-2">28</span></a>
                        <a href="#" class="tab">Sampah <span
                                class="badge badge-sm badge-ghost ml-2">6</span></a>
                    </div>

                    {{-- Bulk Actions --}}
                    <div class="flex items-center gap-2">
                        <select class="select select-bordered select-sm w-full max-w-[160px]" disabled>
                            <option disabled selected>Aksi Massal</option>
                            <option value="delete">Hapus Terpilih</option>
                            <option value="draft">Ubah ke Draft</option>
                            <option value="publish">Terbitkan</option>
                        </select>
                        <button class="btn btn-sm btn-ghost border-base-300" disabled>Terapkan</button>
                    </div>
                </div>

                {{-- Row 2: Search Input & Filter Dropdowns --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                    <div class="relative lg:col-span-2">
                        <input type="text" placeholder="Cari artikel berdasarkan judul..."
                            class="input input-bordered input-sm w-full pl-9" />
                        <x-icon name="search" class="size-4 absolute left-3 top-2.5 text-base-content/50" />
                    </div>

                    <select class="select select-bordered select-sm w-full">
                        <option value="">Semua Kategori</option>
                        <option value="teknologi">Teknologi</option>
                        <option value="desain">Desain UI/UX</option>
                        <option value="backend">Backend</option>
                    </select>

                    <select class="select select-bordered select-sm w-full">
                        <option value="latest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="popular">Pembaca Terbanyak</option>
                    </select>
                </div>

            </div>
        </div>

        {{-- 2. LIST CARD ARTIKEL --}}
        <div class="space-y-4">

            {{-- Card Artikel 1 --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all">
                <div
                    class="card-body p-4 sm:p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">

                    {{-- Bagian Kiri: Checkbox + Featured Image + Konten Utama --}}
                    <div class="flex flex-col sm:flex-row items-start gap-4 flex-1 w-full min-w-0">

                        {{-- Bulk Select Checkbox --}}
                        <div class="pt-1 hidden sm:block">
                            <input type="checkbox" class="checkbox checkbox-sm" />
                        </div>

                        {{-- Featured Image --}}
                        <div class="avatar shrink-0 w-full sm:w-auto">
                            <div class="w-full sm:w-32 h-40 sm:h-24 rounded-xl bg-base-300 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=300"
                                    alt="Featured Image" class="w-full h-full object-cover" />
                            </div>
                        </div>

                        {{-- Informasi & Detail Artikel --}}
                        <div class="space-y-1.5 flex-1 min-w-0 w-full">

                            {{-- Tag / Kategori & Tanggal --}}
                            <div class="flex flex-wrap items-center gap-2 text-xs">
                                <span class="badge badge-primary badge-sm font-medium">Teknologi</span>
                                <span class="badge badge-ghost badge-sm font-mono">Laravel</span>
                                <span class="text-base-content/40">•</span>
                                <span class="text-base-content/50 font-mono">03 Ags 2026</span>
                            </div>

                            {{-- Judul Artikel --}}
                            <h2 class="font-bold text-base sm:text-lg leading-snug">
                                <a href="#" class="hover:text-primary transition-colors line-clamp-1">
                                    Panduan Membangun CMS Modern Menggunakan Laravel 11 & DaisyUI
                                </a>
                            </h2>

                            {{-- Deskripsi Singkat / Excerpt --}}
                            <p class="text-xs sm:text-sm text-base-content/70 line-clamp-2">
                                Langkah demi langkah merancang CMS yang fleksibel, responsif, dan mudah dikustomisasi
                                dari awal hingga siap rilis ke server produksi.
                            </p>

                            {{-- Author & Viewer --}}
                            <div class="flex items-center gap-4 pt-1 text-xs text-base-content/60">
                                {{-- Author --}}
                                <div class="flex items-center gap-1.5">
                                    <div class="avatar">
                                        <div class="w-5 h-5 rounded-full">
                                            <img src="https://i.pravatar.cc/100?img=33" alt="Author" />
                                        </div>
                                    </div>
                                    <span class="font-medium text-base-content/80">Admin Utama</span>
                                </div>

                                <span class="text-base-content/30">•</span>

                                {{-- Viewer --}}
                                <div class="flex items-center gap-1.5">
                                    <x-icon name="eye" class="size-3.5 text-base-content/50" />
                                    <span>2,420 views</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Bagian Kanan: Status & Tombol Aksi --}}
                    <div
                        class="flex items-center justify-between md:justify-end gap-3 w-full md:w-auto pt-3 md:pt-0 border-t md:border-t-0 border-base-200 shrink-0">

                        {{-- Status Badge --}}
                        <span class="badge badge-success badge-sm text-white">Terbit</span>

                        {{-- Action Buttons --}}
                        <div class="join border border-base-300 rounded-lg">
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Pratinjau Artikel">
                                <x-icon name="eye" class="size-4 text-base-content/70" />
                            </a>
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Edit Artikel">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-sm btn-ghost join-item text-error" title="Hapus Artikel">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>

                    </div>

                </div>
            </div>

            {{-- Card Artikel 2 --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all">
                <div
                    class="card-body p-4 sm:p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">

                    <div class="flex flex-col sm:flex-row items-start gap-4 flex-1 w-full min-w-0">
                        <div class="pt-1 hidden sm:block">
                            <input type="checkbox" class="checkbox checkbox-sm" />
                        </div>

                        <div class="avatar shrink-0 w-full sm:w-auto">
                            <div class="w-full sm:w-32 h-40 sm:h-24 rounded-xl bg-base-300 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=300"
                                    alt="Featured Image" class="w-full h-full object-cover" />
                            </div>
                        </div>

                        <div class="space-y-1.5 flex-1 min-w-0 w-full">
                            <div class="flex flex-wrap items-center gap-2 text-xs">
                                <span class="badge badge-secondary badge-sm font-medium">Backend</span>
                                <span class="badge badge-ghost badge-sm font-mono">Eloquence</span>
                                <span class="text-base-content/40">•</span>
                                <span class="text-base-content/50 font-mono">01 Ags 2026</span>
                            </div>

                            <h2 class="font-bold text-base sm:text-lg leading-snug">
                                <a href="#" class="hover:text-primary transition-colors line-clamp-1">
                                    10 Praktik Terbaik Mengoptimalkan Performa Query Eloquent
                                </a>
                            </h2>

                            <p class="text-xs sm:text-sm text-base-content/70 line-clamp-2">
                                Hindari masalah N+1 query dan optimalkan penggunaan memori pada aplikasi Laravel skala
                                besar Anda.
                            </p>

                            <div class="flex items-center gap-4 pt-1 text-xs text-base-content/60">
                                <div class="flex items-center gap-1.5">
                                    <div class="avatar">
                                        <div class="w-5 h-5 rounded-full">
                                            <img src="https://i.pravatar.cc/100?img=12" alt="Author" />
                                        </div>
                                    </div>
                                    <span class="font-medium text-base-content/80">Budi Santoso</span>
                                </div>

                                <span class="text-base-content/30">•</span>

                                <div class="flex items-center gap-1.5">
                                    <x-icon name="eye" class="size-3.5 text-base-content/50" />
                                    <span>0 views</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between md:justify-end gap-3 w-full md:w-auto pt-3 md:pt-0 border-t md:border-t-0 border-base-200 shrink-0">
                        <span class="badge badge-warning badge-sm">Draft</span>

                        <div class="join border border-base-300 rounded-lg">
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Pratinjau Artikel">
                                <x-icon name="eye" class="size-4 text-base-content/70" />
                            </a>
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Edit Artikel">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-sm btn-ghost join-item text-error" title="Hapus Artikel">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Card Artikel 3 --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all">
                <div
                    class="card-body p-4 sm:p-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">

                    <div class="flex flex-col sm:flex-row items-start gap-4 flex-1 w-full min-w-0">
                        <div class="pt-1 hidden sm:block">
                            <input type="checkbox" class="checkbox checkbox-sm" />
                        </div>

                        <div class="avatar shrink-0 w-full sm:w-auto">
                            <div class="w-full sm:w-32 h-40 sm:h-24 rounded-xl bg-base-300 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=300"
                                    alt="Featured Image" class="w-full h-full object-cover" />
                            </div>
                        </div>

                        <div class="space-y-1.5 flex-1 min-w-0 w-full">
                            <div class="flex flex-wrap items-center gap-2 text-xs">
                                <span class="badge badge-accent badge-sm font-medium">Desain UI/UX</span>
                                <span class="badge badge-ghost badge-sm font-mono">Accessibility</span>
                                <span class="text-base-content/40">•</span>
                                <span class="text-base-content/50 font-mono">25 Jul 2026</span>
                            </div>

                            <h2 class="font-bold text-base sm:text-lg leading-snug">
                                <a href="#" class="hover:text-primary transition-colors line-clamp-1">
                                    Desain Antarmuka yang Aksesibel untuk Semua Pengguna
                                </a>
                            </h2>

                            <p class="text-xs sm:text-sm text-base-content/70 line-clamp-2">
                                Penerapan standar kontras warna, pembaca layar (screen reader), dan navigasi keyboard
                                pada aplikasi web modern.
                            </p>

                            <div class="flex items-center gap-4 pt-1 text-xs text-base-content/60">
                                <div class="flex items-center gap-1.5">
                                    <div class="avatar">
                                        <div class="w-5 h-5 rounded-full">
                                            <img src="https://i.pravatar.cc/100?img=47" alt="Author" />
                                        </div>
                                    </div>
                                    <span class="font-medium text-base-content/80">Siti Rahma</span>
                                </div>

                                <span class="text-base-content/30">•</span>

                                <div class="flex items-center gap-1.5">
                                    <x-icon name="eye" class="size-3.5 text-base-content/50" />
                                    <span>850 views</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between md:justify-end gap-3 w-full md:w-auto pt-3 md:pt-0 border-t md:border-t-0 border-base-200 shrink-0">
                        <span class="badge badge-success badge-sm text-white">Terbit</span>

                        <div class="join border border-base-300 rounded-lg">
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Pratinjau Artikel">
                                <x-icon name="eye" class="size-4 text-base-content/70" />
                            </a>
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Edit Artikel">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-sm btn-ghost join-item text-error" title="Hapus Artikel">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        {{-- 3. FOOTER & PAGINASI --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm p-4">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-xs text-base-content/70">
                    Menampilkan <span class="font-semibold text-base-content">1</span> - <span
                        class="font-semibold text-base-content">3</span> dari <span
                        class="font-semibold text-base-content">128</span> artikel
                </p>
                <div class="join">
                    <button class="join-item btn btn-sm btn-outline">«</button>
                    <button class="join-item btn btn-sm btn-outline btn-active">1</button>
                    <button class="join-item btn btn-sm btn-outline">2</button>
                    <button class="join-item btn btn-sm btn-outline">3</button>
                    <button class="join-item btn btn-sm btn-outline">»</button>
                </div>
            </div>
        </div>

    </div>

</x-layouts.admin>
