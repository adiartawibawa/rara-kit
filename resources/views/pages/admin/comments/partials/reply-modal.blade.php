<dialog id="reply_modal" class="modal">
    <div class="modal-box max-w-lg bg-base-100 p-6">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-3 top-3">✕</button>
        </form>

        <h3 class="font-bold text-lg text-base-content">Balas Komentar</h3>
        <p class="text-xs text-base-content/70 mt-1">Tanggapan Anda akan ditampilkan sebagai komentar resmi dari Admin.
        </p>

        {{-- Preview Komentar Pengirim --}}
        <div class="mt-4 p-3 bg-base-200/60 rounded-xl space-y-1 text-xs border border-base-300">
            <div class="font-bold text-base-content">Rian Setyawan:</div>
            <p class="text-base-content/80 italic">
                "Artikel ini sangat membantu! Apakah ada contoh repositori GitHub untuk struktur folder proyek ini?"
            </p>
        </div>

        {{-- Form Tanggapan Admin --}}
        <div class="form-control mt-4">
            <label class="label p-0 pb-1">
                <span class="label-text text-xs font-semibold">Tanggapan Anda <span class="text-error">*</span></span>
            </label>
            <textarea rows="4" placeholder="Tuliskan balasan komentar di sini..."
                class="textarea textarea-bordered text-sm w-full leading-relaxed" required></textarea>
        </div>

        <div class="modal-action mt-6 border-t border-base-200 pt-4">
            <form method="dialog">
                <button class="btn btn-ghost btn-sm">Batal</button>
            </form>
            <button class="btn btn-primary btn-sm gap-2">
                <x-icon name="paper-airplane" class="size-4" />
                Kirim Balasan
            </button>
        </div>
    </div>
</dialog>
