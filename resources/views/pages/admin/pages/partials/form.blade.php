{{-- resources/views/admin/pages/partials/form.blade.php --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- KOLOM KIRI (KONTEN UTAMA & SEO) --}}
    <div class="lg:col-span-2 space-y-6">

        {{-- Card Editor Utama --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">

                {{-- Judul Halaman --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Judul Halaman <span class="text-error">*</span></span>
                    </label>
                    <input type="text" name="title" value="{{ old('title', $page->title ?? '') }}"
                        placeholder="Contoh: Kebijakan Privasi, Tentang Kami"
                        class="input input-bordered w-full @error('title') input-error @enderror" required />
                    @error('title')
                        <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                    @enderror
                </div>

                {{-- Slug URL --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Permalink Slug</span>
                        <span class="label-text-alt text-base-content/50">Otomatis jika dikosongkan</span>
                    </label>
                    <div class="join w-full">
                        <span
                            class="join-item btn btn-sm bg-base-200 border-base-300 text-base-content/70 pointer-events-none font-mono text-xs">
                            domain.com/
                        </span>
                        <input type="text" name="slug" value="{{ old('slug', $page->slug ?? '') }}"
                            placeholder="tentang-kami"
                            class="input input-bordered input-sm join-item w-full font-mono text-xs" />
                    </div>
                </div>

                {{-- Isi Konten Halaman --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Isi Halaman <span class="text-error">*</span></span>
                    </label>
                    <textarea name="content" rows="14" placeholder="Tuliskan isi informasi lengkap halaman statis di sini..."
                        class="textarea textarea-bordered w-full text-base leading-relaxed @error('content') textarea-error @enderror"
                        required>{{ old('content', $page->content ?? '') }}</textarea>
                    @error('content')
                        <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                    @enderror
                </div>

            </div>
        </div>

        {{-- Card SEO Metadata --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">
                <h3 class="font-bold text-base border-b border-base-200 pb-2 flex items-center gap-2">
                    <x-icon name="search" class="size-4 text-primary" />
                    Pengaturan SEO (Search Engine Optimization)
                </h3>

                {{-- Meta Title --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Meta Title</span>
                    </label>
                    <input type="text" name="meta_title" value="{{ old('meta_title', $page->meta_title ?? '') }}"
                        placeholder="Judul halaman untuk Google" class="input input-bordered input-sm w-full" />
                </div>

                {{-- Meta Description --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Meta Description</span>
                    </label>
                    <textarea name="meta_description" rows="3" placeholder="Deskripsi singkat halaman untuk hasil pencarian Google..."
                        class="textarea textarea-bordered w-full text-xs">{{ old('meta_description', $page->meta_description ?? '') }}</textarea>
                </div>
            </div>
        </div>

    </div>


    {{-- KOLOM KANAN (PANEL PUBLIKASI & PENGATURAN TEMPLATE) --}}
    <div class="space-y-6">

        {{-- 1. Card Publikasi --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">
                <h3 class="font-bold text-base border-b border-base-200 pb-2">Publikasi</h3>

                {{-- Status --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Status</span>
                    </label>
                    <select name="status" class="select select-bordered select-sm w-full">
                        <option value="published"
                            {{ old('status', $page->status ?? 'published') == 'published' ? 'selected' : '' }}>
                            Diterbitkan</option>
                        <option value="draft" {{ old('status', $page->status ?? '') == 'draft' ? 'selected' : '' }}>
                            Draft</option>
                    </select>
                </div>

                {{-- Template Layout --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Template Layout</span>
                    </label>
                    <select name="template" class="select select-bordered select-sm w-full">
                        <option value="standard"
                            {{ old('template', $page->template ?? 'standard') == 'standard' ? 'selected' : '' }}>
                            Standard Page</option>
                        <option value="contact"
                            {{ old('template', $page->template ?? '') == 'contact' ? 'selected' : '' }}>Contact Form
                            Page</option>
                        <option value="legal"
                            {{ old('template', $page->template ?? '') == 'legal' ? 'selected' : '' }}>Legal Document
                        </option>
                        <option value="faq" {{ old('template', $page->template ?? '') == 'faq' ? 'selected' : '' }}>
                            Accordion / FAQ List</option>
                    </select>
                </div>

                {{-- Action Button --}}
                <div class="pt-2 flex items-center gap-2 border-t border-base-200">
                    <button type="submit" class="btn btn-primary btn-sm grow gap-2">
                        <x-icon name="save" class="size-4" />
                        {{ isset($page) ? 'Simpan Perubahan' : 'Terbitkan Halaman' }}
                    </button>
                </div>
            </div>
        </div>

        {{-- 2. Card Navigasi & Posisi Menu --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-5 space-y-4">
                <h3 class="font-bold text-base border-b border-base-200 pb-2">Opsi Navigasi</h3>

                {{-- Urutan Menu --}}
                <div class="form-control w-full">
                    <label class="label font-semibold text-sm">
                        <span class="label-text">Urutan Tampil (Order)</span>
                    </label>
                    <input type="number" name="order" min="0" value="{{ old('order', $page->order ?? 0) }}"
                        class="input input-bordered input-sm w-full" />
                </div>

                {{-- Placement Checkboxes --}}
                <div class="space-y-2 pt-1">
                    <label class="label justify-start gap-3 cursor-pointer p-0">
                        <input type="checkbox" name="show_in_header" value="1"
                            {{ old('show_in_header', $page->show_in_header ?? false) ? 'checked' : '' }}
                            class="checkbox checkbox-sm checkbox-primary" />
                        <span class="label-text text-sm font-medium">Tampilkan di Navigation Header</span>
                    </label>

                    <label class="label justify-start gap-3 cursor-pointer p-0">
                        <input type="checkbox" name="show_in_footer" value="1"
                            {{ old('show_in_footer', $page->show_in_footer ?? true) ? 'checked' : '' }}
                            class="checkbox checkbox-sm checkbox-primary" />
                        <span class="label-text text-sm font-medium">Tampilkan di Footer Web</span>
                    </label>
                </div>
            </div>
        </div>

    </div>

</div>
