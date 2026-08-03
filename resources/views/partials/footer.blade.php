<div class="max-w-7xl mx-auto px-5 py-16 border-b border-base-300">
    <div class="max-w-2xl mb-8">
        <div class="eyebrow mb-3 text-secondary">Buletin</div>
        <h3 class="font-display text-2xl md:text-3xl font-medium mb-3">Berlangganan catatan
            profesional</h3>
        <p class="text-sm leading-relaxed text-base-content/70">
            Pembaruan berkala mengenai tren rekayasa web, wawasan edukasi teknologi, dan
            studi kasus eksklusif — langsung ke kotak masuk Anda.
        </p>
    </div>
    {{-- Sesuaikan nama route 'newsletter.subscribe' dengan route yang benar-benar
                         kamu daftarkan di routes/web.php. Ganti action="#" lama karena itu
                         hanya reload halaman tanpa mengirim data apa pun. --}}
    @if (Route::has('newsletter.subscribe'))
        <form class="join max-w-md" method="POST" action="{{ route('newsletter.subscribe') }}">
        @else
            <form class="join max-w-md" method="POST" action="#">
    @endif
    @csrf
    <input type="email" name="email" placeholder="Alamat surel resmi Anda"
        class="input input-bordered join-item w-full focus:outline-none" required />
    <button type="submit" class="btn btn-primary join-item font-semibold">Daftar</button>
    </form>
</div>

<div class="max-w-7xl mx-auto px-5 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

    <div class="lg:col-span-1">
        <a href="/" class="font-display text-xl font-semibold tracking-tight">
            {{ config('app.name', 'Ahmad — Studi & Studio') }}
        </a>
        <p class="text-sm mt-5 leading-relaxed text-base-content/70">
            Solusi digital yang terukur dan elegan — mendukung akselerasi digitalisasi
            bisnis dan pendidikan masa kini.
        </p>
        <div class="flex gap-5 mt-6">
            <a href="#" aria-label="LinkedIn" class="text-base-content/60 hover:text-primary transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                </svg>
            </a>
            <a href="#" aria-label="GitHub" class="text-base-content/60 hover:text-primary transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>

    <div>
        <h4 class="eyebrow mb-6 text-base-content/50">Peta Situs</h4>
        <ul class="flex flex-col gap-3 text-sm font-medium">
            <li><a href="#layanan" class="hover:text-primary transition-colors">Silabus Layanan</a>
            </li>
            <li><a href="#portofolio" class="hover:text-primary transition-colors">Katalog
                    Portofolio</a></li>
            <li><a href="#artikel" class="hover:text-primary transition-colors">Publikasi
                    Terkini</a></li>
        </ul>
    </div>

    <div>
        <h4 class="eyebrow mb-6 text-base-content/50">Spesialisasi Teknis</h4>
        <ul class="flex flex-col gap-3 text-sm font-medium text-base-content/70">
            <li>Infrastruktur Web (Backend)</li>
            <li>Antarmuka Interaktif (Frontend)</li>
            <li>Integrasi Sistem Eksternal (API)</li>
        </ul>
    </div>

    <div>
        <h4 class="eyebrow mb-6 text-base-content/50">Inisiasi Kolaborasi</h4>
        <ul class="flex flex-col gap-5 text-sm">
            <li>
                <span class="block font-semibold mb-1">Pertanyaan Umum & Bisnis</span>
                <a href="mailto:kontak@ahmad.dev"
                    class="link link-primary no-underline hover:underline font-medium">kontak@ahmad.dev</a>
            </li>
            <li>
                <span class="block font-semibold mb-1">Status Ketersediaan</span>
                <span class="font-medium flex items-center gap-2 text-primary">
                    <span class="badge badge-primary badge-xs" aria-hidden="true"></span>
                    Menerima Klien Baru (Remote Work)
                </span>
            </li>
        </ul>
    </div>
</div>

<div
    class="max-w-7xl mx-auto px-5 py-6 border-t border-base-300 flex justify-between items-center text-xs font-mono text-base-content/50">
    <p>© {{ date('Y') }} {{ config('app.name', 'Ahmad — Studi & Studio') }}. Seluruh hak cipta
        dilindungi.</p>
</div>
