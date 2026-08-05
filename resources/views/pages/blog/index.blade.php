<x-layouts.base title="Blog & Artikel" description="Temukan berbagai artikel menarik, panduan, dan wawasan terbaru.">

    <div class="min-h-screen bg-base-100 text-base-content font-sans antialiased">

        {{-- Section 1: Hero Header & Search --}}
        <header class="border-b border-base-200 bg-base-200/40 py-16">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center space-y-4">
                <span class="badge badge-primary badge-outline font-semibold tracking-wide uppercase text-xs">
                    Wawasan & Jurnal
                </span>
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">
                    Cerita, Tutorial & Pemikiran
                </h1>
                <p class="text-base-content/70 max-w-xl mx-auto text-base sm:text-lg">
                    Eksplorasi kumpulan artikel terbaru mengenai teknologi, desain, dan pengembangan diri.
                </p>

                {{-- Filter Kategori Ringkas --}}
                <div class="flex flex-wrap justify-center gap-2 pt-4">
                    <a href="#" class="btn btn-sm btn-primary">Semua</a>
                    <a href="#" class="btn btn-sm btn-ghost">Teknologi</a>
                    <a href="#" class="btn btn-sm btn-ghost">Desain</a>
                    <a href="#" class="btn btn-sm btn-ghost">Tutorial</a>
                    <a href="#" class="btn btn-sm btn-ghost">Tips & Trik</a>
                </div>
            </div>
        </header>

        <main class="max-w-5xl mx-auto px-4 sm:px-6 py-12 space-y-16">

            {{-- Section 2: Featured Article (Artikel Utama) --}}
            @if (isset($featuredArticle) || true)
                {{-- Dummy fallback untuk preview --}}
                <section>
                    <article
                        class="group grid grid-cols-1 md:grid-cols-12 gap-8 items-center rounded-2xl border border-base-200 bg-base-100 p-4 sm:p-6 transition-all hover:shadow-lg">
                        <div class="md:col-span-7 overflow-hidden rounded-xl bg-base-200 aspect-[16/9]">
                            <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1200&auto=format&fit=crop"
                                alt="Featured Article"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        </div>
                        <div class="md:col-span-5 space-y-3">
                            <div class="flex items-center gap-2 text-xs text-base-content/60">
                                <span class="badge badge-sm badge-secondary font-mono">Teknologi</span>
                                <span>•</span>
                                <span>5 min baca</span>
                            </div>
                            <h2 class="text-2xl font-bold group-hover:text-primary transition-colors leading-snug">
                                <a href="#">Membangun Aplikasi Web Modern dengan Arsitektur Minimalis</a>
                            </h2>
                            <p class="text-sm text-base-content/70 line-clamp-3 leading-relaxed">
                                Panduan praktis bagaimana mengeliminasi elemen yang tidak perlu untuk meningkatkan
                                kecepatan, performa, dan kenyamanan pengguna.
                            </p>
                            <div class="pt-2 flex items-center justify-between text-xs text-base-content/60">
                                <span>Oleh <strong>Alex Rivera</strong></span>
                                <span>05 Ags 2026</span>
                            </div>
                        </div>
                    </article>
                </section>
            @endif

            {{-- Section 3: Grid Artikel --}}
            <section class="space-y-6">
                <div class="flex items-center justify-between border-b border-base-200 pb-3">
                    <h3 class="text-xl font-bold">Artikel Terbaru</h3>
                    <span class="text-xs text-base-content/60">Menampilkan {{ count($articles ?? [1, 2, 3, 4, 5, 6]) }}
                        artikel</span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($articles ?? [1, 2, 3, 4, 5, 6] as $article)
                        <article
                            class="group flex flex-col justify-between border border-base-200 rounded-xl bg-base-100 overflow-hidden hover:border-base-300 hover:shadow-md transition-all">
                            <div>
                                {{-- Thumbnail --}}
                                <div class="aspect-[16/10] overflow-hidden bg-base-200">
                                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=600&auto=format&fit=crop"
                                        alt="Thumbnail"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                                </div>

                                {{-- Body --}}
                                <div class="p-5 space-y-2">
                                    <div class="flex items-center gap-2 text-xs text-base-content/60">
                                        <span class="badge badge-ghost badge-xs font-mono">Tutorial</span>
                                        <span>•</span>
                                        <span>3 min baca</span>
                                    </div>
                                    <h4
                                        class="font-bold text-base group-hover:text-primary transition-colors line-clamp-2">
                                        <a href="#">Cara Mengoptimalkan Performa Blade Template pada Laravel</a>
                                    </h4>
                                    <p class="text-xs text-base-content/70 line-clamp-2 leading-relaxed">
                                        Teknik sederhana merapi UI dan menjaga struktur komponen Blade tetap modular
                                        tanpa menurunkan kecepatan muat.
                                    </p>
                                </div>
                            </div>

                            {{-- Footer Metadata --}}
                            <div
                                class="px-5 pb-5 pt-2 flex items-center justify-between text-xs text-base-content/50 border-t border-base-100">
                                <span>Admin</span>
                                <span>02 Ags 2026</span>
                            </div>
                        </article>
                    @empty
                        <div class="col-span-full py-12 text-center text-base-content/60">
                            Belum ada artikel yang diterbitkan.
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="pt-8 flex justify-center">
                    <div class="join">
                        <button class="join-item btn btn-sm btn-outline">«</button>
                        <button class="join-item btn btn-sm btn-outline btn-active">1</button>
                        <button class="join-item btn btn-sm btn-outline">2</button>
                        <button class="join-item btn btn-sm btn-outline">»</button>
                    </div>
                </div>
            </section>

        </main>
    </div>
</x-layouts.base>
