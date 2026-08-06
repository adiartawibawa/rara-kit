{{-- FOOTER --}}
<div class="relative overflow-hidden max-w-7xl mx-auto px-5 border-b border-base-300">

    {{-- Background Illustration — membentang di belakang newsletter + navigasi + copyright --}}
    <div class="absolute z-0 -right-6 md:-right-10 bottom-0 pointer-events-none select-none" aria-hidden="true">
        {{-- <x-sitting-reading class="w-72 md:w-96 lg:w-[28rem] opacity-75 h-auto" /> --}}
    </div>

    {{-- BAGIAN NEWSLETTER --}}
    <div class="relative z-10 py-16">
        <div class="max-w-2xl mb-8">
            <div class="eyebrow mb-3 text-secondary font-mono text-xs uppercase tracking-wider">Newsletter</div>
            <h3 class="font-display text-2xl md:text-3xl font-medium mb-3">
                Langganan Wawasan Eksklusif
            </h3>
            <p class="text-sm leading-relaxed text-base-content/70">
                Dapatkan pembaruan rutin seputar tren pengembangan web, analisis teknologi pendidikan,
                serta studi kasus mendalam — dikirim langsung ke email Anda setiap bulan.
            </p>
        </div>

        @php
            $newsletterAction = Route::has('newsletter.subscribe') ? route('newsletter.subscribe') : '#';
        @endphp

        <form class="join max-w-md w-full" method="POST" action="{{ $newsletterAction }}">
            @csrf
            <input type="email" name="email" placeholder="Masukkan alamat email aktif"
                class="input input-bordered join-item w-full focus:outline-none focus:ring-2 focus:ring-primary/30"
                required />
            <button type="submit" class="btn btn-primary join-item font-semibold px-6">Berlangganan</button>
        </form>

        @if (session('newsletter_success'))
            <p class="text-sm text-success mt-3 font-medium">{{ session('newsletter_success') }}</p>
        @endif

        @if (session('newsletter_error'))
            <p class="text-sm text-error mt-3 font-medium">{{ session('newsletter_error') }}</p>
        @endif
    </div>

    {{-- BAGIAN NAVIGASI / PETA SITUS --}}
    <div class="relative z-10 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

        {{-- Kolom 1: Profil Singkat --}}
        <div class="lg:col-span-1">
            <a href="{{ url('/') }}" class="font-display text-xl font-semibold tracking-tight">
                {{ config('app.name') }}
            </a>
            <p class="text-sm mt-5 leading-relaxed text-base-content/70">
                Mitra terpercaya dalam transformasi digital — menghadirkan solusi teknologi
                yang terukur, aman, dan berorientasi pada kemajuan bisnis serta pendidikan.
            </p>
            <div class="flex gap-5 mt-6">
                <a href="https://linkedin.com/in/a" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
                    class="text-base-content/60 hover:text-primary transition-colors duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>
                <a href="https://github.com/a" target="_blank" rel="noopener noreferrer" aria-label="GitHub"
                    class="text-base-content/60 hover:text-primary transition-colors duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="https://twitter.com/a" target="_blank" rel="noopener noreferrer" aria-label="Twitter"
                    class="text-base-content/60 hover:text-primary transition-colors duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- Kolom 2: Navigasi Utama --}}
        <div>
            <h4 class="eyebrow mb-6 text-base-content/50 text-xs font-mono uppercase tracking-wider">Navigasi</h4>
            <ul class="flex flex-col gap-3 text-sm font-medium">
                <li><a href="{{ url('/#layanan') }}" class="hover:text-primary transition-colors duration-200">Layanan
                        Kami</a></li>
                <li><a href="{{ url('/#portofolio') }}"
                        class="hover:text-primary transition-colors duration-200">Portofolio Proyek</a></li>
                <li><a href="{{ Route::has('articles.index') ? route('articles.index') : url('/#artikel') }}"
                        class="hover:text-primary transition-colors duration-200">Blog & Artikel</a></li>
                <li><a href="{{ url('/tentang') }}" class="hover:text-primary transition-colors duration-200">Tentang
                        Kami</a></li>
            </ul>
        </div>

        {{-- Kolom 3: Kompetensi Teknis --}}
        <div>
            <h4 class="eyebrow mb-6 text-base-content/50 text-xs font-mono uppercase tracking-wider">Kompetensi</h4>
            <ul class="flex flex-col gap-3 text-sm text-base-content/70">
                <li class="flex items-start gap-2"><span class="text-primary mt-0.5">▸</span> Pengembangan Backend & API
                </li>
                <li class="flex items-start gap-2"><span class="text-primary mt-0.5">▸</span> Frontend Interaktif &
                    Responsif</li>
                <li class="flex items-start gap-2"><span class="text-primary mt-0.5">▸</span> Integrasi Sistem & Cloud
                </li>
                <li class="flex items-start gap-2"><span class="text-primary mt-0.5">▸</span> Keamanan Siber & Audit
                    Teknis</li>
            </ul>
        </div>

        {{-- Kolom 4: Kontak & Kolaborasi --}}
        <div>
            <h4 class="eyebrow mb-6 text-base-content/50 text-xs font-mono uppercase tracking-wider">Kolaborasi</h4>
            <ul class="flex flex-col gap-5 text-sm">
                <li>
                    <span class="block text-xs font-mono text-base-content/50 uppercase tracking-wider mb-1">Email
                        Bisnis</span>
                    <a href="#"
                        class="link link-primary no-underline hover:underline font-medium text-base">kontak@rara.kit</a>
                </li>
                <li>
                    <span
                        class="block text-xs font-mono text-base-content/50 uppercase tracking-wider mb-1">Status</span>
                    <div class="flex items-center gap-2 text-primary font-medium">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        Buka untuk Kolaborasi
                    </div>
                    <p class="text-xs text-base-content/50 mt-1">Remote • Fleksibel</p>
                </li>
                <li>
                    <span class="block text-xs font-mono text-base-content/50 uppercase tracking-wider mb-1">Jam
                        Kerja</span>
                    <span class="text-sm font-medium">Senin - Jumat, 09.00 - 17.00 WIB</span>
                </li>
            </ul>
        </div>
    </div>

    {{-- COPYRIGHT --}}
    <div
        class="relative z-10 py-6 border-t border-base-300 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs font-mono text-base-content/50">
        <p>© {{ date('Y') }} {{ config('app.name') }}.
            <span class="hidden sm:inline">•</span>
            <span class="block sm:inline">Seluruh hak cipta dilindungi.</span>
        </p>
        <div class="flex gap-4">
            <a href="{{ url('/kebijakan-privasi') }}"
                class="hover:text-primary transition-colors duration-200">Kebijakan Privasi</a>
            <span class="text-base-content/30">|</span>
            <a href="{{ url('/syarat-ketentuan') }}" class="hover:text-primary transition-colors duration-200">Syarat &
                Ketentuan</a>
        </div>
    </div>
</div>
