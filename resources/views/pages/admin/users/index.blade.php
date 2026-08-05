<x-layouts.admin title="Manajemen Pengguna">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Manajemen Pengguna</h1>
                <p class="text-sm text-base-content/70">Kelola akun, hak akses peran, dan aktivitas pengguna sistem.</p>
            </div>
            <div>
                <a href="{{ route('users.create') }}" class="btn btn-primary gap-2">
                    <x-icon name="user-plus" class="size-4" />
                    Tambah Pengguna
                </a>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- FILTER & SEARCH TOOLBAR --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-4 sm:p-5">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">

                    {{-- Tabs Filter Role --}}
                    <div class="tabs tabs-boxed bg-base-200/60 p-1 self-start">
                        <a href="#" class="tab tab-active">Semua <span
                                class="badge badge-sm badge-neutral ml-2">12</span></a>
                        <a href="#" class="tab">Administrator <span
                                class="badge badge-sm badge-neutral ml-2">2</span></a>
                        <a href="#" class="tab">Editor <span
                                class="badge badge-sm badge-neutral ml-2">3</span></a>
                        <a href="#" class="tab">Penulis <span
                                class="badge badge-sm badge-neutral ml-2">7</span></a>
                    </div>

                    {{-- Search Input --}}
                    <div class="relative w-full lg:w-72">
                        <input type="text" placeholder="Cari nama atau email..."
                            class="input input-bordered input-sm w-full pl-9" />
                        <x-icon name="search" class="size-4 absolute left-3 top-2.5 text-base-content/50" />
                    </div>

                </div>
            </div>
        </div>

        {{-- DAFTAR PENGGUNA (LIST VIEW) --}}
        <div class="space-y-3">

            {{-- Select All Bar --}}
            <div
                class="flex items-center justify-between px-4 py-2 bg-base-200/50 rounded-xl text-xs font-semibold text-base-content/70 border border-base-300">
                <div class="flex items-center gap-3">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" class="checkbox checkbox-xs" />
                        <span>Pilih Semua Pengguna</span>
                    </label>
                </div>
                <span>Total: 12 Pengguna</span>
            </div>

            {{-- Item 1: Administrator --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm hover:border-primary/50 transition-all">
                <div class="card-body p-4 sm:p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                    {{-- Kiri: Checkbox, Avatar & Info Utama --}}
                    <div class="flex items-start sm:items-center gap-3 sm:gap-4 min-w-0">
                        <input type="checkbox" class="checkbox checkbox-sm mt-1 sm:mt-0 shrink-0" />

                        <div class="avatar shrink-0">
                            <div class="w-12 h-12 rounded-full ring ring-primary/20 ring-offset-2">
                                <img src="https://i.pravatar.cc/150?img=68" alt="Ahmad Fauzi" />
                            </div>
                        </div>

                        <div class="min-w-0 space-y-1">
                            <div class="flex items-center gap-2 flex-wrap">
                                <a href="{{ route('users.show', 1) }}"
                                    class="font-bold text-base text-base-content hover:text-primary transition-colors truncate">
                                    Ahmad Fauzi
                                </a>
                                <span class="badge badge-primary badge-sm">Administrator</span>
                                <span class="badge badge-success badge-xs text-white">Aktif</span>
                            </div>

                            <p class="text-xs text-base-content/60 font-mono truncate">ahmad.fauzi@example.com</p>

                            {{-- Info tambahan khusus Mobile --}}
                            <div class="text-[11px] text-base-content/50 flex items-center gap-3 pt-1 sm:hidden">
                                <span>28 Artikel</span>
                                <span>•</span>
                                <span>Terdaftar: 10 Jan 2026</span>
                            </div>
                        </div>
                    </div>

                    {{-- Kanan: Detail Meta (Desktop) & Aksi --}}
                    <div
                        class="flex items-center justify-between sm:justify-end gap-4 border-t sm:border-t-0 border-base-200 pt-3 sm:pt-0">

                        {{-- Meta Info (Sembunyi di Mobile) --}}
                        <div class="hidden sm:flex items-center gap-6 text-xs text-base-content/70">
                            <div class="text-center">
                                <span class="block font-bold text-sm text-base-content font-mono">28</span>
                                <span class="text-[10px] text-base-content/50 uppercase tracking-wider">Artikel</span>
                            </div>
                            <div class="text-right">
                                <span class="block font-medium text-base-content">10 Jan 2026</span>
                                <span class="text-[10px] text-base-content/50 uppercase tracking-wider">Terdaftar</span>
                            </div>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="join">
                            <a href="{{ route('users.show', 1) }}" class="btn btn-ghost btn-sm join-item"
                                title="Detail">
                                <x-icon name="eye" class="size-4 text-base-content/70" />
                            </a>
                            <a href="{{ route('users.edit', 1) }}" class="btn btn-ghost btn-sm join-item"
                                title="Edit">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-ghost btn-sm join-item text-error" title="Hapus">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>

                    </div>

                </div>
            </div>

            {{-- Item 2: Editor --}}
            <div class="card bg-base-100 border border-base-300 shadow-sm hover:border-primary/50 transition-all">
                <div class="card-body p-4 sm:p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                    <div class="flex items-start sm:items-center gap-3 sm:gap-4 min-w-0">
                        <input type="checkbox" class="checkbox checkbox-sm mt-1 sm:mt-0 shrink-0" />

                        <div class="avatar shrink-0">
                            <div class="w-12 h-12 rounded-full ring ring-secondary/20 ring-offset-2">
                                <img src="https://i.pravatar.cc/150?img=47" alt="Siti Rahma" />
                            </div>
                        </div>

                        <div class="min-w-0 space-y-1">
                            <div class="flex items-center gap-2 flex-wrap">
                                <a href="{{ route('users.show', 2) }}"
                                    class="font-bold text-base text-base-content hover:text-primary transition-colors truncate">
                                    Siti Rahma
                                </a>
                                <span class="badge badge-secondary badge-sm">Editor</span>
                                <span class="badge badge-success badge-xs text-white">Aktif</span>
                            </div>

                            <p class="text-xs text-base-content/60 font-mono truncate">siti.rahma@example.com</p>

                            <div class="text-[11px] text-base-content/50 flex items-center gap-3 pt-1 sm:hidden">
                                <span>14 Artikel</span>
                                <span>•</span>
                                <span>Terdaftar: 02 Feb 2026</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between sm:justify-end gap-4 border-t sm:border-t-0 border-base-200 pt-3 sm:pt-0">

                        <div class="hidden sm:flex items-center gap-6 text-xs text-base-content/70">
                            <div class="text-center">
                                <span class="block font-bold text-sm text-base-content font-mono">14</span>
                                <span class="text-[10px] text-base-content/50 uppercase tracking-wider">Artikel</span>
                            </div>
                            <div class="text-right">
                                <span class="block font-medium text-base-content">02 Feb 2026</span>
                                <span
                                    class="text-[10px] text-base-content/50 uppercase tracking-wider">Terdaftar</span>
                            </div>
                        </div>

                        <div class="join">
                            <a href="{{ route('users.show', 2) }}" class="btn btn-ghost btn-sm join-item"
                                title="Detail">
                                <x-icon name="eye" class="size-4 text-base-content/70" />
                            </a>
                            <a href="{{ route('users.edit', 2) }}" class="btn btn-ghost btn-sm join-item"
                                title="Edit">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-ghost btn-sm join-item text-error" title="Hapus">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>

                    </div>

                </div>
            </div>

            {{-- Item 3: Penulis (Nonaktif) --}}
            <div
                class="card bg-base-100 border border-base-300 shadow-sm opacity-75 hover:opacity-100 hover:border-primary/50 transition-all">
                <div class="card-body p-4 sm:p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                    <div class="flex items-start sm:items-center gap-3 sm:gap-4 min-w-0">
                        <input type="checkbox" class="checkbox checkbox-sm mt-1 sm:mt-0 shrink-0" />

                        <div class="avatar shrink-0">
                            <div class="w-12 h-12 rounded-full ring ring-base-300">
                                <img src="https://i.pravatar.cc/150?img=12" alt="Budi Santoso" />
                            </div>
                        </div>

                        <div class="min-w-0 space-y-1">
                            <div class="flex items-center gap-2 flex-wrap">
                                <a href="{{ route('users.show', 3) }}"
                                    class="font-bold text-base text-base-content hover:text-primary transition-colors truncate">
                                    Budi Santoso
                                </a>
                                <span class="badge badge-ghost badge-sm">Penulis</span>
                                <span class="badge badge-ghost badge-xs">Nonaktif</span>
                            </div>

                            <p class="text-xs text-base-content/60 font-mono truncate">budi.santoso@example.com</p>

                            <div class="text-[11px] text-base-content/50 flex items-center gap-3 pt-1 sm:hidden">
                                <span>5 Artikel</span>
                                <span>•</span>
                                <span>Terdaftar: 15 Mar 2026</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between sm:justify-end gap-4 border-t sm:border-t-0 border-base-200 pt-3 sm:pt-0">

                        <div class="hidden sm:flex items-center gap-6 text-xs text-base-content/70">
                            <div class="text-center">
                                <span class="block font-bold text-sm text-base-content font-mono">5</span>
                                <span class="text-[10px] text-base-content/50 uppercase tracking-wider">Artikel</span>
                            </div>
                            <div class="text-right">
                                <span class="block font-medium text-base-content">15 Mar 2026</span>
                                <span
                                    class="text-[10px] text-base-content/50 uppercase tracking-wider">Terdaftar</span>
                            </div>
                        </div>

                        <div class="join">
                            <a href="{{ route('users.show', 3) }}" class="btn btn-ghost btn-sm join-item"
                                title="Detail">
                                <x-icon name="eye" class="size-4 text-base-content/70" />
                            </a>
                            <a href="{{ route('users.edit', 3) }}" class="btn btn-ghost btn-sm join-item"
                                title="Edit">
                                <x-icon name="pencil" class="size-4 text-info" />
                            </a>
                            <button class="btn btn-ghost btn-sm join-item text-error" title="Hapus">
                                <x-icon name="trash" class="size-4" />
                            </button>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        {{-- PAGINASI --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
            <span class="text-xs text-base-content/60">Menampilkan 1-3 dari 12 pengguna</span>
            <div class="join">
                <button class="join-item btn btn-sm btn-disabled">«</button>
                <button class="join-item btn btn-sm btn-active">1</button>
                <button class="join-item btn btn-sm">2</button>
                <button class="join-item btn btn-sm">»</button>
            </div>
        </div>

    </div>

</x-layouts.admin>
