<x-layouts.admin title="Pengaturan Sistem">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Pengaturan Aplikasi</h1>
                <p class="text-sm text-base-content/70">Kelola konfigurasi umum, identitas web, email, dan keamanan
                    sistem.</p>
            </div>
            <div>
                <button type="submit" form="settings-form" class="btn btn-primary gap-2">
                    <x-icon name="circle-check-big" class="size-4" />
                    Simpan Semua Perubahan
                </button>
            </div>
        </div>
    </x-slot:header>

    <form id="settings-form" action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

            {{-- SIDEBAR NAVIGASI TAB (DESKTOP & MOBILE) --}}
            <div class="lg:col-span-1">
                <div class="card bg-base-100 border border-base-300 shadow-sm sticky top-6">
                    <div class="card-body p-3">
                        <nav class="flex flex-row lg:flex-col gap-1 overflow-x-auto pb-2 lg:pb-0 scrollbar-none"
                            x-data="{ tab: 'general' }">

                            {{-- Tab 1: Umum --}}
                            <a href="#general"
                                class="btn btn-ghost justify-start text-left btn-sm h-10 gap-3 rounded-lg border-l-4 border-primary bg-base-200/60 font-semibold">
                                <x-icon name="monitor-cog" class="size-4 text-primary shrink-0" />
                                <span class="truncate">Umum & Identitas</span>
                            </a>

                            {{-- Tab 2: Kontak & Sosmed --}}
                            <a href="#contact"
                                class="btn btn-ghost justify-start text-left btn-sm h-10 gap-3 rounded-lg border-l-4 border-transparent hover:bg-base-200/50">
                                <x-icon name="globe" class="size-4 text-base-content/70 shrink-0" />
                                <span class="truncate">Kontak & Media Sosial</span>
                            </a>

                            {{-- Tab 3: Email --}}
                            <a href="#mail"
                                class="btn btn-ghost justify-start text-left btn-sm h-10 gap-3 rounded-lg border-l-4 border-transparent hover:bg-base-200/50">
                                <x-icon name="mailbox" class="size-4 text-base-content/70 shrink-0" />
                                <span class="truncate">Konfigurasi Email</span>
                            </a>

                            {{-- Tab 4: Keamanan --}}
                            <a href="#security"
                                class="btn btn-ghost justify-start text-left btn-sm h-10 gap-3 rounded-lg border-l-4 border-transparent hover:bg-base-200/50">
                                <x-icon name="shield-check" class="size-4 text-base-content/70 shrink-0" />
                                <span class="truncate">Sistem & Keamanan</span>
                            </a>

                        </nav>
                    </div>
                </div>
            </div>

            {{-- KONTEN FORM PENGATURAN --}}
            <div class="lg:col-span-3 space-y-6">

                {{-- SECTION 1: PENGATURAN UMUM & IDENTITAS --}}
                <div id="general" class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 sm:p-6 space-y-5">
                        <div class="border-b border-base-200 pb-3">
                            <h2 class="text-lg font-bold text-base-content">Identitas Aplikasi</h2>
                            <p class="text-xs text-base-content/60">Informasi dasar yang akan ditampilkan pada sistem
                                dan mesin pencari.</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            {{-- Nama Aplikasi --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Nama Aplikasi / Web <span
                                            class="text-error">*</span></span>
                                </label>
                                <input type="text" name="app_name" value="Portal Admin CMS"
                                    placeholder="E.g. Portal Admin" class="input input-bordered w-full" required />
                            </div>

                            {{-- Tagline --}}
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Slogan / Tagline</span>
                                </label>
                                <input type="text" name="app_tagline" value="Sistem Informasi Terpadu"
                                    placeholder="E.g. Solusi Digital Masa Kini" class="input input-bordered w-full" />
                            </div>
                        </div>

                        {{-- Deskripsi Web --}}
                        <div class="form-control w-full">
                            <label class="label font-semibold text-sm">
                                <span class="label-text">Deskripsi Situs (SEO)</span>
                            </label>
                            <textarea name="app_description" rows="3" class="textarea textarea-bordered w-full text-sm leading-relaxed"
                                placeholder="Tulis deskripsi singkat aplikasi...">Platform manajemen konten dan administrasi sistem modern.</textarea>
                        </div>

                        {{-- Logo & Favicon --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-2">
                            {{-- Upload Logo --}}
                            <div class="space-y-2">
                                <label class="label font-semibold text-sm p-0">
                                    <span class="label-text">Logo Utama</span>
                                </label>
                                <div
                                    class="flex items-center gap-4 p-3 bg-base-200/50 rounded-xl border border-base-300">
                                    <div
                                        class="w-12 h-12 bg-base-100 border border-base-300 rounded-lg flex items-center justify-center p-1 shrink-0">
                                        <img src="https://placehold.co/100x100?text=Logo" alt="Logo Preview"
                                            class="max-h-full object-contain" />
                                    </div>
                                    <div class="grow min-w-0">
                                        <input type="file" name="app_logo"
                                            class="file-input file-input-bordered file-input-xs w-full" />
                                        <span class="text-[10px] text-base-content/50 block mt-1">PNG atau SVG (Maks.
                                            1MB)</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Upload Favicon --}}
                            <div class="space-y-2">
                                <label class="label font-semibold text-sm p-0">
                                    <span class="label-text">Favicon</span>
                                </label>
                                <div
                                    class="flex items-center gap-4 p-3 bg-base-200/50 rounded-xl border border-base-300">
                                    <div
                                        class="w-12 h-12 bg-base-100 border border-base-300 rounded-lg flex items-center justify-center p-2 shrink-0">
                                        <img src="https://placehold.co/32x32?text=ICO" alt="Favicon Preview"
                                            class="w-6 h-6 object-contain" />
                                    </div>
                                    <div class="grow min-w-0">
                                        <input type="file" name="app_favicon"
                                            class="file-input file-input-bordered file-input-xs w-full" />
                                        <span class="text-[10px] text-base-content/50 block mt-1">ICO atau PNG
                                            (32x32px)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SECTION 2: KONTAK & MEDIA SOSIAL --}}
                <div id="contact" class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 sm:p-6 space-y-5">
                        <div class="border-b border-base-200 pb-3">
                            <h2 class="text-lg font-bold text-base-content">Kontak & Media Sosial</h2>
                            <p class="text-xs text-base-content/60">Informasi layanan pelanggan dan tautan akun resmi.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Email Dukungan</span>
                                </label>
                                <input type="email" name="contact_email" value="support@example.com"
                                    class="input input-bordered w-full" />
                            </div>

                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Nomor Telepon / Whatsapp</span>
                                </label>
                                <input type="text" name="contact_phone" value="+62 812 3456 7890"
                                    class="input input-bordered w-full" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Facebook URL</span>
                                </label>
                                <input type="url" name="social_facebook" value="https://facebook.com/page"
                                    placeholder="https://..." class="input input-bordered input-sm w-full" />
                            </div>

                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Instagram URL</span>
                                </label>
                                <input type="url" name="social_instagram" value="https://instagram.com/account"
                                    placeholder="https://..." class="input input-bordered input-sm w-full" />
                            </div>

                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">X / Twitter URL</span>
                                </label>
                                <input type="url" name="social_twitter" value="https://x.com/account"
                                    placeholder="https://..." class="input input-bordered input-sm w-full" />
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SECTION 3: KONFIGURASI EMAIL (SMTP) --}}
                <div id="mail" class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 sm:p-6 space-y-5">
                        <div class="border-b border-base-200 pb-3 flex items-center justify-between">
                            <div>
                                <h2 class="text-lg font-bold text-base-content">Pengaturan Server Email (SMTP)</h2>
                                <p class="text-xs text-base-content/60">Digunakan untuk mengirim pemberitahuan dan
                                    verifikasi password.</p>
                            </div>
                            <button type="button" class="btn btn-ghost btn-xs text-info gap-1">
                                <x-icon name="send" class="size-3.5" />
                                Tes Email
                            </button>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Mail Driver</span>
                                </label>
                                <select name="mail_mailer" class="select select-bordered select-sm w-full">
                                    <option value="smtp" selected>SMTP</option>
                                    <option value="sendmail">Sendmail</option>
                                    <option value="log">Log (Testing)</option>
                                </select>
                            </div>

                            <div class="form-control w-full sm:col-span-2">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Mail Host</span>
                                </label>
                                <input type="text" name="mail_host" value="smtp.mailtrap.io"
                                    class="input input-bordered input-sm w-full font-mono" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Port</span>
                                </label>
                                <input type="text" name="mail_port" value="2525"
                                    class="input input-bordered input-sm w-full font-mono" />
                            </div>

                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Enkripsi</span>
                                </label>
                                <select name="mail_encryption" class="select select-bordered select-sm w-full">
                                    <option value="tls" selected>TLS</option>
                                    <option value="ssl">SSL</option>
                                    <option value="none">Tanpa Enkripsi</option>
                                </select>
                            </div>

                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Nama Pengirim</span>
                                </label>
                                <input type="text" name="mail_from_name" value="Portal System"
                                    class="input input-bordered input-sm w-full" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Username SMTP</span>
                                </label>
                                <input type="text" name="mail_username" value="user_secret_123"
                                    class="input input-bordered input-sm w-full font-mono" />
                            </div>

                            <div class="form-control w-full">
                                <label class="label font-semibold text-sm">
                                    <span class="label-text">Password SMTP</span>
                                </label>
                                <input type="password" name="mail_password" value="••••••••••••"
                                    class="input input-bordered input-sm w-full font-mono" />
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SECTION 4: KEAMANAN & PEMELIHARAAN --}}
                <div id="security" class="card bg-base-100 border border-base-300 shadow-sm">
                    <div class="card-body p-5 sm:p-6 space-y-5">
                        <div class="border-b border-base-200 pb-3">
                            <h2 class="text-lg font-bold text-base-content">Sistem & Pemeliharaan</h2>
                            <p class="text-xs text-base-content/60">Kontrol akses pendaftaran akun dan status
                                pemeliharaan aplikasi.</p>
                        </div>

                        <div class="space-y-4 divide-y divide-base-200">

                            {{-- Toggle Registrasi --}}
                            <div class="flex items-center justify-between pt-2">
                                <div>
                                    <div class="font-bold text-sm text-base-content">Registrasi Pengguna Baru</div>
                                    <div class="text-xs text-base-content/60">Izinkan pengunjung umum mendaftar akun di
                                        situs.</div>
                                </div>
                                <input type="checkbox" name="enable_registration" class="toggle toggle-primary"
                                    checked />
                            </div>

                            {{-- Toggle Maintenance Mode --}}
                            <div class="flex items-center justify-between pt-4">
                                <div>
                                    <div class="font-bold text-sm text-base-content">Mode Pemeliharaan (Maintenance
                                        Mode)</div>
                                    <div class="text-xs text-base-content/60">Kunci situs umum dan tampilkan halaman
                                        pemeliharaan.</div>
                                </div>
                                <input type="checkbox" name="maintenance_mode" class="toggle toggle-error" />
                            </div>

                            {{-- Toggle Verifikasi Email --}}
                            <div class="flex items-center justify-between pt-4">
                                <div>
                                    <div class="font-bold text-sm text-base-content">Wajib Verifikasi Email</div>
                                    <div class="text-xs text-base-content/60">Pengguna baru wajib melakukan konfirmasi
                                        alamat email sebelum login.</div>
                                </div>
                                <input type="checkbox" name="require_email_verification"
                                    class="toggle toggle-primary" checked />
                            </div>

                        </div>
                    </div>
                </div>

                {{-- SUBMIT BUTTON BOTTOM --}}
                <div class="flex justify-end pt-2">
                    <button type="submit" class="btn btn-primary gap-2 w-full sm:w-auto">
                        <x-icon name="circle-check-big" class="size-4" />
                        Simpan Semua Perubahan
                    </button>
                </div>

            </div>

        </div>

    </form>

</x-layouts.admin>
