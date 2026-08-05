<dialog id="detail_modal" class="modal">
    <div class="modal-box max-w-4xl bg-base-100 p-0 overflow-hidden">
        <form method="dialog">
            <button
                class="btn btn-sm btn-circle btn-ghost absolute right-3 top-3 z-10 bg-base-100/80 backdrop-blur">✕</button>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-12">

            {{-- Preview Area (Kiri) --}}
            <div class="md:col-span-7 bg-base-300/50 flex items-center justify-center p-6 min-h-[300px]">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=1000&auto=format&fit=crop&q=80"
                    alt="Preview Media" class="max-h-[380px] w-auto object-contain rounded-lg shadow-sm" />
            </div>

            {{-- Metadata & Form Detail (Kanan) --}}
            <div class="md:col-span-5 p-6 flex flex-col justify-between space-y-4">

                <div class="space-y-4">
                    <h3 class="font-bold text-base text-base-content border-b border-base-200 pb-2">Detail Berkas</h3>

                    <div class="space-y-1 text-xs text-base-content/70">
                        <p><strong class="text-base-content">Nama Berkas:</strong> hero-banner-cms.webp</p>
                        <p><strong class="text-base-content">Tipe File:</strong> image/webp</p>
                        <p><strong class="text-base-content">Ukuran Berkas:</strong> 245 KB</p>
                        <p><strong class="text-base-content">Dimensi:</strong> 1920 × 1080 piksel</p>
                        <p><strong class="text-base-content">Diunggah:</strong> 05 Ags 2026, 09:30 WIB</p>
                    </div>

                    <div class="divider my-2"></div>

                    {{-- Form Alt Text & Title --}}
                    <div class="space-y-3">
                        <div class="form-control">
                            <label class="label p-0 pb-1">
                                <span class="label-text text-xs font-semibold">Alt Text (Deskripsi Gambar)</span>
                            </label>
                            <input type="text" value="Hero Banner CMS Laravel"
                                class="input input-bordered input-sm w-full" />
                        </div>

                        {{-- URL Copy Link --}}
                        <div class="form-control">
                            <label class="label p-0 pb-1">
                                <span class="label-text text-xs font-semibold">Tautan URL Berkas</span>
                            </label>
                            <div class="join w-full">
                                <input type="text" readonly
                                    value="https://domain.com/storage/media/hero-banner-cms.webp"
                                    class="input input-bordered input-sm join-item w-full text-xs font-mono bg-base-200/50" />
                                <button class="btn btn-sm join-item btn-neutral" title="Salin Tautan">
                                    <x-icon name="clipboard" class="size-4" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="pt-4 border-t border-base-200 flex items-center justify-between gap-2">
                    <button class="btn btn-error btn-outline btn-sm gap-1">
                        <x-icon name="trash" class="size-4" />
                        Hapus
                    </button>
                    <div class="flex items-center gap-2">
                        <a href="https://images.unsplash.com/photo-1555066931-4365d14bab8c" target="_blank" download
                            class="btn btn-ghost btn-sm">
                            Unduh
                        </a>
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</dialog>
