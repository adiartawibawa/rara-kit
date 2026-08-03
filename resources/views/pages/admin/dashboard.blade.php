<x-layouts.admin title="Dashboard Ringkasan">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Ringkasan Sistem</h1>
                <p class="text-sm text-base-content/70">Selamat datang kembali! Berikut adalah statistik situs Anda hari
                    ini.</p>
            </div>
            <div>
                <a href="#" class="btn btn-primary gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Buat Artikel Baru
                </a>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- 1. STATISTIK UTAMA (daisyUI Stats) --}}
        <div class="stats stats-vertical lg:stats-horizontal shadow-sm bg-base-100 border border-base-300 w-full">

            <div class="stat">
                <div class="stat-figure text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <div class="stat-title">Total Artikel</div>
                <div class="stat-value text-primary">128</div>
                <div class="stat-desc">↗︎ 12 artikel bulan ini</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <div class="stat-title">Total Pembaca</div>
                <div class="stat-value text-secondary">45.2K</div>
                <div class="stat-desc">↗︎ 21% dari minggu lalu</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                <div class="stat-title">Moderasi Komentar</div>
                <div class="stat-value text-warning">8</div>
                <div class="stat-desc">Menunggu persetujuan</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <div class="stat-title">Penulis Aktif</div>
                <div class="stat-value">14</div>
                <div class="stat-desc">2 pengguna baru</div>
            </div>

        </div>

        {{-- 2. LAYOUT GRID (KONTEN UTAMA & SIDEBAR ADMIN) --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- KOLOM KIRI (2/3 Width): TABEL ARTIKEL & KOMENTAR --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- Card: Artikel Terbaru --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="card-title text-lg font-bold">Artikel Terbaru</h2>
                            <a href="#"
                                class="text-xs link link-primary no-underline hover:underline font-semibold">Lihat Semua
                                →</a>
                        </div>

                        {{-- Tabel Artikel --}}
                        <div class="overflow-x-auto">
                            <table class="table table-zebra w-full text-sm">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="font-bold line-clamp-1">Panduan Membangun CMS dengan Laravel 11
                                            </div>
                                            <div class="text-xs text-base-content/60">Oleh: Admin</div>
                                        </td>
                                        <td><span class="badge badge-ghost badge-sm font-mono">Teknologi</span></td>
                                        <td><span class="badge badge-success badge-sm text-white">Terbit</span></td>
                                        <td class="text-xs">03 Ags 2026</td>
                                        <td class="text-end">
                                            <div class="join">
                                                <button class="btn btn-ghost btn-xs join-item"
                                                    title="Edit">✏️</button>
                                                <button class="btn btn-ghost btn-xs join-item text-error"
                                                    title="Hapus">🗑️</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="font-bold line-clamp-1">Praktik Terbaik Menggunakan Tailwind &
                                                DaisyUI</div>
                                            <div class="text-xs text-base-content/60">Oleh: Budi</div>
                                        </td>
                                        <td><span class="badge badge-ghost badge-sm font-mono">Desain</span></td>
                                        <td><span class="badge badge-warning badge-sm">Draft</span></td>
                                        <td class="text-xs">01 Ags 2026</td>
                                        <td class="text-end">
                                            <div class="join">
                                                <button class="btn btn-ghost btn-xs join-item"
                                                    title="Edit">✏️</button>
                                                <button class="btn btn-ghost btn-xs join-item text-error"
                                                    title="Hapus">🗑️</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="font-bold line-clamp-1">Optimasi Database untuk Lalu Lintas
                                                Tinggi</div>
                                            <div class="text-xs text-base-content/60">Oleh: Siti</div>
                                        </td>
                                        <td><span class="badge badge-ghost badge-sm font-mono">Backend</span></td>
                                        <td><span class="badge badge-success badge-sm text-white">Terbit</span></td>
                                        <td class="text-xs">28 Jul 2026</td>
                                        <td class="text-end">
                                            <div class="join">
                                                <button class="btn btn-ghost btn-xs join-item"
                                                    title="Edit">✏️</button>
                                                <button class="btn btn-ghost btn-xs join-item text-error"
                                                    title="Hapus">🗑️</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Card: Moderasi Komentar Masuk --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-6">
                        <h2 class="card-title text-lg font-bold mb-2">Komentar Perlu Moderasi</h2>

                        <div class="divide-y divide-base-200">
                            <div class="py-3 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-bold text-sm">Rian Pradana</span>
                                        <span class="text-xs text-base-content/50">pada artikel "Laravel 11"</span>
                                    </div>
                                    <p class="text-sm text-base-content/80 mt-1">"Penjelasan yang sangat ringkas dan
                                        mudah dipahami, terima kasih!"</p>
                                </div>
                                <div class="flex items-center gap-2 shrink-0">
                                    <button class="btn btn-success btn-xs text-white">Setujui</button>
                                    <button class="btn btn-error btn-outline btn-xs">Tolak</button>
                                </div>
                            </div>

                            <div class="py-3 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-bold text-sm">Anonim</span>
                                        <span class="text-xs text-base-content/50">pada artikel "Tailwind UI"</span>
                                    </div>
                                    <p class="text-sm text-base-content/80 mt-1">"Bisakah tambahkan contoh implementasi
                                        dark mode pada Blade?"</p>
                                </div>
                                <div class="flex items-center gap-2 shrink-0">
                                    <button class="btn btn-success btn-xs text-white">Setujui</button>
                                    <button class="btn btn-error btn-outline btn-xs">Tolak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- KOLOM KANAN (1/3 Width): WIDGET & AKTIVITAS --}}
            <div class="space-y-6">

                {{-- Widget: Quick Actions --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-6">
                        <h2 class="card-title text-base font-bold mb-3">Aksi Cepat</h2>
                        <div class="flex flex-col gap-2">
                            <a href="#" class="btn btn-outline btn-sm justify-start">
                                📝 Buat Halaman Baru
                            </a>
                            <a href="#" class="btn btn-outline btn-sm justify-start">
                                📁 Kelola Kategori & Tag
                            </a>
                            <a href="#" class="btn btn-outline btn-sm justify-start">
                                🖼️ Unggah Media Gambar
                            </a>
                            <a href="#" class="btn btn-outline btn-sm justify-start">
                                ⚙️ Pengaturan Umum Situs
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Widget: Kapasitas Media Storage --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h2 class="card-title text-base font-bold">Penyimpanan Media</h2>
                            <span class="text-xs font-mono font-bold text-primary">68%</span>
                        </div>
                        <progress class="progress progress-primary w-full" value="68" max="100"></progress>
                        <p class="text-xs text-base-content/70 mt-2">6.8 GB dari 10 GB kapasitas server terpakai.</p>
                    </div>
                </div>

                {{-- Widget: Aktivitas Terbaru (Log) --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-6">
                        <h2 class="card-title text-base font-bold mb-3">Log Aktivitas</h2>

                        <ul class="space-y-4 text-xs">
                            <li class="flex gap-3">
                                <span class="text-base">🚀</span>
                                <div>
                                    <p class="font-semibold text-base-content">Artikel Dipublikasikan</p>
                                    <p class="text-base-content/60">"Panduan Membangun CMS..." oleh Admin</p>
                                    <span class="text-[10px] text-base-content/40">2 jam yang lalu</span>
                                </div>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-base">👤</span>
                                <div>
                                    <p class="font-semibold text-base-content">Pengguna Baru Terdaftar</p>
                                    <p class="text-base-content/60">Siti Rahma mendaftar sebagai Penulis</p>
                                    <span class="text-[10px] text-base-content/40">5 jam yang lalu</span>
                                </div>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-base">🗑️</span>
                                <div>
                                    <p class="font-semibold text-base-content">Artikel Dihapus</p>
                                    <p class="text-base-content/60">Draft kuno dihapus oleh Budi</p>
                                    <span class="text-[10px] text-base-content/40">Kemarin, 14:20</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>

</x-layouts.admin>
