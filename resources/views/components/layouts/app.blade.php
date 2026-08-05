@props([
    'title' => null,
    'description' => null,
    'keywords' => null,
    'image' => null,
    'minimalNav' => request()->routeIs('blog.*'),
])

<x-layouts.base :title="$title" :description="$description" :keywords="$keywords" :image="$image"
    class="min-h-screen antialiased flex flex-col scroll-smooth bg-base-200 text-base-content">
    {{-- ====================================================================
         DRAWER WRAPPER
    ==================================================================== --}}
    <div class="drawer">
        <input id="mobile-drawer" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex flex-col min-h-screen justify-between">
            <header class="fixed w-full top-5 z-50 px-4">
                {{-- Kirim variabel $minimalNav ke file navbar --}}
                @include('partials.navbar', ['minimalNav' => $minimalNav])
            </header>

            {{-- Menambahkan pt-20 agar konten tidak tertutup fixed header --}}
            <main class="flex-grow">
                {{ $slot }}
            </main>

            {{-- FOOTER --}}
            <footer id="kontak" class="border-t border-base-300 bg-base-100 scroll-mt-32">
                @include('partials.footer')
            </footer>
        </div>

        <!-- Sidebar drawer untuk mobile -->
        <div class="drawer-side z-[60]">
            <label for="mobile-drawer" aria-label="Tutup menu" class="drawer-overlay"></label>
            <ul class="menu bg-base-100 min-h-full w-72 p-4 text-sm">
                <li class="mb-4">
                    <span class="text-xl font-bold px-2">{{ config('app.name') }}</span>
                </li>

                {{-- TAMPILAN MENU MOBILE JIKA BERADA DI BLOG --}}
                @if ($minimalNav)
                    <li><a href="{{ url('/') }}" class="font-mono text-xs">← Kembali ke Beranda Utama</a></li>
                    <li><a href="{{ route('blog.index') }}" class="font-mono text-xs ">
                            Blog</a></li>
                    <li><a href="{{ url('/#tentang') }}">Tentang</a></li>
                    <li><a href="{{ url('/#layanan-sekolah') }}">Website Sekolah</a></li>
                    <li><a href="{{ url('/#layanan-bisnis') }}">Website Bisnis</a></li>
                    <li><a href="{{ url('/#portofolio') }}">Portofolio</a></li>

                    {{-- TAMPILAN MENU MOBILE JIKA BERADA DI HOMEPAGE --}}
                @else
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
                    <li><a href="{{ route('blog.index') }}" class="">Blog</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                @endif

                <li class="mt-auto pt-6">
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-block">Dashboard</a>
                    @else
                        <a href="{{ $minimalNav ? url('/#kontak') : '#kontak' }}" class="btn btn-primary btn-block">Hubungi
                            Kami</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</x-layouts.base>
