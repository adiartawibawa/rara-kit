<x-layouts.admin title="Manajemen Komentar">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Manajemen Komentar</h1>
                <p class="text-sm text-base-content/70">Moderasi tanggapan dan diskusi pembaca pada artikel website.</p>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- FILTER & BULK ACTIONS --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-4 sm:p-5 space-y-4">

                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    {{-- Status Filter Tabs --}}
                    <div class="tabs tabs-boxed bg-base-200/60 p-1 self-start">
                        <a href="#" class="tab tab-active">Semua <span
                                class="badge badge-sm badge-neutral ml-2">48</span></a>
                        <a href="#" class="tab">Pending <span
                                class="badge badge-sm badge-warning ml-2">3</span></a>
                        <a href="#" class="tab">Disetujui <span
                                class="badge badge-sm badge-success text-white ml-2">42</span></a>
                        <a href="#" class="tab">Spam <span
                                class="badge badge-sm badge-error text-white ml-2">2</span></a>
                        <a href="#" class="tab">Sampah <span
                                class="badge badge-sm badge-ghost ml-2">1</span></a>
                    </div>

                    {{-- Search Input --}}
                    <div class="relative w-full lg:w-64">
                        <input type="text" placeholder="Cari komentar atau pengirim..."
                            class="input input-bordered input-sm w-full pl-9" />
                        <x-icon name="search" class="size-4 absolute left-3 top-2.5 text-base-content/50" />
                    </div>
                </div>

                {{-- Bulk Action Bar --}}
                <div class="flex items-center gap-2 pt-3 border-t border-base-200">
                    <select class="select select-bordered select-sm w-48">
                        <option disabled selected>Aksi Massal</option>
                        <option>Setujui yang Dipilih</option>
                        <option>Tandai sebagai Spam</option>
                        <option>Pindahkan ke Sampah</option>
                    </select>
                    <button class="btn btn-sm btn-outline">Terapkan</button>
                </div>

            </div>
        </div>

        {{-- TABEL MODERASI KOMENTAR --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full text-sm">
                    <thead class="bg-base-200/50 text-base-content">
                        <tr>
                            <th class="w-10">
                                <label><input type="checkbox" class="checkbox checkbox-sm" /></label>
                            </th>
                            <th>Pengirim</th>
                            <th class="w-1/3">Isi Komentar</th>
                            <th>Artikel Terkait</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Item 1: Pending Moderation --}}
                        <tr class="bg-warning/5">
                            <td><label><input type="checkbox" class="checkbox checkbox-sm" /></label></td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar placeholder">
                                        <div class="bg-neutral text-neutral-content rounded-full w-9">
                                            <span class="text-xs font-bold">RS</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold text-base-content">Rian Setyawan</div>
                                        <div class="text-xs text-base-content/50">rian@example.com</div>
                                        <div class="text-[10px] text-base-content/40 font-mono">IP: 180.252.10.4</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs text-base-content/90 line-clamp-2">
                                    Artikel ini sangat membantu! Apakah ada contoh repositori GitHub untuk struktur
                                    folder proyek ini? Terima kasih!
                                </p>
                            </td>
                            <td>
                                <a href="#"
                                    class="text-xs font-semibold text-primary hover:underline line-clamp-1"
                                    title="Panduan Membangun CMS Modern Menggunakan Laravel 11">
                                    Panduan Membangun CMS Modern Menggunakan Laravel 11
                                </a>
                            </td>
                            <td>
                                <span class="badge badge-warning badge-sm">Pending</span>
                            </td>
                            <td class="text-xs text-base-content/60 whitespace-nowrap">05 Ags 2026, 10:15</td>
                            <td class="text-end">
                                <div class="join">
                                    <button class="btn btn-ghost btn-xs join-item text-success" title="Setujui">
                                        <x-icon name="circle-check-big" class="size-4" />
                                    </button>
                                    <button onclick="reply_modal.showModal()"
                                        class="btn btn-ghost btn-xs join-item text-info" title="Balas">
                                        <x-icon name="undo-2" class="size-4" />
                                    </button>
                                    <a href="{{ route('comments.show', 1) }}" class="btn btn-ghost btn-xs join-item"
                                        title="Detail">
                                        <x-icon name="eye" class="size-4 text-base-content/70" />
                                    </a>
                                    <button class="btn btn-ghost btn-xs join-item text-error" title="Tandai Spam">
                                        <x-icon name="shield-alert" class="size-4" />
                                    </button>
                                </div>
                            </td>
                        </tr>

                        {{-- Item 2: Disetujui --}}
                        <tr>
                            <td><label><input type="checkbox" class="checkbox checkbox-sm" /></label></td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="w-9 rounded-full">
                                            <img src="https://i.pravatar.cc/150?img=32" alt="Avatar Maya" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold text-base-content">Maya Kartika</div>
                                        <div class="text-xs text-base-content/50">maya.k@gmail.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs text-base-content/90 line-clamp-2">
                                    Penjelasannya sangat padat dan jelas. Ditunggu artikel pembahasan seputar fitur
                                    Livewire selanjutnya!
                                </p>
                            </td>
                            <td>
                                <a href="#"
                                    class="text-xs font-semibold text-primary hover:underline line-clamp-1"
                                    title="Mengenal Fitur-fitur Terbaru Tailwind CSS v4">
                                    Mengenal Fitur-fitur Terbaru Tailwind CSS v4
                                </a>
                            </td>
                            <td>
                                <span class="badge badge-success badge-sm text-white">Disetujui</span>
                            </td>
                            <td class="text-xs text-base-content/60 whitespace-nowrap">04 Ags 2026, 16:40</td>
                            <td class="text-end">
                                <div class="join">
                                    <button onclick="reply_modal.showModal()"
                                        class="btn btn-ghost btn-xs join-item text-info" title="Balas">
                                        <x-icon name="undo-2" class="size-4" />
                                    </button>
                                    <a href="{{ route('comments.show', 2) }}" class="btn btn-ghost btn-xs join-item"
                                        title="Detail">
                                        <x-icon name="eye" class="size-4 text-base-content/70" />
                                    </a>
                                    <button class="btn btn-ghost btn-xs join-item text-error" title="Hapus">
                                        <x-icon name="trash" class="size-4" />
                                    </button>
                                </div>
                            </td>
                        </tr>

                        {{-- Item 3: Spam --}}
                        <tr class="opacity-75">
                            <td><label><input type="checkbox" class="checkbox checkbox-sm" /></label></td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar placeholder">
                                        <div class="bg-error/20 text-error rounded-full w-9">
                                            <span class="text-xs font-bold">SP</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold text-base-content">SpamBot99</div>
                                        <div class="text-xs text-base-content/50">promo@unknown-link.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs text-error line-clamp-2 font-mono">
                                    [SPAM] Buy cheap casino chips online click here http://spam-link.example
                                </p>
                            </td>
                            <td>
                                <a href="#"
                                    class="text-xs font-semibold text-primary hover:underline line-clamp-1">
                                    Panduan Membangun CMS Modern...
                                </a>
                            </td>
                            <td>
                                <span class="badge badge-error badge-sm text-white">Spam</span>
                            </td>
                            <td class="text-xs text-base-content/60 whitespace-nowrap">02 Ags 2026, 03:10</td>
                            <td class="text-end">
                                <div class="join">
                                    <button class="btn btn-ghost btn-xs join-item text-success"
                                        title="Pulihkan / Bukan Spam">
                                        <x-icon name="list-restart" class="size-4" />
                                    </button>
                                    <button class="btn btn-ghost btn-xs join-item text-error" title="Hapus Permanen">
                                        <x-icon name="trash" class="size-4" />
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        {{-- PAGINASI --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
            <span class="text-xs text-base-content/60">Menampilkan 1 - 3 dari 48 komentar</span>
            <div class="join">
                <button class="join-item btn btn-sm btn-disabled">«</button>
                <button class="join-item btn btn-sm btn-active">1</button>
                <button class="join-item btn btn-sm">2</button>
                <button class="join-item btn btn-sm">»</button>
            </div>
        </div>

    </div>

    {{-- MODAL INCLUDE --}}
    @include('pages.admin.comments.partials.reply-modal')

</x-layouts.admin>
