<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- KOLOM KIRI (KONTEN UTAMA) --}}
    <div class="lg:col-span-2 space-y-6">

        {{-- Card Editor Utama --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">

                {{-- Judul Artikel --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Judul Artikel <span class="text-error">*</span></span>
                    </label>
                    <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}"
                        placeholder="Masukkan judul artikel yang menarik..."
                        class="input input-bordered w-full @error('title') input-error @enderror" required />
                    @error('title')
                        <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                    @enderror
                </div>

                {{-- Slug --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Slug URL</span>
                        <span class="label-text-alt text-base-content/50">Otomatis jika dikosongkan</span>
                    </label>
                    <div class="join w-full">
                        <span
                            class="join-item btn btn-sm bg-base-200 border-base-300 text-base-content/70 pointer-events-none font-mono text-xs">
                            domain.com/posts/
                        </span>
                        <input type="text" name="slug" value="{{ old('slug', $post->slug ?? '') }}"
                            placeholder="judul-artikel-anda"
                            class="input input-bordered input-sm join-item w-full font-mono text-xs" />
                    </div>
                </div>

                {{-- Excerpt / Deskripsi Singkat --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Deskripsi Singkat (Excerpt)</span>
                    </label>
                    <textarea name="excerpt" rows="3" placeholder="Ringkasan singkat artikel untuk preview di halaman utama..."
                        class="textarea textarea-bordered w-full text-sm">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
                </div>

                {{-- Isi Artikel / Content --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Isi Artikel <span class="text-error">*</span></span>
                    </label>
                    {{-- Tempat Editor Rich Text (WYSIWYG / Summernote / Trix / TipTap) --}}
                    <textarea name="content" rows="12" placeholder="Tulis artikel lengkap di sini..."
                        class="textarea textarea-bordered w-full text-base leading-relaxed @error('content') textarea-error @enderror"
                        required>{{ old('content', $post->content ?? '') }}</textarea>
                    @error('content')
                        <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                    @enderror
                </div>

            </div>
        </div>

    </div>


    {{-- KOLOM KANAN (PANEL PUBLIKASI & METADATA) --}}
    <div class="space-y-6">

        {{-- 1. Card Publikasi --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">
                <h3 class="font-bold text-base border-b border-base-200 pb-2">Publikasi</h3>

                {{-- Status Artikel --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Status</span>
                    </label>
                    <select name="status" class="select select-bordered select-sm w-full">
                        <option value="draft" {{ old('status', $post->status ?? '') == 'draft' ? 'selected' : '' }}>
                            Draft</option>
                        <option value="published"
                            {{ old('status', $post->status ?? 'published') == 'published' ? 'selected' : '' }}>
                            Diterbitkan</option>
                        <option value="archived"
                            {{ old('status', $post->status ?? '') == 'archived' ? 'selected' : '' }}>Arsip</option>
                    </select>
                </div>

                {{-- Tanggal Terbit --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Tanggal Publikasi</span>
                    </label>
                    <input type="datetime-local" name="published_at"
                        value="{{ old('published_at', isset($post->published_at) ? $post->published_at->format('Y-m-d\TH:i') : now()->format('Y-m-d\TH:i')) }}"
                        class="input input-bordered input-sm w-full" />
                </div>

                {{-- Action Buttons --}}
                <div class="pt-2 flex items-center gap-2 border-t border-base-200">
                    <button type="submit" class="btn btn-primary btn-sm grow gap-2">
                        <x-icon name="save" class="size-4" />
                        {{ isset($post) ? 'Simpan Perubahan' : 'Terbitkan Artikel' }}
                    </button>
                </div>
            </div>
        </div>

        {{-- 2. Card Kategori & Tags --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">
                <h3 class="font-bold text-base border-b border-base-200 pb-2">Kategori & Tag</h3>

                {{-- Dropdown Kategori --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Kategori <span class="text-error">*</span></span>
                    </label>
                    <select name="category_id" class="select select-bordered select-sm w-full" required>
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="1"
                            {{ old('category_id', $post->category_id ?? '') == '1' ? 'selected' : '' }}>Teknologi
                        </option>
                        <option value="2"
                            {{ old('category_id', $post->category_id ?? '') == '2' ? 'selected' : '' }}>Desain UI/UX
                        </option>
                        <option value="3"
                            {{ old('category_id', $post->category_id ?? '') == '3' ? 'selected' : '' }}>Backend &
                            DevOps</option>
                    </select>
                </div>

                {{-- Input Tag --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Tag</span>
                        <span class="label-text-alt text-base-content/50">Pisahkan dengan koma</span>
                    </label>
                    <input type="text" name="tags"
                        value="{{ old('tags', isset($post) ? $post->tags->pluck('name')->implode(', ') : '') }}"
                        placeholder="Laravel, DaisyUI, Tutorial" class="input input-bordered input-sm w-full" />
                </div>
            </div>
        </div>

        {{-- 3. Card Featured Image --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">
                <h3 class="font-bold text-base border-b border-base-200 pb-2">Gambar Sampul</h3>

                {{-- Preview Image Box --}}
                <div
                    class="w-full h-40 bg-base-200 rounded-xl flex flex-col items-center justify-center border-2 border-dashed border-base-300 relative overflow-hidden group">
                    @if (isset($post) && $post->featured_image)
                        <img src="{{ asset('storage/' . $post->featured_image) }}" class="w-full h-full object-cover"
                            id="image-preview" />
                    @else
                        <div class="text-center p-4" id="placeholder-box">
                            <x-icon name="image" class="size-8 mx-auto text-base-content/40 mb-1" />
                            <span class="text-xs text-base-content/60 block">PNG, JPG, atau WEBP (Maks. 2MB)</span>
                        </div>
                    @endif
                </div>

                {{-- File Input --}}
                <input type="file" name="featured_image" accept="image/*"
                    class="file-input file-input-bordered file-input-sm w-full" />
            </div>
        </div>

    </div>

</div>
