{{-- resources/views/pages/admin/users/partials/form.blade.php --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- KOLOM KIRI (INFORMASI UTAMA & AKUN) --}}
    <div class="lg:col-span-2 space-y-6">

        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">
                <h3 class="font-bold text-base border-b border-base-200 pb-2">Informasi Akun</h3>

                {{-- Nama Lengkap --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Nama Lengkap <span class="text-error">*</span></span>
                    </label>
                    <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}"
                        placeholder="Contoh: Ahmad Fauzi"
                        class="input input-bordered w-full @error('name') input-error @enderror" required />
                    @error('name')
                        <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                    @enderror
                </div>

                {{-- Alamat Email --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Alamat Email <span class="text-error">*</span></span>
                    </label>
                    <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}"
                        placeholder="ahmad@example.com"
                        class="input input-bordered w-full @error('email') input-error @enderror" required />
                    @error('email')
                        <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                    @enderror
                </div>

                {{-- Password & Konfirmasi --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="form-control w-full">
                        <label class="label font-semibold text-sm">
                            <span class="label-text">Kata Sandi {{ isset($user) ? '(Opsional)' : '*' }}</span>
                        </label>
                        <input type="password" name="password"
                            placeholder="{{ isset($user) ? 'Biarkan kosong jika tidak diubah' : 'Minimal 8 karakter' }}"
                            class="input input-bordered w-full @error('password') input-error @enderror"
                            {{ isset($user) ? '' : 'required' }} />
                        @error('password')
                            <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <label class="label font-semibold text-sm">
                            <span class="label-text">Konfirmasi Kata Sandi</span>
                        </label>
                        <input type="password" name="password_confirmation" placeholder="Ulangi kata sandi"
                            class="input input-bordered w-full" {{ isset($user) ? '' : 'required' }} />
                    </div>
                </div>

                {{-- Biografi Singkat --}}
                <div class="form-control w-full pt-2">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Biografi Singkat</span>
                    </label>
                    <textarea name="bio" rows="3" placeholder="Tuliskan biografi atau profil singkat pengguna..."
                        class="textarea textarea-bordered w-full text-sm leading-relaxed">{{ old('bio', $user->bio ?? '') }}</textarea>
                </div>

            </div>
        </div>

    </div>

    {{-- KOLOM KANAN (FOTO PROFIL, PERAN & STATUS) --}}
    <div class="space-y-6">

        {{-- Foto Profil --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4 text-center">
                <h3 class="font-bold text-base border-b border-base-200 pb-2 text-left">Foto Profil</h3>

                <div class="flex flex-col items-center gap-3">
                    <div class="avatar">
                        <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                            <img src="{{ $user->avatar_url ?? 'https://i.pravatar.cc/150?img=68' }}"
                                alt="Avatar Preview" />
                        </div>
                    </div>

                    <div class="form-control w-full">
                        <input type="file" name="avatar"
                            class="file-input file-input-bordered file-input-sm w-full" />
                        <label class="label p-0 pt-1 justify-center">
                            <span class="label-text-alt text-base-content/50">JPG, PNG, atau WEBP (Maks 2MB)</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        {{-- Peran & Akses --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">
                <h3 class="font-bold text-base border-b border-base-200 pb-2">Peran & Status</h3>

                {{-- Peran / Role --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Peran Sistem <span class="text-error">*</span></span>
                    </label>
                    <select name="role" class="select select-bordered select-sm w-full">
                        <option value="admin" {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>
                            Administrator</option>
                        <option value="editor" {{ old('role', $user->role ?? '') == 'editor' ? 'selected' : '' }}>
                            Editor</option>
                        <option value="author"
                            {{ old('role', $user->role ?? 'author') == 'author' ? 'selected' : '' }}>Penulis (Author)
                        </option>
                    </select>
                </div>

                {{-- Status Akun --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Status Akun</span>
                    </label>
                    <select name="status" class="select select-bordered select-sm w-full">
                        <option value="active"
                            {{ old('status', $user->status ?? 'active') == 'active' ? 'selected' : '' }}>Aktif</option>
                        <option value="inactive"
                            {{ old('status', $user->status ?? '') == 'inactive' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </div>

                {{-- Action Button --}}
                <div class="pt-2 flex items-center gap-2 border-t border-base-200">
                    <button type="submit" class="btn btn-primary btn-sm grow gap-2">
                        <x-icon name="save" class="size-4" />
                        {{ isset($user) ? 'Simpan Perubahan' : 'Tambah Pengguna' }}
                    </button>
                </div>

            </div>
        </div>

    </div>

</div>
