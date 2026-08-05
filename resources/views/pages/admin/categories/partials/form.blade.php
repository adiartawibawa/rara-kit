{{-- resources/views/pages/admin/categories/partials/form.blade.php --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- KOLOM KIRI (INFORMASI UTAMA) --}}
    <div class="lg:col-span-2 space-y-6">

        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">

                {{-- Nama Kategori / Tag --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Nama Kategori / Tag <span class="text-error">*</span></span>
                    </label>
                    <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}"
                        placeholder="Contoh: Pemrograman Web, Frontend, Tutorial"
                        class="input input-bordered w-full @error('name') input-error @enderror" required />
                    @error('name')
                        <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                    @enderror
                </div>

                {{-- Slug URL --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Slug URL</span>
                        <span class="label-text-alt text-base-content/50">Otomatis jika dikosongkan</span>
                    </label>
                    <div class="join w-full">
                        <span
                            class="join-item btn btn-sm bg-base-200 border-base-300 text-base-content/70 pointer-events-none font-mono text-xs">
                            /category/
                        </span>
                        <input type="text" name="slug" value="{{ old('slug', $category->slug ?? '') }}"
                            placeholder="pemrograman-web"
                            class="input input-bordered input-sm join-item w-full font-mono text-xs" />
                    </div>
                </div>

                {{-- Deskripsi --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Deskripsi</span>
                    </label>
                    <textarea name="description" rows="4" placeholder="Penjelasan singkat mengenai taksonomi ini..."
                        class="textarea textarea-bordered w-full text-sm leading-relaxed">{{ old('description', $category->description ?? '') }}</textarea>
                </div>

            </div>
        </div>

    </div>

    {{-- KOLOM KANAN (PROPERTI & ATRIBUT) --}}
    <div class="space-y-6">

        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">
                <h3 class="font-bold text-base border-b border-base-200 pb-2">Properti Taksonomi</h3>

                {{-- Tipe (Kategori atau Tag) --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Tipe</span>
                    </label>
                    <select name="type" class="select select-bordered select-sm w-full">
                        <option value="category"
                            {{ old('type', $category->type ?? 'category') == 'category' ? 'selected' : '' }}>Kategori
                            Utama</option>
                        <option value="tag" {{ old('type', $category->type ?? '') == 'tag' ? 'selected' : '' }}>Tag /
                            Label</option>
                    </select>
                </div>

                {{-- Induk Kategori (Parent Category - Optional) --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Kategori Induk (Parent)</span>
                        <span class="label-text-alt text-base-content/50">Opsional</span>
                    </label>
                    <select name="parent_id" class="select select-bordered select-sm w-full">
                        <option value="">-- Tanpa Induk (Top Level) --</option>
                        <option value="1"
                            {{ old('parent_id', $category->parent_id ?? '') == '1' ? 'selected' : '' }}>Teknologi
                        </option>
                        <option value="2"
                            {{ old('parent_id', $category->parent_id ?? '') == '2' ? 'selected' : '' }}>Desain & UI/UX
                        </option>
                    </select>
                </div>

                {{-- Aksentuation / Badge Color --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Warna Label / Badge</span>
                    </label>
                    <div class="flex items-center gap-3">
                        <input type="color" name="color" value="{{ old('color', $category->color ?? '#3b82f6') }}"
                            class="input input-sm input-bordered w-16 h-9 p-1 cursor-pointer rounded-lg" />
                        <span class="text-xs text-base-content/60 font-mono">Pilih warna penanda</span>
                    </div>
                </div>

                {{-- Action Button --}}
                <div class="pt-2 flex items-center gap-2 border-t border-base-200">
                    <button type="submit" class="btn btn-primary btn-sm grow gap-2">
                        <x-icon name="save" class="size-4" />
                        {{ isset($category) ? 'Simpan Perubahan' : 'Tambah Taksonomi' }}
                    </button>
                </div>

            </div>
        </div>

    </div>

</div>
