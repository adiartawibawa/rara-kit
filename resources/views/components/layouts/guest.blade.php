@props([
    'title' => 'Authentication',
    'heroTitle' => 'Capturing Moments, Creating Memories',
    'heroImage' =>
        'https://images.unsplash.com/photo-1565065526877-22bbef5dd560?q=80&w=1084&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
])

<x-layouts.base :title="$title"
    class="h-screen w-screen overflow-hidden p-0 m-0 min-h-screen antialiased bg-base-200 text-base-content">
    {{-- Main Container Full Screen --}}
    <div class="w-full h-full grid grid-cols-1 lg:grid-cols-2 p-4">
        {{-- Sisi Kiri: Visual Banner (Full Height) --}}
        <div class="relative hidden lg:flex flex-col justify-between overflow-hidden p-12 bg-cover bg-center h-full rounded-3xl"
            style="background-image: url('{{ $heroImage }}');">

            {{-- Fixed Gradient Overlay (Posisi Absolute untuk menutupi seluruh background) --}}
            <div class="absolute inset-0 bg-linear-to-tr from-primary/50 via-black/30 to-secondary/50 z-0"></div>

            {{-- Top Row: Logo & Back Link --}}
            <div class="flex items-center justify-between z-10">
                <a href="/" class="text-2xl font-bold tracking-wider text-white font-mono">
                    {{ config('app.name') }}
                </a>
                <a href="/"
                    class="btn btn-xs sm:btn-sm btn-ghost bg-white/10 hover:bg-white/20 text-white rounded-full border-0 normal-case font-normal backdrop-blur-md px-4">
                    Back to website <span class="ml-1">→</span>
                </a>
            </div>

            {{-- Bottom Row: Tagline & Carousel Indicators --}}
            <div class="space-y-6 z-10">
                <h2 class="text-4xl font-semibold leading-snug text-white max-w-md">
                    {{ $heroTitle }}
                </h2>

                {{-- Slider Indicators --}}
                <div class="flex items-center gap-2">
                    <span class="h-1 w-6 bg-white/30 rounded-full"></span>
                    <span class="h-1 w-6 bg-white/30 rounded-full"></span>
                    <span class="h-1 w-10 bg-white rounded-full"></span>
                </div>
            </div>
        </div>

        {{-- Sisi Kanan: Slot Form (Scrollable jika layar HP pendek) --}}
        <div class="h-full overflow-y-auto p-8 sm:p-16 flex flex-col justify-center">
            <div class="w-full max-w-md mx-auto">
                {{ $slot }}
            </div>
        </div>

    </div>
</x-layouts.base>
