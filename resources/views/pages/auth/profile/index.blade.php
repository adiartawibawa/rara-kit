<x-layouts.admin title="Profil Saya">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Profil Saya</h1>
                <p class="text-sm text-base-content/70">Kelola informasi pribadi, foto profil, dan keamanan akun Anda.
                </p>
            </div>
            <div>
                <a href="{{ route('settings.index') }}" class="btn btn-ghost btn-sm gap-2">
                    <x-icon name="monitor-cog" class="size-4" />
                    Pengaturan Sistem
                </a>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- KARTU RINGKASAN PROFIL & UNGGAH FOTO --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 sm:p-6">
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">

                    {{-- Avatar & Unggah Foto --}}
                    <div class="relative group">
                        <div class="avatar">
                            <div
                                class="w-24 sm:w-28 h-24 sm:h-28 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2 overflow-hidden">
                                <img src="https://i.pravatar.cc/150?img=68" alt="Ahmad Fauzi" />
                            </div>
                        </div>
                        <label for="avatar-upload"
                            class="absolute bottom-0 right-0 btn btn-circle btn-primary btn-xs shadow cursor-pointer"
                            title="Ubah Foto">
                            <x-icon name="camera" class="size-3.5" />
                        </label>
                        <input id="avatar-upload" type="file" class="hidden" accept="image/*" />
                    </div>

                    {{-- Informasi Singkat --}}
                    <div class="space-y-2 text-center sm:text-left grow">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2">
                            <h2 class="text-xl font-bold text-base-content">Ahmad Fauzi</h2>
                            <div class="flex items-center justify-center sm:justify-start gap-1.5">
                                <span class="badge badge-primary badge-sm">Administrator</span>
                                <span class="badge badge-success badge-xs text-white">Verified</span>
                            </div>
                        </div>

                        <p class="text-sm text-base-content/70 font-mono">ahmad.fauzi@example.com</p>

                        <div
                            class="flex flex-wrap items-center justify-center sm:justify-start gap-4 pt-1 text-xs text-base-content/60">
                            <span class="flex items-center gap-1">
                                <x-icon name="briefcase-business" class="size-3.5" />
                                Senior System Admin
                            </span>
                            <span class="flex items-center gap-1">
                                <x-icon name="map-pin" class="size-3.5" />
                                Jakarta, Indonesia
                            </span>
                            <span class="flex items-center gap-1">
                                <x-icon name="calendar-days" class="size-3.5" />
                                Bergabung Jan 2026
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- GRID FORM: INFORMASI PRIBADI & KEAMANAN --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- KOLOM KIRI: INFORMASI PRIBADI (2 KOLOM DESKTOP) --}}
            <div class="lg:col-span-2 space-y-6">

                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 sm:p-6 space-y-5">

                        <div class="border-b border-base-200 pb-3 flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-base-content">Informasi Pribadi</h3>
                                <p class="text-xs text-base-content/60">Perbarui detail biodata dan kontak akun Anda.
                                </p>
                            </div>
                        </div>

                        <form action="#" method="POST" class="space-y-4">
                            @csrf
                            @method('PUT')

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                {{-- Nama Lengkap --}}
                                <div class="form-control w-full">
                                    <label class="label font-semibold text-sm">
                                        <span class="label-text">Nama Lengkap <span class="text-error">*</span></span>
                                    </label>
                                    <input type="text" name="name" value="Ahmad Fauzi"
                                        class="input input-bordered w-full" required />
                                </div>

                                {{-- Username --}}
                                <div class="form-control w-full">
                                    <label class="label font-semibold text-sm">
                                        <span class="label-text">Username <span class="text-error">*</span></span>
                                    </label>
                                    <input type="text" name="username" value="ahmadfauzi"
                                        class="input input-bordered w-full" required />
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                {{-- Email --}}
                                <div class="form-control w-full">
                                    <label class="label font-semibold text-sm">
                                        <span class="label-text">Alamat Email <span class="text-error">*</span></span>
                                    </label>
                                    <input type="email" name="email" value="ahmad.fauzi@example.com"
                                        class="input input-bordered w-full" required />
                                </div>

                                {{-- Nomor Telepon --}}
                                <div class="form-control w-full">
                                    <label class="label font-semibold text-sm">
                                        <span class="label-text">Nomor Telepon / WhatsApp</span>
                                    </label>
                                    <input type="text" name="phone" value="+62 812 3456 7890"
                                        class="input input-bordered w-full" />
                                </div>
                            </div>

                            {{-- Bio / Catatan --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Bio / Deskripsi Singkat</span>
                                </label>
                                <textarea name="bio" rows="3" class="textarea textarea-bordered w-full text-sm leading-relaxed"
                                    placeholder="Tuliskan sedikit tentang diri Anda...">Pengembang aplikasi web dan pengelola infrastruktur server dengan pengalaman lebih dari 5 tahun.</textarea>
                            </div>

                            <div class="flex justify-end pt-2">
                                <button type="submit" class="btn btn-primary btn-sm gap-2">
                                    <x-icon name="circle-check-big" class="size-4" />
                                    Simpan Perubahan
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

            {{-- KOLOM KANAN: UBAH KATA SANDI & KEAMANAN AKUN (1 KOLOM DESKTOP) --}}
            <div class="space-y-6">

                {{-- UBAH KATA SANDI --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 sm:p-6 space-y-4">

                        <div class="border-b border-base-200 pb-3">
                            <h3 class="text-lg font-bold text-base-content">Ubah Kata Sandi</h3>
                            <p class="text-xs text-base-content/60">Pastikan akun Anda menggunakan kata sandi yang
                                kuat.</p>
                        </div>

                        <form action="#" method="POST" class="space-y-4">
                            @csrf
                            @method('PUT')

                            {{-- Password Saat Ini --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Kata Sandi Saat Ini</span>
                                </label>
                                <input type="password" name="current_password" placeholder="••••••••"
                                    class="input input-bordered input-sm w-full" required />
                            </div>

                            {{-- Password Baru --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Kata Sandi Baru</span>
                                </label>
                                <input type="password" name="password" placeholder="Minimal 8 karakter"
                                    class="input input-bordered input-sm w-full" required />
                            </div>

                            {{-- Konfirmasi Password --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Konfirmasi Kata Sandi Baru</span>
                                </label>
                                <input type="password" name="password_confirmation"
                                    placeholder="Ulangi kata sandi baru" class="input input-bordered input-sm w-full"
                                    required />
                            </div>

                            <div class="pt-2">
                                <button type="submit" class="btn btn-outline btn-primary btn-sm w-full gap-2">
                                    <x-icon name="key" class="size-4" />
                                    Perbarui Kata Sandi
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

                {{-- KEAMANAN TAMBAHAN (2FA) --}}
                <div class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-primary/10 text-primary rounded-lg">
                                <x-icon name="shield-check" class="size-5" />
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-base-content">Autentikasi Dua Faktor (2FA)</h4>
                                <p class="text-[11px] text-base-content/60">Tambah lapisan keamanan ekstra pada akun
                                    Anda.</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between pt-2 border-t border-base-200">
                            <span class="text-xs font-semibold text-base-content/80">Status 2FA</span>
                            <input type="checkbox" class="toggle toggle-success toggle-sm" checked />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</x-layouts.admin>
