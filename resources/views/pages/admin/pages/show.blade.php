<x-layouts.admin title="Detail Halaman Statis - {{ $page->title ?? 'Tentang Kami' }}">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('pages.index') }}" class="btn btn-circle btn-ghost btn-sm" title="Kembali">
                    <x-icon name="arrow-left" class="size-5" />
                </a>
                <div>
                    <div class="flex items-center gap-2">
                        <h1 class="text-xl sm:text-2xl font-bold text-base-content">
                            {{ $page->title ?? 'Tentang Kami' }}
                        </h1>
                        <span class="badge badge-success badge-sm text-white">Terbit</span>
                    </div>
                    <p class="text-xs text-base-content/70 font-mono">/{{ $page->slug ?? 'tentang-kami' }}</p>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="flex items-center gap-2">
                <a href="#" target="_blank" class="btn btn-outline btn-sm gap-2">
                    <x-icon name="external-link" class="size-4" />
                    Lihat Live
                </a>
                <a href="#" class="btn btn-info btn-sm text-white gap-2">
                    <x-icon name="pencil" class="size-4" />
                    Edit Halaman
                </a>
            </div>
        </div>
    </x-slot:header>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- KOLOM KIRI: PRATINJAU KONTEN --}}
        <div class="lg:col-span-2 space-y-6">

            <div class="card bg-base-100 border border-base-300 shadow-sm">
                <div class="card-body p-6 space-y-4">
                    <h3
                        class="font-bold text-sm text-base-content/50 uppercase tracking-wider border-b border-base-200 pb-2">
                        Pratinjau Isi Konten
                    </h3>

                    <div class="prose max-w-none text-base-content/90 leading-relaxed space-y-4">
                        <p>
                            Selamat datang di aplikasi kami. Kami adalah platform terdepan yang berfokus pada penyediaan
                            solusi manajemen konten modern, cepat, dan terintegrasi untuk mendukung pertumbuhan bisnis
                            Anda.
                        </p>
                        <h3 class="text-lg font-bold text-base-content">Visi & Misi Kami</h3>
                        <p>
                            Memberikan kemudahan bagi pengembang dan pemilik bisnis dalam mengelola konten secara
                            mandiri tanpa kerumitan teknis.
                        </p>
                    </div>
                </div>
            </div>

            {{-- SEO PREVIEW CARD --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm">
                <div class="card-body p-5 space-y-3">
                    <h3 class="font-bold text-base border-b border-base-200 pb-2 flex items-center justify-between">
                        <span>Hasil Pencarian Google (SEO Preview)</span>
                        <x-icon name="search" class="size-4 text-base-content/50" />
                    </h3>

                    <div class="p-4 bg-base-200/50 rounded-lg space-y-1">
                        <div class="text-xs text-emerald-600 font-mono">https://domain.com › tentang-kami</div>
                        <div class="text-sm font-semibold text-blue-600 hover:underline cursor-pointer">
                            {{ $page->meta_title ?? 'Tentang Kami - Profil Perusahaan Modern' }}
                        </div>
                        <div class="text-xs text-base-content/70">
                            {{ $page->meta_description ?? 'Pelajari lebih lanjut tentang profil perusahaan kami, visi misi, dan tim di balik pengembangan solusi digital terbaik.' }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- KOLOM KANAN: METADATA & POSISI NAVIGASI --}}
        <div class="space-y-6">

            {{-- CARD METADATA HALAMAN --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm">
                <div class="card-body p-5 space-y-4">
                    <h3 class="font-bold text-base border-b border-base-200 pb-2">Pengaturan Layout & Navigasi</h3>

                    <div class="flex items-center justify-between text-sm">
                        <span class="text-base-content/60">Template Layout</span>
                        <span class="badge badge-ghost badge-sm font-mono font-medium">Standard Page</span>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <span class="text-base-content/60">Urutan Tampil</span>
                        <span class="font-bold text-base-content">#1</span>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <span class="text-base-content/60">Header Navigation</span>
                        <span class="badge badge-success badge-xs text-white">Ya</span>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <span class="text-base-content/60">Footer Menu</span>
                        <span class="badge badge-success badge-xs text-white">Ya</span>
                    </div>

                    <div class="pt-3 border-t border-base-200 space-y-2 text-xs text-base-content/60">
                        <div class="flex justify-between">
                            <span>Dibuat pada:</span>
                            <span class="font-medium text-base-content">01 Ags 2026, 10:00 WIB</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Diperbarui pada:</span>
                            <span class="font-medium text-base-content">04 Ags 2026, 15:30 WIB</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layouts.admin>
