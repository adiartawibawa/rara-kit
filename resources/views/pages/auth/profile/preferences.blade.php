<x-layouts.admin title="Preferensi Saya">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Preferensi Saya</h1>
                <p class="text-sm text-base-content/70">Sesuaikan tampilan, notifikasi, dan perilaku antarmuka sesuai
                    kenyamanan Anda.</p>
            </div>
            <div class="flex items-center gap-2">
                <button type="reset" form="preferences-form" class="btn btn-ghost btn-sm">
                    Reset
                </button>
                <button type="submit" form="preferences-form" class="btn btn-primary btn-sm gap-2">
                    <x-icon name="circle-check-big" class="size-4" />
                    Simpan Preferensi
                </button>
            </div>
        </div>
    </x-slot:header>

    <form id="preferences-form" action="#" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- KOLOM KIRI (2 KOLOM DESKTOP) --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- SECTION 1: TAMPILAN & TEMA (APPEARANCE) --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 sm:p-6 space-y-5">

                        <div class="border-b border-base-200 pb-3 flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-base-content">Tampilan & Tema</h3>
                                <p class="text-xs text-base-content/60">Atur skema warna dan gaya antarmuka aplikasi.
                                </p>
                            </div>
                            <span class="badge badge-primary badge-sm">Visual</span>
                        </div>

                        {{-- Mode Tema --}}
                        <div class="space-y-2">
                            <label class="label p-0 font-semibold text-sm">
                                <span class="label-text">Pilihan Mode Tema</span>
                            </label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">

                                {{-- Theme: System --}}
                                <label
                                    class="border border-base-300 rounded-xl p-3 flex flex-col items-center gap-2 cursor-pointer hover:border-primary transition-all has-[:checked]:border-primary has-[:checked]:bg-primary/5">
                                    <input type="radio" name="theme" value="system"
                                        class="radio radio-primary radio-xs" checked />
                                    <x-icon name="monitor-smartphone" class="size-6 text-base-content/70" />
                                    <span class="text-xs font-semibold text-base-content">Sistem (Auto)</span>
                                </label>

                                {{-- Theme: Light --}}
                                <label
                                    class="border border-base-300 rounded-xl p-3 flex flex-col items-center gap-2 cursor-pointer hover:border-primary transition-all has-[:checked]:border-primary has-[:checked]:bg-primary/5">
                                    <input type="radio" name="theme" value="light"
                                        class="radio radio-primary radio-xs" />
                                    <x-icon name="sun" class="size-6 text-warning" />
                                    <span class="text-xs font-semibold text-base-content">Mode Terang</span>
                                </label>

                                {{-- Theme: Dark --}}
                                <label
                                    class="border border-base-300 rounded-xl p-3 flex flex-col items-center gap-2 cursor-pointer hover:border-primary transition-all has-[:checked]:border-primary has-[:checked]:bg-primary/5">
                                    <input type="radio" name="theme" value="dark"
                                        class="radio radio-primary radio-xs" />
                                    <x-icon name="moon" class="size-6 text-indigo-400" />
                                    <span class="text-xs font-semibold text-base-content">Mode Gelap</span>
                                </label>

                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            {{-- Density / Layout --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Kepadatan Tata Letak (Density)</span>
                                </label>
                                <select name="layout_density" class="select select-bordered select-sm w-full">
                                    <option value="comfortable" selected>Nyaman (Comfortable)</option>
                                    <option value="compact">Padat (Compact)</option>
                                </select>
                            </div>

                            {{-- Sidebar Default State --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Status Default Sidebar</span>
                                </label>
                                <select name="sidebar_state" class="select select-bordered select-sm w-full">
                                    <option value="expanded" selected>Terbuka (Expanded)</option>
                                    <option value="collapsed">Tergulung (Collapsed / Mini)</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- SECTION 2: PENGATURAN DATA & TABEL --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 sm:p-6 space-y-5">

                        <div class="border-b border-base-200 pb-3">
                            <h3 class="text-lg font-bold text-base-content">Pengaturan Data & Tabel</h3>
                            <p class="text-xs text-base-content/60">Sesuaikan cara data ditampilkan pada halaman tabel
                                dan daftar.</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            {{-- Default Items Per Page --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Default Baris Tabel per Halaman</span>
                                </label>
                                <select name="per_page" class="select select-bordered select-sm w-full">
                                    <option value="10">10 Baris</option>
                                    <option value="25" selected>25 Baris</option>
                                    <option value="50">50 Baris</option>
                                    <option value="100">100 Baris</option>
                                </select>
                            </div>

                            {{-- Tampilan Default User List --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Tampilan Default Daftar Pengguna</span>
                                </label>
                                <select name="default_user_view" class="select select-bordered select-sm w-full">
                                    <option value="list" selected>Tampilan List Card</option>
                                    <option value="table">Tampilan Tabel Kompleks</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-3 pt-2">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-xs font-semibold text-base-content">Simpan Filter Pencarian</div>
                                    <div class="text-[11px] text-base-content/60">Ingat filter dan pencarian terakhir
                                        yang Anda gunakan pada tabel.</div>
                                </div>
                                <input type="checkbox" name="remember_filters" class="toggle toggle-primary toggle-sm"
                                    checked />
                            </div>
                        </div>

                    </div>
                </div>

                {{-- SECTION 3: NOTIFIKASI PERSONAL --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 sm:p-6 space-y-5">

                        <div class="border-b border-base-200 pb-3">
                            <h3 class="text-lg font-bold text-base-content">Notifikasi Personal</h3>
                            <p class="text-xs text-base-content/60">Pilih jenis pemberitahuan yang ingin Anda terima.
                            </p>
                        </div>

                        <div class="space-y-4 divide-y divide-base-200">

                            {{-- Email pada Komentar Baru --}}
                            <div class="flex items-center justify-between pt-2">
                                <div>
                                    <div class="text-sm font-semibold text-base-content">Email Komentar Baru</div>
                                    <div class="text-xs text-base-content/60">Terima email saat ada pembaca yang
                                        berkomentar di artikel buatan Anda.</div>
                                </div>
                                <input type="checkbox" name="notify_email_comment"
                                    class="toggle toggle-primary toggle-sm" checked />
                            </div>

                            {{-- Email pada Moderasi --}}
                            <div class="flex items-center justify-between pt-4">
                                <div>
                                    <div class="text-sm font-semibold text-base-content">Pembaruan Status Artikel</div>
                                    <div class="text-xs text-base-content/60">Beri tahu ketika draft artikel Anda telah
                                        disetujui atau diterbitkan.</div>
                                </div>
                                <input type="checkbox" name="notify_status_update"
                                    class="toggle toggle-primary toggle-sm" checked />
                            </div>

                            {{-- Ringkasan Mingguan --}}
                            <div class="flex items-center justify-between pt-4">
                                <div>
                                    <div class="text-sm font-semibold text-base-content">Laporan Statistik Mingguan
                                    </div>
                                    <div class="text-xs text-base-content/60">Kirimkan ringkasan performa artikel Anda
                                        setiap hari Senin.</div>
                                </div>
                                <input type="checkbox" name="notify_weekly_digest"
                                    class="toggle toggle-primary toggle-sm" />
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            {{-- KOLOM KANAN (1 KOLOM DESKTOP) --}}
            <div class="space-y-6">

                {{-- SECTION 4: LOKALISASI & WAKTU --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 space-y-4">

                        <div class="border-b border-base-200 pb-2">
                            <h3 class="font-bold text-base text-base-content">Lokalisasi & Waktu</h3>
                            <p class="text-xs text-base-content/60">Format tanggal dan zona waktu pribadi.</p>
                        </div>

                        {{-- Zona Waktu --}}
                        <div class="form-control w-full">
                            <label class="label font-semibold text-sm">
                                <span class="label-text">Zona Waktu</span>
                            </label>
                            <select name="timezone" class="select select-bordered select-sm w-full">
                                <option value="Asia/Jakarta" selected>Asia/Jakarta (WIB)</option>
                                <option value="Asia/Makassar">Asia/Makassar (WITA)</option>
                                <option value="Asia/Jayapura">Asia/Jayapura (WIT)</option>
                            </select>
                        </div>

                        {{-- Format Tanggal --}}
                        <div class="form-control w-full">
                            <label class="label font-semibold text-sm">
                                <span class="label-text">Format Tanggal</span>
                            </label>
                            <select name="date_format"
                                class="select select-bordered select-sm w-full font-mono text-xs">
                                <option value="d M Y" selected>05 Ags 2026 (DD MMM YYYY)</option>
                                <option value="Y-m-d">2026-08-05 (YYYY-MM-DD)</option>
                                <option value="d/m/Y">05/08/2026 (DD/MM/YYYY)</option>
                            </select>
                        </div>

                        {{-- Bahasa Antarmuka --}}
                        <div class="form-control w-full">
                            <label class="label font-semibold text-sm">
                                <span class="label-text">Bahasa Antarmuka</span>
                            </label>
                            <select name="language" class="select select-bordered select-sm w-full">
                                <option value="id" selected>Bahasa Indonesia</option>
                                <option value="en">English (US)</option>
                            </select>
                        </div>

                    </div>
                </div>

                {{-- SECTION 5: AKSESIBILITAS & EFEK --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 space-y-4">

                        <div class="border-b border-base-200 pb-2">
                            <h3 class="font-bold text-base text-base-content">Aksesibilitas</h3>
                            <p class="text-xs text-base-content/60">Pengaturan performa & efek visual.</p>
                        </div>

                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-xs font-semibold text-base-content">Animasi Transisi UI</div>
                                    <div class="text-[11px] text-base-content/60">Aktifkan efek halus saat berpindah
                                        halaman/modal.</div>
                                </div>
                                <input type="checkbox" name="enable_animations"
                                    class="toggle toggle-primary toggle-sm" checked />
                            </div>

                            <div class="flex items-center justify-between pt-2 border-t border-base-200">
                                <div>
                                    <div class="text-xs font-semibold text-base-content">Suara Notifikasi</div>
                                    <div class="text-[11px] text-base-content/60">Putar nada halus saat notifikasi
                                        toast muncul.</div>
                                </div>
                                <input type="checkbox" name="enable_sound" class="toggle toggle-primary toggle-sm" />
                            </div>
                        </div>

                    </div>
                </div>

                {{-- SAVE BUTTON CARD FOR MOBILE / END --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm p-4">
                    <button type="submit" class="btn btn-primary w-full gap-2">
                        <x-icon name="circle-check-big" class="size-4" />
                        Simpan Semua Preferensi
                    </button>
                </div>

            </div>

        </div>

    </form>

</x-layouts.admin>
