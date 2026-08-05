<dialog id="upload_modal" class="modal">
    <div class="modal-box max-w-2xl bg-base-100 p-6">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-3 top-3">✕</button>
        </form>

        <h3 class="font-bold text-lg text-base-content">Unggah Berkas Media</h3>
        <p class="text-xs text-base-content/70 mt-1">Pilih berkas dari komputer atau tarik langsung ke area di bawah.</p>

        {{-- Area Drag & Drop --}}
        <div
            class="mt-5 border-2 border-dashed border-base-300 hover:border-primary rounded-2xl p-8 text-center bg-base-200/40 hover:bg-base-200/70 transition-all cursor-pointer flex flex-col items-center justify-center gap-3">
            <div class="p-4 bg-primary/10 text-primary rounded-full">
                <x-icon name="cloud-upload" class="size-8" />
            </div>
            <div>
                <p class="text-sm font-semibold text-base-content">Klik untuk memilih berkas atau drag & drop ke sini
                </p>
                <p class="text-xs text-base-content/50 mt-1">PNG, JPG, WEBP, PDF, atau ZIP (Maksimal 10MB per berkas)
                </p>
            </div>
            <input type="file" multiple class="hidden" id="file_input" />
        </div>

        {{-- Daftar Antrean Unggahan (Simulasi UI) --}}
        <div class="mt-4 space-y-2">
            <div class="flex items-center justify-between p-2.5 bg-base-200/60 rounded-xl text-xs">
                <div class="flex items-center gap-3 truncate">
                    <x-icon name="images" class="size-5 text-primary shrink-0" />
                    <span class="font-medium text-base-content truncate">sample-image-upload.jpg</span>
                    <span class="text-base-content/50">(1.4 MB)</span>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <span class="text-success font-semibold">100%</span>
                    <x-icon name="circle-check-big" class="size-4 text-success" />
                </div>
            </div>
        </div>

        <div class="modal-action mt-6 border-t border-base-200 pt-4">
            <form method="dialog">
                <button class="btn btn-ghost btn-sm">Batal</button>
            </form>
            <button class="btn btn-primary btn-sm gap-2">
                <x-icon name="file-up" class="size-4" />
                Mulai Unggah
            </button>
        </div>
    </div>
</dialog>
