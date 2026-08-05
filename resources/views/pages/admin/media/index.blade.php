<x-layouts.admin title="Galeri Media">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Galeri Media</h1>
                <p class="text-sm text-base-content/70">Kelola aset gambar, dokumen, dan berkas media website.</p>
            </div>
            <div>
                <button onclick="upload_modal.showModal()" class="btn btn-primary gap-2">
                    <x-icon name="cloud-upload" class="size-4" />
                    Unggah Media Baru
                </button>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- FILTER & SEARCH TOOLBAR --}}
        <div class="card bg-base-100 border border-base-300 shadow-sm">
            <div class="card-body p-4 sm:p-5">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">

                    {{-- Filter Tipe Media --}}
                    <div class="tabs tabs-boxed bg-base-200/60 p-1 self-start">
                        <a href="#" class="tab tab-active">Semua Berkas</a>
                        <a href="#" class="tab">Gambar</a>
                        <a href="#" class="tab">Dokumen (PDF/Doc)</a>
                        <a href="#" class="tab">Arsip (ZIP)</a>
                    </div>

                    {{-- Search & Sorting Controls --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <div class="relative w-full">
                            <input type="text" placeholder="Cari nama berkas..."
                                class="input input-bordered input-sm w-full pl-9" />
                            <x-icon name="search" class="size-4 absolute left-3 top-2.5 text-base-content/50" />
                        </div>

                        <select class="select select-bordered select-sm w-full">
                            <option selected>Urutkan: Terbaru</option>
                            <option>Urutkan: Terlama</option>
                            <option>Ukuran: Terbesar</option>
                            <option>Nama: A-Z</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>

        {{-- MEDIA GRID --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">

            {{-- Item 1: Gambar --}}
            <div class="group card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all overflow-hidden cursor-pointer"
                onclick="detail_modal.showModal()">
                <figure class="relative aspect-square bg-base-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=500&auto=format&fit=crop&q=60"
                        alt="Hero Banner CMS"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    <span
                        class="badge badge-neutral badge-xs absolute top-2 right-2 bg-black/60 text-white border-0 font-mono">WEBP</span>
                </figure>
                <div class="p-3">
                    <p class="text-xs font-semibold text-base-content truncate" title="hero-banner-cms.webp">
                        hero-banner-cms.webp</p>
                    <p class="text-[10px] text-base-content/50 mt-0.5">245 KB • 1920x1080</p>
                </div>
            </div>

            {{-- Item 2: Gambar --}}
            <div class="group card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all overflow-hidden cursor-pointer"
                onclick="detail_modal.showModal()">
                <figure class="relative aspect-square bg-base-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=500&auto=format&fit=crop&q=60"
                        alt="Abstract Graphic"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    <span
                        class="badge badge-neutral badge-xs absolute top-2 right-2 bg-black/60 text-white border-0 font-mono">PNG</span>
                </figure>
                <div class="p-3">
                    <p class="text-xs font-semibold text-base-content truncate" title="abstract-design.png">
                        abstract-design.png</p>
                    <p class="text-[10px] text-base-content/50 mt-0.5">1.2 MB • 2400x1600</p>
                </div>
            </div>

            {{-- Item 3: Dokumen PDF --}}
            <div class="group card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all overflow-hidden cursor-pointer"
                onclick="detail_modal.showModal()">
                <div
                    class="aspect-square bg-error/10 flex flex-col items-center justify-center p-4 text-error relative">
                    <x-icon name="file-text" class="size-12 group-hover:scale-110 transition-transform" />
                    <span class="badge badge-error badge-xs absolute top-2 right-2 text-white font-mono">PDF</span>
                </div>
                <div class="p-3">
                    <p class="text-xs font-semibold text-base-content truncate" title="Laporan-Tahunan-2026.pdf">
                        Laporan-Tahunan-2026.pdf</p>
                    <p class="text-[10px] text-base-content/50 mt-0.5">3.4 MB • PDF Document</p>
                </div>
            </div>

            {{-- Item 4: Gambar --}}
            <div class="group card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all overflow-hidden cursor-pointer"
                onclick="detail_modal.showModal()">
                <figure class="relative aspect-square bg-base-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?w=500&auto=format&fit=crop&q=60"
                        alt="Mockup App"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    <span
                        class="badge badge-neutral badge-xs absolute top-2 right-2 bg-black/60 text-white border-0 font-mono">JPG</span>
                </figure>
                <div class="p-3">
                    <p class="text-xs font-semibold text-base-content truncate" title="app-mockup.jpg">app-mockup.jpg
                    </p>
                    <p class="text-[10px] text-base-content/50 mt-0.5">850 KB • 1200x800</p>
                </div>
            </div>

            {{-- Item 5: File Arsip ZIP --}}
            <div class="group card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all overflow-hidden cursor-pointer"
                onclick="detail_modal.showModal()">
                <div
                    class="aspect-square bg-warning/10 flex flex-col items-center justify-center p-4 text-warning-content relative">
                    <x-icon name="archive" class="size-12 group-hover:scale-110 transition-transform text-warning" />
                    <span class="badge badge-warning badge-xs absolute top-2 right-2 text-xs font-mono">ZIP</span>
                </div>
                <div class="p-3">
                    <p class="text-xs font-semibold text-base-content truncate" title="assets-icons-v2.zip">
                        assets-icons-v2.zip</p>
                    <p class="text-[10px] text-base-content/50 mt-0.5">14.8 MB • Archive</p>
                </div>
            </div>

            {{-- Item 6: Gambar --}}
            <div class="group card bg-base-100 border border-base-300 shadow-sm hover:shadow-md transition-all overflow-hidden cursor-pointer"
                onclick="detail_modal.showModal()">
                <figure class="relative aspect-square bg-base-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=500&auto=format&fit=crop&q=60"
                        alt="Coding Workspace"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    <span
                        class="badge badge-neutral badge-xs absolute top-2 right-2 bg-black/60 text-white border-0 font-mono">WEBP</span>
                </figure>
                <div class="p-3">
                    <p class="text-xs font-semibold text-base-content truncate" title="developer-workspace.webp">
                        developer-workspace.webp</p>
                    <p class="text-[10px] text-base-content/50 mt-0.5">512 KB • 1600x1066</p>
                </div>
            </div>

        </div>

        {{-- PAGINASI --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-base-200">
            <span class="text-xs text-base-content/60">Menampilkan 1-6 dari 128 berkas</span>
            <div class="join">
                <button class="join-item btn btn-sm btn-disabled">«</button>
                <button class="join-item btn btn-sm btn-active">1</button>
                <button class="join-item btn btn-sm">2</button>
                <button class="join-item btn btn-sm">3</button>
                <button class="join-item btn btn-sm">»</button>
            </div>
        </div>

    </div>

    {{-- MODAL INCLUDE --}}
    @include('pages.admin.media.partials.upload-modal')
    @include('pages.admin.media.partials.detail-modal')

</x-layouts.admin>
