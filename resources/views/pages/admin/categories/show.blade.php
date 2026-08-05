<x-layouts.admin title="Detail Kategori - {{ $category->name ?? 'Teknologi' }}">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('categories.index') }}" class="btn btn-circle btn-ghost btn-sm" title="Kembali">
                    <x-icon name="arrow-left" class="size-5" />
                </a>
                <div>
                    <div class="flex items-center gap-2">
                        <span class="w-3.5 h-3.5 rounded-full bg-blue-500 inline-block"></span>
                        <h1 class="text-xl sm:text-2xl font-bold text-base-content">
                            {{ $category->name ?? 'Teknologi' }}
                        </h1>
                        <span class="badge badge-primary badge-sm">Kategori Utama</span>
                    </div>
                    <p class="text-xs text-base-content/70 font-mono">/category/{{ $category->slug ?? 'teknologi' }}</p>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <a href="{{ route('categories.create') }}" class="btn btn-info btn-sm text-white gap-2">
                    <x-icon name="pencil" class="size-4" />
                    Edit Taksonomi
                </a>
                <button class="btn btn-error btn-outline btn-sm" title="Hapus Taksonomi">
                    <x-icon name="trash" class="size-4" />
                </button>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- 1. CARDS STATISTIK KATEGORI --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-primary/10 text-primary rounded-xl">
                    <x-icon name="newspaper" class="size-6" />
                </div>
                <div>
                    <div class="text-2xl font-black text-base-content">42</div>
                    <div class="text-xs text-base-content/60 font-medium">Total Artikel Terkait</div>
                </div>
            </div>

            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-secondary/10 text-secondary rounded-xl">
                    <x-icon name="eye" class="size-6" />
                </div>
                <div>
                    <div class="text-2xl font-black text-base-content">15,480</div>
                    <div class="text-xs text-base-content/60 font-medium">Total Pembaca</div>
                </div>
            </div>

            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-accent/10 text-accent rounded-xl">
                    <x-icon name="trending-up" class="size-6" />
                </div>
                <div>
                    <div class="text-2xl font-black text-base-content">85%</div>
                    <div class="text-xs text-base-content/60 font-medium">Rasio Pembaca / Bulan</div>
                </div>
            </div>
        </div>

        {{-- 2. GRID UTAMA (KONTEN & SIDEBAR) --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- KOLOM KIRI: DESKRIPSI & LIST ARTIKEL TERKAIT --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- Deskripsi Kategori --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 space-y-2">
                        <h3 class="font-bold text-base border-b border-base-200 pb-2">Deskripsi Kategori</h3>
                        <p class="text-sm text-base-content/80 leading-relaxed">
                            {{ $category->description ?? 'Kategori ini mencakup seluruh artikel dan tutorial seputar perkembangan teknologi terkini, pengembangan perangkat lunak, arsitektur IT, serta tren komputasi modern.' }}
                        </p>
                    </div>
                </div>

                {{-- Tabel Artikel Terkait --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm overflow-hidden">
                    <div class="p-5 border-b border-base-200 flex items-center justify-between">
                        <h3 class="font-bold text-base">Artikel Dalam Kategori Ini</h3>
                        <span class="badge badge-neutral badge-sm font-mono">42 Artikel</span>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full text-sm">
                            <thead class="bg-base-200/50 text-base-content">
                                <tr>
                                    <th>Judul Artikel</th>
                                    <th>Penulis</th>
                                    <th>Status</th>
                                    <th>Tanggal Terbit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div
                                            class="font-bold text-base-content hover:text-primary transition-colors cursor-pointer">
                                            Panduan Membangun CMS Modern Menggunakan Laravel 11
                                        </div>
                                        <div class="text-xs text-base-content/50 font-mono">/posts/panduan-membangun-cms
                                        </div>
                                    </td>
                                    <td class="text-xs">Admin Utama</td>
                                    <td><span class="badge badge-success badge-xs text-white">Terbit</span></td>
                                    <td class="text-xs text-base-content/60">03 Ags 2026</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="font-bold text-base-content hover:text-primary transition-colors cursor-pointer">
                                            Mengenal Fitur-fitur Terbaru Tailwind CSS v4
                                        </div>
                                        <div class="text-xs text-base-content/50 font-mono">/posts/mengenal-tailwind-v4
                                        </div>
                                    </td>
                                    <td class="text-xs">Budi S.</td>
                                    <td><span class="badge badge-success badge-xs text-white">Terbit</span></td>
                                    <td class="text-xs text-base-content/60">28 Jul 2026</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            {{-- KOLOM KANAN: METADATA & DETAIL TAKSONOMI --}}
            <div class="space-y-6">

                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 space-y-4">
                        <h3 class="font-bold text-base border-b border-base-200 pb-2">Informasi Taksonomi</h3>

                        <div class="flex items-center justify-between text-sm">
                            <span class="text-base-content/60">Tipe</span>
                            <span class="badge badge-primary badge-sm">Kategori Utama</span>
                        </div>

                        <div class="flex items-center justify-between text-sm">
                            <span class="text-base-content/60">Kategori Induk</span>
                            <span class="text-base-content/70 font-medium text-xs">-- Tidak Ada (Top Level) --</span>
                        </div>

                        <div class="flex items-center justify-between text-sm">
                            <span class="text-base-content/60">Warna Badge</span>
                            <div class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full bg-blue-500 border border-base-300"></span>
                                <span class="font-mono text-xs">#3B82F6</span>
                            </div>
                        </div>

                        <div class="pt-3 border-t border-base-200 space-y-2 text-xs text-base-content/60">
                            <div class="flex justify-between">
                                <span>Dibuat pada:</span>
                                <span class="font-medium text-base-content">12 Jan 2026, 08:30 WIB</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Diperbarui pada:</span>
                                <span class="font-medium text-base-content">04 Ags 2026, 11:15 WIB</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</x-layouts.admin>
