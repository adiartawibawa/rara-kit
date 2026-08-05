<x-layouts.admin title="Detail Pengguna - Ahmad Fauzi">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('users.index') }}" class="btn btn-circle btn-ghost btn-sm" title="Kembali">
                    <x-icon name="arrow-left" class="size-5" />
                </a>
                <div>
                    <div class="flex items-center gap-2">
                        <h1 class="text-xl sm:text-2xl font-bold text-base-content">Ahmad Fauzi</h1>
                        <span class="badge badge-primary badge-sm">Administrator</span>
                        <span class="badge badge-success badge-xs text-white">Aktif</span>
                    </div>
                    <p class="text-xs text-base-content/70 font-mono">ahmad.fauzi@example.com</p>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <a href="{{ route('users.edit', 1) }}" class="btn btn-info btn-sm text-white gap-2">
                    <x-icon name="pencil" class="size-4" />
                    Edit Pengguna
                </a>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- CARDS STATISTIK AKTIVITAS PENGGUNA --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-primary/10 text-primary rounded-xl">
                    <x-icon name="newspaper" class="size-6" />
                </div>
                <div>
                    <div class="text-2xl font-black text-base-content">28</div>
                    <div class="text-xs text-base-content/60 font-medium">Artikel Diterbitkan</div>
                </div>
            </div>

            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-secondary/10 text-secondary rounded-xl">
                    <x-icon name="messages-square" class="size-6" />
                </div>
                <div>
                    <div class="text-2xl font-black text-base-content">142</div>
                    <div class="text-xs text-base-content/60 font-medium">Komentar Dibalas</div>
                </div>
            </div>

            <div class="card bg-base-100 border border-base-300 shadow-sm p-4 flex flex-row items-center gap-4">
                <div class="p-3 bg-accent/10 text-accent rounded-xl">
                    <x-icon name="clock" class="size-6" />
                </div>
                <div>
                    <div class="text-sm font-bold text-base-content">05 Ags 2026, 08:30</div>
                    <div class="text-xs text-base-content/60 font-medium">Sesi Terakhir Login</div>
                </div>
            </div>
        </div>

        {{-- PROFIL & KONTEN TERBARU --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- KOLOM KIRI: PROFIL DETIL --}}
            <div class="space-y-6">
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-6 text-center space-y-4">
                        <div class="avatar mx-auto">
                            <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                <img src="https://i.pravatar.cc/150?img=68" alt="Ahmad Fauzi" />
                            </div>
                        </div>

                        <div>
                            <h2 class="font-bold text-lg text-base-content">Ahmad Fauzi</h2>
                            <p class="text-xs text-base-content/60">Lead Developer & Content Admin</p>
                        </div>

                        <p
                            class="text-xs text-base-content/80 leading-relaxed italic border-t border-b border-base-200 py-3">
                            "Berfokus pada pengembangan arsitektur web modern, Laravel ecosystem, serta integrasi UI/UX
                            yang responsif."
                        </p>

                        <div class="text-xs space-y-2 text-left text-base-content/70">
                            <div class="flex justify-between">
                                <span class="font-medium text-base-content/50">Status:</span>
                                <span class="badge badge-success badge-xs text-white">Aktif</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-base-content/50">Peran:</span>
                                <span class="font-bold text-base-content">Administrator</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-base-content/50">Terdaftar Sejak:</span>
                                <span>10 Januari 2026</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- KOLOM KANAN: TABEL ARTIKEL TERAKHIR OLEH PENGGUNA --}}
            <div class="lg:col-span-2 space-y-6">
                <div class="card bg-base-100 border border-base-300 shadow-sm overflow-hidden">
                    <div class="p-5 border-b border-base-200 flex items-center justify-between">
                        <h3 class="font-bold text-base">Artikel Terbaru Pengguna Ini</h3>
                        <span class="badge badge-neutral badge-sm font-mono">28 Artikel</span>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full text-sm">
                            <thead class="bg-base-200/50 text-base-content">
                                <tr>
                                    <th>Judul Artikel</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
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
                                    <td><span class="badge badge-primary badge-sm">Teknologi</span></td>
                                    <td><span class="badge badge-success badge-xs text-white">Terbit</span></td>
                                    <td class="text-xs text-base-content/60">03 Ags 2026</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="font-bold text-base-content hover:text-primary transition-colors cursor-pointer">
                                            Optimasi Performa Query Database pada Laravel
                                        </div>
                                        <div class="text-xs text-base-content/50 font-mono">
                                            /posts/optimasi-query-laravel</div>
                                    </td>
                                    <td><span class="badge badge-primary badge-sm">Teknologi</span></td>
                                    <td><span class="badge badge-success badge-xs text-white">Terbit</span></td>
                                    <td class="text-xs text-base-content/60">25 Jul 2026</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layouts.admin>
