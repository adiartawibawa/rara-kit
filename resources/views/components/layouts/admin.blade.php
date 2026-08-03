<x-layouts.base :title="$title" robots="noindex, nofollow">
    <div class="drawer lg:drawer-open min-h-screen">
        {{-- Toggle Checkbox untuk Mini Sidebar --}}
        <input id="admin-drawer" type="checkbox" class="drawer-toggle" />

        {{-- Content Area --}}
        <div class="drawer-content flex flex-col min-h-screen bg-base-200">
            {{-- Top Navbar --}}
            @include('partials.admin.navbar')

            {{-- Main Wrapper dengan Sudut Lengkung Lengkap --}}
            <div
                class="flex-1 flex flex-col ml-0 lg:ml-0 lg:rounded-tl-2xl overflow-hidden shadow-sm bg-base-100 border border-base-200">

                {{-- Optional Header Section --}}
                @if (isset($header) && $header)
                    <header class="px-6 py-4">

                        {{ $header }}

                    </header>
                @endif

                {{-- Main Dynamic Content --}}
                <main class="flex-1 p-6">
                    {{ $slot }}
                </main>

                {{-- Optional Admin Footer --}}
                @include('partials.admin.footer')
            </div>
        </div>

        {{-- Sidebar Area --}}
        <div class="drawer-side z-40 is-drawer-close:overflow-visible">
            <label for="admin-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            @include('partials.admin.sidebar')
        </div>
    </div>
</x-layouts.base>
