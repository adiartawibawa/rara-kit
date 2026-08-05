<x-layouts.admin title="Manajemen Halaman Statis">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Halaman Statis</h1>
                <p class="text-sm text-base-content/70">Kelola halaman navigasi utama seperti Tentang Kami, Kontak, dan
                    Kebijakan.</p>
            </div>
            <div>
                <a href="{{ route('pages.create') }}" class="btn btn-primary gap-2">
                    <x-icon name="plus" class="size-4" />
                    Tambah Halaman Baru
                </a>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- 1. FILTER & SEARCH BOX --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-4 sm:p-5 space-y-4">

                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    {{-- Status Quick Tab --}}
                    <div class="tabs tabs-boxed bg-base-200/60 p-1 self-start">
                        <a href="#" class="tab tab-active">Semua <span
                                class="badge badge-sm badge-neutral ml-2">5</span></a>
                        <a href="#" class="tab">Diterbitkan <span
                                class="badge badge-sm badge-success text-white ml-2">4</span></a>
                        <a href="#" class="tab">Draft <span
                                class="badge badge-sm badge-warning ml-2">1</span></a>
                    </div>

                    {{-- Search Box --}}
                    <div class="relative w-full sm:w-72">
                        <input type="text" placeholder="Cari halaman statis..."
                            class="input input-bordered input-sm w-full pl-9" />
                        <x-icon name="search" class="size-4 absolute left-3 top-2.5 text-base-content/50" />
                    </div>
                </div>

            </div>
        </div>

        {{-- 2. LIST VIEW HALAMAN STATIS --}}
        <div class="space-y-3">

            {{-- Item 1: Tentang Kami --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all">
                <div
                    class="card-body p-4 sm:p-5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">

                    {{-- Bagian Kiri: Checkbox + Icon + Informasi Halaman --}}
                    <div class="flex items-center gap-3 sm:gap-4 flex-1 min-w-0 w-full">
                        <input type="checkbox" class="checkbox checkbox-sm shrink-0" />

                        <div class="p-3 bg-primary/10 text-primary rounded-xl shrink-0 hidden sm:block">
                            <x-icon name="panels-top-left" class="size-6" />
                        </div>

                        <div class="space-y-1 flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <h2 class="font-bold text-base text-base-content">
                                    <a href="#" class="hover:text-primary transition-colors line-clamp-1">Tentang
                                        Kami</a>
                                </h2>
                            </div>

                            <div class="flex flex-wrap items-center gap-2 text-xs text-base-content/60">
                                <span class="font-mono text-base-content/50">/tentang-kami</span>
                                <span>•</span>
                                <span class="badge badge-ghost badge-xs font-mono">Standard Page</span>
                                <span>•</span>
                                <span>Diperbarui 01 Ags 2026</span>
                            </div>
                        </div>
                    </div>

                    {{-- Bagian Kanan: Status & Tombol Aksi --}}
                    <div
                        class="flex items-center justify-between sm:justify-end gap-3 w-full sm:w-auto pt-3 sm:pt-0 border-t sm:border-t-0 border-base-200 shrink-0">
                        <span class="badge badge-success badge-sm text-white">Terbit</span>

                        <div class="join border border-base-300 rounded-lg">
                            <a href="{{ route('pages.show') }}" target="_blank" class="btn btn-sm btn-ghost join-item"
                                title="Lihat Halaman">
                                <x-icon name="external-link" class="size-4 text-base-content/70" />
                            </a>
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Edit Halaman">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-sm btn-ghost join-item text-error" title="Hapus">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Item 2: Hubungi Kami --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all">
                <div
                    class="card-body p-4 sm:p-5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">

                    <div class="flex items-center gap-3 sm:gap-4 flex-1 min-w-0 w-full">
                        <input type="checkbox" class="checkbox checkbox-sm shrink-0" />

                        <div class="p-3 bg-secondary/10 text-secondary rounded-xl shrink-0 hidden sm:block">
                            <x-icon name="messages-square" class="size-6" />
                        </div>

                        <div class="space-y-1 flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <h2 class="font-bold text-base text-base-content">
                                    <a href="#" class="hover:text-primary transition-colors line-clamp-1">Hubungi
                                        Kami</a>
                                </h2>
                            </div>

                            <div class="flex flex-wrap items-center gap-2 text-xs text-base-content/60">
                                <span class="font-mono text-base-content/50">/kontak</span>
                                <span>•</span>
                                <span class="badge badge-secondary badge-outline badge-xs font-mono">Contact Form</span>
                                <span>•</span>
                                <span>Diperbarui 28 Jul 2026</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between sm:justify-end gap-3 w-full sm:w-auto pt-3 sm:pt-0 border-t sm:border-t-0 border-base-200 shrink-0">
                        <span class="badge badge-success badge-sm text-white">Terbit</span>

                        <div class="join border border-base-300 rounded-lg">
                            <a href="{{ route('pages.show') }}" target="_blank" class="btn btn-sm btn-ghost join-item"
                                title="Lihat Halaman">
                                <x-icon name="external-link" class="size-4 text-base-content/70" />
                            </a>
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Edit Halaman">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-sm btn-ghost join-item text-error" title="Hapus">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Item 3: Kebijakan Privasi --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all">
                <div
                    class="card-body p-4 sm:p-5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">

                    <div class="flex items-center gap-3 sm:gap-4 flex-1 min-w-0 w-full">
                        <input type="checkbox" class="checkbox checkbox-sm shrink-0" />

                        <div class="p-3 bg-accent/10 text-accent rounded-xl shrink-0 hidden sm:block">
                            <x-icon name="newspaper" class="size-6" />
                        </div>

                        <div class="space-y-1 flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <h2 class="font-bold text-base text-base-content">
                                    <a href="#"
                                        class="hover:text-primary transition-colors line-clamp-1">Kebijakan Privasi</a>
                                </h2>
                            </div>

                            <div class="flex flex-wrap items-center gap-2 text-xs text-base-content/60">
                                <span class="font-mono text-base-content/50">/privacy-policy</span>
                                <span>•</span>
                                <span class="badge badge-ghost badge-xs font-mono">Legal Document</span>
                                <span>•</span>
                                <span>Diperbarui 15 Jun 2026</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between sm:justify-end gap-3 w-full sm:w-auto pt-3 sm:pt-0 border-t sm:border-t-0 border-base-200 shrink-0">
                        <span class="badge badge-success badge-sm text-white">Terbit</span>

                        <div class="join border border-base-300 rounded-lg">
                            <a href="{{ route('pages.show') }}" target="_blank"
                                class="btn btn-sm btn-ghost join-item" title="Lihat Halaman">
                                <x-icon name="external-link" class="size-4 text-base-content/70" />
                            </a>
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Edit Halaman">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-sm btn-ghost join-item text-error" title="Hapus">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Item 4: FAQ (Draft) --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all">
                <div
                    class="card-body p-4 sm:p-5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">

                    <div class="flex items-center gap-3 sm:gap-4 flex-1 min-w-0 w-full">
                        <input type="checkbox" class="checkbox checkbox-sm shrink-0" />

                        <div class="p-3 bg-warning/10 text-warning rounded-xl shrink-0 hidden sm:block">
                            <x-icon name="tags" class="size-6" />
                        </div>

                        <div class="space-y-1 flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <h2 class="font-bold text-base text-base-content">
                                    <a href="#"
                                        class="hover:text-primary transition-colors line-clamp-1">Pertanyaan Umum
                                        (FAQ)</a>
                                </h2>
                            </div>

                            <div class="flex flex-wrap items-center gap-2 text-xs text-base-content/60">
                                <span class="font-mono text-base-content/50">/faq</span>
                                <span>•</span>
                                <span class="badge badge-accent badge-outline badge-xs font-mono">Accordion List</span>
                                <span>•</span>
                                <span>Diperbarui 04 Ags 2026</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between sm:justify-end gap-3 w-full sm:w-auto pt-3 sm:pt-0 border-t sm:border-t-0 border-base-200 shrink-0">
                        <span class="badge badge-warning badge-sm">Draft</span>

                        <div class="join border border-base-300 rounded-lg">
                            <a href="{{ route('pages.show') }}" target="_blank"
                                class="btn btn-sm btn-ghost join-item" title="Lihat Halaman">
                                <x-icon name="external-link" class="size-4 text-base-content/70" />
                            </a>
                            <a href="#" class="btn btn-sm btn-ghost join-item" title="Edit Halaman">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-sm btn-ghost join-item text-error" title="Hapus">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        {{-- 3. FOOTER PAGINASI --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm p-4">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-xs text-base-content/70">
                    Menampilkan <span class="font-semibold text-base-content">1</span> - <span
                        class="font-semibold text-base-content">4</span> dari <span
                        class="font-semibold text-base-content">5</span> halaman
                </p>
                <div class="join">
                    <button class="join-item btn btn-sm btn-outline" disabled>«</button>
                    <button class="join-item btn btn-sm btn-outline btn-active">1</button>
                    <button class="join-item btn btn-sm btn-outline">»</button>
                </div>
            </div>
        </div>

    </div>

</x-layouts.admin>
