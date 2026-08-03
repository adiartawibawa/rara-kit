{{-- resources/views/partials/sidebar.blade.php --}}
<aside
    class="flex min-h-full flex-col items-start bg-base-200 text-base-content is-drawer-close:w-16 is-drawer-open:w-64 transition-all duration-300">

    {{-- Brand / Logo --}}
    <div class="flex items-center h-16 w-full px-4 border-b border-base-300/50">
        <a href="{{ route('home') }}" class="flex items-center gap-3 font-bold text-lg overflow-hidden">
            <div class="btn btn-primary btn-square btn-sm">
                {{ substr(config('app.name'), 0, 1) }}
            </div>
            <span class="is-drawer-close:hidden whitespace-nowrap">{{ config('app.name') }}</span>
        </a>
    </div>

    {{-- Navigation Links --}}
    <ul class="menu w-full grow p-2 gap-1 overflow-y-auto">

        {{-- Main Section --}}
        <li>
            <a href="#" class="is-drawer-close:tooltip is-drawer-close:tooltip-right active" data-tip="Dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                    stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                    class="size-5 shrink-0">
                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                    <path
                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                    </path>
                </svg>
                <span class="is-drawer-close:hidden">Dashboard</span>
            </a>
        </li>

        {{-- Section: Content Management --}}
        <li
            class="menu-title is-drawer-close:hidden text-xs font-bold uppercase tracking-wider text-base-content/50 mt-3">
            Manajemen Konten
        </li>

        {{-- Posts / Artikel --}}
        <li>
            <a href="#" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Artikel / Posts">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                <span class="is-drawer-close:hidden">Artikel / Posts</span>
            </a>
        </li>

        {{-- Pages / Halaman Statis --}}
        <li>
            <a href="#" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Halaman">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="is-drawer-close:hidden">Halaman Statis</span>
            </a>
        </li>

        {{-- Categories & Tags --}}
        <li>
            <a href="#" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Kategori & Tag">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0">
                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                    <line x1="7" y1="7" x2="7.01" y2="7"></line>
                </svg>
                <span class="is-drawer-close:hidden">Kategori & Tag</span>
            </a>
        </li>

        {{-- Media Library --}}
        <li>
            <a href="#" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Galeri Media">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                    <polyline points="21 15 16 10 5 21"></polyline>
                </svg>
                <span class="is-drawer-close:hidden">Galeri Media</span>
            </a>
        </li>

        {{-- Comments --}}
        <li>
            <a href="#" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Komentar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
                <span class="is-drawer-close:hidden flex justify-between items-center w-full">
                    <span>Komentar</span>
                    <span class="badge badge-sm badge-primary">3</span>
                </span>
            </a>
        </li>

        {{-- Section: System Administration --}}
        <li
            class="menu-title is-drawer-close:hidden text-xs font-bold uppercase tracking-wider text-base-content/50 mt-3">
            Pengaturan Sistem
        </li>

        {{-- Users Management --}}
        <li>
            <a href="#" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Pengguna">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span class="is-drawer-close:hidden">Pengguna</span>
            </a>
        </li>

        {{-- Settings --}}
        <li>
            <a href="#" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Pengaturan">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                    stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                    class="size-5 shrink-0">
                    <path d="M20 7h-9"></path>
                    <path d="M14 17H5"></path>
                    <circle cx="17" cy="17" r="3"></circle>
                    <circle cx="7" cy="7" r="3"></circle>
                </svg>
                <span class="is-drawer-close:hidden">Pengaturan</span>
            </a>
        </li>
    </ul>

</aside>
