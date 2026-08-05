@props([
    'title' => null,
    'description' => null,
    'keywords' => null,
    'image' => null,
])

<x-layouts.base :title="$title" :description="$description" :keywords="$keywords" :image="$image"
    class="min-h-screen antialiased flex flex-col scroll-smooth bg-base-200 text-base-content">
    {{-- ====================================================================
         DRAWER WRAPPER
         Membungkus seluruh halaman (header + main) karena pola daisyUI
         mengharuskan drawer-content & drawer-side sejajar sebagai
         sibling di dalam .drawer.
    ==================================================================== --}}
    <div class="drawer">
        <input id="mobile-drawer" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex flex-col">
            <header class="fixed w-full top-5 z-50 px-4">
                @include('partials.navbar')
            </header>

            <main>
                {{ $slot }}
            </main>

            {{-- ================================================================
                 FOOTER
                 FIX: form newsletter sebelumnya action="#" tanpa method/@csrf/name
                 pada input — submit tidak akan pernah sampai ke server Laravel.
            ================================================================ --}}
            <footer id="kontak" class="border-t border-base-300 bg-base-100 scroll-mt-32">
                @include('partials.footer')
            </footer>
        </div>

        <!-- Sidebar drawer untuk mobile -->
        <div class="drawer-side z-[60]">
            <label for="mobile-drawer" aria-label="Tutup menu" class="drawer-overlay"></label>
            <ul class="menu bg-base-100 min-h-full w-72 p-4">
                <li class="mb-4">
                    <span class="text-xl font-bold px-2">{{ config('app.name') }}</span>
                </li>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li>
                    <details open>
                        <summary>Layanan</summary>
                        <ul>
                            <li><a href="#layanan-sekolah">Website Sekolah</a></li>
                            <li><a href="#layanan-bisnis">Website Bisnis</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="#portofolio">Portofolio</a></li>
                <li><a href="#kontak">Kontak</a></li>
                <li class="mt-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-block">Dashboard</a>
                    @else
                        <a href="#kontak" class="btn btn-primary btn-block">Hubungi Kami</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</x-layouts.base>
