<x-layouts.base :title="$article->title ?? 'Membangun Aplikasi Web Modern dengan Arsitektur Minimalis'" :description="$article->excerpt ?? 'Deskripsi singkat artikel untuk meta SEO.'"[cite: 5]>

    <div class="min-h-screen bg-base-100 text-base-content font-sans antialiased py-12">

        <article class="max-w-3xl mx-auto px-4 sm:px-6 space-y-8">

            {{-- Tombol Kembali --}}
            <div>
                <a href="{{ route('articles.index') }}"
                    class="inline-flex items-center gap-2 text-xs font-semibold text-base-content/60 hover:text-primary transition-colors">
                    <x-icon name="arrow-left" class="size-4" />
                    Kembali ke Blog
                </a>
            </div>

            {{-- Header Artikel --}}
            <header class="space-y-4 text-center sm:text-left">
                <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 text-xs">
                    <span class="badge badge-primary badge-outline font-mono font-semibold">Teknologi</span>
                    <span class="text-base-content/50">•</span>
                    <span class="text-base-content/60">Diterbitkan 05 Agustus 2026</span>
                    <span class="text-base-content/50">•</span>
                    <span class="text-base-content/60">5 menit membaca</span>
                </div>

                <h1
                    class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-base-content leading-tight">
                    {{ $article->title ?? 'Membangun Aplikasi Web Modern dengan Arsitektur Minimalis' }}
                </h1>

                <p class="text-lg text-base-content/70 leading-relaxed font-normal">
                    {{ $article->excerpt ?? 'Panduan praktis bagaimana mengeliminasi elemen yang tidak perlu untuk meningkatkan kecepatan, performa, dan kenyamanan pengguna.' }}
                </p>

                {{-- Author Info Bar --}}
                <div
                    class="pt-4 flex items-center justify-center sm:justify-start gap-3 border-t border-b border-base-200 py-3">
                    <div class="avatar">
                        <div class="w-10 rounded-full">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop"
                                alt="Author" />
                        </div>
                    </div>
                    <div class="text-left">
                        <p class="text-sm font-bold leading-none">{{ $article->author->name ?? 'Alex Rivera' }}</p>
                        <p class="text-xs text-base-content/60">Senior Web Developer</p>
                    </div>
                </div>
            </header>

            {{-- Gambar Utama (Cover Image) --}}
            <figure class="rounded-2xl overflow-hidden bg-base-200 aspect-[16/9]">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1200&auto=format&fit=crop"
                    alt="Cover Image" class="w-full h-full object-cover" />
            </figure>

            {{-- Konten Utama Artikel (Typography / Body) --}}
            <div class="prose prose-lg max-w-none text-base-content/90 leading-relaxed space-y-6">
                <p>
                    Dalam dunia pengembangan web modern, sering kali kita terjebak menambahkan terlalu banyak pustaka,
                    efek visual, dan elemen antarmuka yang tidak esensial. Padahal, esensi utama dari sebuah situs web
                    atau aplikasi adalah <strong>kejelasan informasi dan kemudahan navigasi</strong>.
                </p>

                <h2 class="text-2xl font-bold text-base-content pt-4">1. Kurangi Beban Kognitif Pengguna</h2>
                <p>
                    Desain minimalis bukan sekadar tren visual, melainkan strategi fungsional. Saat layout dipenuhi
                    dengan tombol, spanduk, dan animasi yang saling berberebut perhatian, pengguna menjadi cepat lelah
                    secara kognitif.
                </p>

                <blockquote class="border-l-4 border-primary pl-4 italic text-base-content/80 my-6">
                    "Kesederhanaan adalah tingkat kecanggihan tertinggi." — Leonardo da Vinci
                </blockquote>

                <h2 class="text-2xl font-bold text-base-content pt-4">2. Fokus pada Performa & Kecepatan</h2>
                <p>
                    Menggunakan framework secara bijak, memanfaatkan teknik <em>lazy loading</em>, serta mengurangi
                    sintaks CSS yang berlebihan adalah kunci menciptakan halaman web yang responsif.
                </p>

                <ul class="list-disc list-inside space-y-2">
                    <li>Gunakan utilitas CSS seperti Tailwind untuk styling atomic.</li>
                    <li>Batasi penggunaan font eksternal maksimal 2 keluarga font.</li>
                    <li>Kompresi seluruh aset gambar sebelum dimuat.</li>
                </ul>
            </div>

            {{-- Footer Artikel: Share & Tags --}}
            <footer
                class="pt-8 border-t border-base-200 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <span class="text-xs font-semibold text-base-content/60">Tag:</span>
                    <a href="#" class="badge badge-ghost badge-sm">Laravel</a>
                    <a href="#" class="badge badge-ghost badge-sm">Tailwind</a>
                    <a href="#" class="badge badge-ghost badge-sm">UI/UX</a>
                </div>

                {{-- Action Share --}}
                <div class="flex items-center gap-2">
                    <span class="text-xs font-semibold text-base-content/60">Bagikan:</span>
                    <button class="btn btn-circle btn-ghost btn-xs" title="Bagikan ke Twitter">
                        <x-icon name="share-2" class="size-4" />
                    </button>
                    <button class="btn btn-circle btn-ghost btn-xs" title="Salin Tautan">
                        <x-icon name="link" class="size-4" />
                    </button>
                </div>
            </footer>

            {{-- Section Artikel Terkait --}}
            <section class="pt-12 border-t border-base-200 space-y-6">
                <h3 class="text-xl font-bold">Artikel Terkait</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @for ($i = 1; $i <= 2; $i++)
                        <a href="#"
                            class="group block p-4 rounded-xl border border-base-200 hover:border-base-300 transition-all">
                            <span class="text-xs text-base-content/50 font-mono">Tips & Trik</span>
                            <h4 class="font-bold text-base group-hover:text-primary transition-colors mt-1">
                                Rahasia Menjaga Performa Database Laravel Tetap Ringan
                            </h4>
                            <span class="text-xs text-base-content/60 mt-2 block">01 Ags 2026 • 4 min baca</span>
                        </a>
                    @endfor
                </div>
            </section>

        </article>
    </div>
</x-layouts.base>
