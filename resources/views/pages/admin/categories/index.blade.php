<x-layouts.admin title="Manajemen Kategori & Tag">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Kategori & Tag</h1>
                <p class="text-sm text-base-content/70">Kelola pengelompokan konten artikel dan pencarian taksonomi.</p>
            </div>
            <div>
                <a href="{{ route('categories.create') }}" class="btn btn-primary gap-2">
                    <x-icon name="plus" class="size-4" />
                    Tambah Baru
                </a>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- FILTER & SEARCH --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-4 sm:p-5">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                    {{-- Tabs Tipe --}}
                    <div class="tabs tabs-boxed bg-base-200/60 p-1 self-start">
                        <a href="#" class="tab tab-active">Semua Taksonomi</a>
                        <a href="#" class="tab">Kategori <span
                                class="badge badge-sm badge-neutral ml-2">8</span></a>
                        <a href="#" class="tab">Tag <span
                                class="badge badge-sm badge-neutral ml-2">24</span></a>
                    </div>

                    {{-- Search Input --}}
                    <div class="relative w-full sm:w-72">
                        <input type="text" placeholder="Cari kategori atau tag..."
                            class="input input-bordered input-sm w-full pl-9" />
                        <x-icon name="search" class="size-4 absolute left-3 top-2.5 text-base-content/50" />
                    </div>

                </div>
            </div>
        </div>

        {{-- TABEL TAKSONOMI --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full text-sm">
                    <thead class="bg-base-200/50 text-base-content">
                        <tr>
                            <th class="w-10">
                                <label><input type="checkbox" class="checkbox checkbox-sm" /></label>
                            </th>
                            <th>Nama & Slug</th>
                            <th>Tipe</th>
                            <th>Jumlah Artikel</th>
                            <th>Deskripsi</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Item 1: Kategori Teknologi --}}
                        <tr>
                            <td><label><input type="checkbox" class="checkbox checkbox-sm" /></label></td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <span class="w-3 h-3 rounded-full bg-blue-500 shrink-0"></span>
                                    <div>
                                        <div class="font-bold text-base-content">
                                            <a href="{{ route('categories.show') }}"
                                                class="hover:text-primary transition-colors">Teknologi</a>
                                        </div>
                                        <div class="text-xs text-base-content/50 font-mono">/category/teknologi</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary badge-sm">Kategori</span>
                            </td>
                            <td>
                                <span class="badge badge-ghost font-mono font-bold">42 Artikel</span>
                            </td>
                            <td class="text-xs text-base-content/70 max-w-xs truncate">
                                Seputar perkembangan perangkat lunak dan arsitektur IT.
                            </td>
                            <td class="text-end">
                                <div class="join">
                                    <a href="{{ route('categories.show') }}" class="btn btn-ghost btn-xs join-item"
                                        title="Lihat Detail">
                                        <x-icon name="eye" class="size-4 text-base-content/70" />
                                    </a>
                                    <a href="{{ route('categories.create') }}" class="btn btn-ghost btn-xs join-item"
                                        title="Edit">
                                        <x-icon name="pencil" class="size-4 text-info" />
                                    </a>
                                    <button class="btn btn-ghost btn-xs join-item text-error" title="Hapus">
                                        <x-icon name="trash" class="size-4" />
                                    </button>
                                </div>
                            </td>
                        </tr>

                        {{-- Item 2: Tag Laravel --}}
                        <tr>
                            <td><label><input type="checkbox" class="checkbox checkbox-sm" /></label></td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <span class="w-3 h-3 rounded-full bg-red-500 shrink-0"></span>
                                    <div>
                                        <div class="font-bold text-base-content">
                                            <a href="{{ route('categories.show') }}"
                                                class="hover:text-primary transition-colors">Laravel</a>
                                        </div>
                                        <div class="text-xs text-base-content/50 font-mono">/tag/laravel</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-ghost badge-sm">Tag</span>
                            </td>
                            <td>
                                <span class="badge badge-ghost font-mono font-bold">18 Artikel</span>
                            </td>
                            <td class="text-xs text-base-content/70 max-w-xs truncate">
                                Tag topik berkaitan dengan framework Laravel PHP.
                            </td>
                            <td class="text-end">
                                <div class="join">
                                    <a href="{{ route('categories.show') }}" class="btn btn-ghost btn-xs join-item"
                                        title="Lihat Detail">
                                        <x-icon name="eye" class="size-4 text-base-content/70" />
                                    </a>
                                    <a href="{{ route('categories.create') }}" class="btn btn-ghost btn-xs join-item"
                                        title="Edit">
                                        <x-icon name="pencil" class="size-4 text-info" />
                                    </a>
                                    <button class="btn btn-ghost btn-xs join-item text-error" title="Hapus">
                                        <x-icon name="trash" class="size-4" />
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-layouts.admin>
