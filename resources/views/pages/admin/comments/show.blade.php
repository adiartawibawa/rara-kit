<x-layouts.admin title="Detail Moderasi Komentar">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex items-center gap-3">
            <a href="{{ route('comments.index') }}" class="btn btn-circle btn-ghost btn-sm" title="Kembali">
                <x-icon name="arrow-left" class="size-5" />
            </a>
            <div>
                <div class="flex items-center gap-2">
                    <h1 class="text-xl sm:text-2xl font-bold text-base-content">Detail Komentar</h1>
                    <span class="badge badge-warning badge-sm">Menunggu Moderasi</span>
                </div>
                <p class="text-xs text-base-content/70">ID Komentar: #CMT-84920</p>
            </div>
        </div>
    </x-slot:header>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- KOLOM KIRI: THREAD KOMENTAR & BALASAN --}}
        <div class="lg:col-span-2 space-y-6">

            {{-- Card Isi Komentar Utama --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm">
                <div class="card-body p-6 space-y-4">
                    <div class="flex items-start justify-between gap-4 border-b border-base-200 pb-4">
                        <div class="flex items-center gap-3">
                            <div class="avatar placeholder">
                                <div class="bg-neutral text-neutral-content rounded-full w-12">
                                    <span class="text-sm font-bold">RS</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-base text-base-content">Rian Setyawan</h3>
                                <p class="text-xs text-base-content/60">rian@example.com • <span class="font-mono">IP:
                                        180.252.10.4</span></p>
                            </div>
                        </div>
                        <span class="text-xs text-base-content/50">05 Ags 2026, 10:15 WIB</span>
                    </div>

                    {{-- Isi Komentar --}}
                    <div class="text-sm text-base-content/90 leading-relaxed py-2">
                        Artikel ini sangat membantu! Apakah ada contoh repositori GitHub untuk struktur folder proyek
                        ini? Terima kasih!
                    </div>

                    {{-- Moderasi Quick Action --}}
                    <div class="pt-4 border-t border-base-200 flex flex-wrap items-center justify-between gap-3">
                        <div class="flex items-center gap-2">
                            <button class="btn btn-success btn-sm text-white gap-2">
                                <x-icon name="check-circle" class="size-4" />
                                Setujui Komentar
                            </button>
                            <button class="btn btn-error btn-outline btn-sm gap-2">
                                <x-icon name="shield-exclamation" class="size-4" />
                                Tandai Spam
                            </button>
                        </div>
                        <button class="btn btn-ghost btn-sm text-error">
                            <x-icon name="trash" class="size-4" />
                            Hapus
                        </button>
                    </div>
                </div>
            </div>

            {{-- Form Balas Langsung --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm">
                <div class="card-body p-5 space-y-4">
                    <h3 class="font-bold text-base border-b border-base-200 pb-2">Balas Sebagai Admin</h3>

                    <textarea rows="4" placeholder="Tuliskan balasan Anda untuk pembaca..."
                        class="textarea textarea-bordered w-full text-sm leading-relaxed"></textarea>

                    <div class="flex justify-end">
                        <button class="btn btn-primary btn-sm gap-2">
                            <x-icon name="paper-airplane" class="size-4" />
                            Kirim & Setujui
                        </button>
                    </div>
                </div>
            </div>

        </div>

        {{-- KOLOM KANAN: KONTEKS ARTIKEL & METADATA --}}
        <div class="space-y-6">

            {{-- Artikel Terkait --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm">
                <div class="card-body p-5 space-y-3">
                    <h3 class="font-bold text-base border-b border-base-200 pb-2">Artikel Terkait</h3>

                    <div class="space-y-2">
                        <a href="#" class="font-semibold text-sm text-primary hover:underline block leading-snug">
                            Panduan Membangun CMS Modern Menggunakan Laravel 11
                        </a>
                        <p class="text-xs text-base-content/50 font-mono">/posts/panduan-membangun-cms</p>
                    </div>

                    <div class="pt-2">
                        <a href="#" target="_blank" class="btn btn-outline btn-xs gap-2 w-full">
                            <x-icon name="external-link" class="size-3.5" />
                            Lihat Artikel di Website
                        </a>
                    </div>
                </div>
            </div>

            {{-- Detail Informasi Teknis --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm">
                <div class="card-body p-5 space-y-3 text-xs">
                    <h3 class="font-bold text-sm text-base-content border-b border-base-200 pb-2">Informasi Teknis</h3>

                    <div class="flex justify-between">
                        <span class="text-base-content/60">User Agent:</span>
                        <span class="font-mono text-[10px] text-base-content/80 truncate max-w-[150px]"
                            title="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7)">Chrome / macOS</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-base-content/60">IP Address:</span>
                        <span class="font-mono text-base-content">180.252.10.4</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-base-content/60">Status User:</span>
                        <span class="badge badge-ghost badge-xs">Tamu (Unauthenticated)</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layouts.admin>
