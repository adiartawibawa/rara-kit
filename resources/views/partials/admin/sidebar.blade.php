<aside
    class="flex min-h-full flex-col items-start bg-base-300 text-base-content is-drawer-close:w-16 is-drawer-open:w-64 transition-all duration-300">

    {{-- Brand / Logo --}}
    <div class="flex items-center h-16 w-full px-4 border-b border-base-300/50">
        <a href="{{ route('home') }}" class="flex items-center gap-3 font-bold text-lg overflow-hidden">
            <div class="btn btn-primary btn-square btn-sm shrink-0">
                {{ substr(config('app.name'), 0, 1) }}
            </div>
            <span class="is-drawer-close:hidden is-drawer-open:inline whitespace-nowrap">{{ config('app.name') }}</span>
        </a>
    </div>

    {{-- Navigation Links --}}
    <ul class="menu w-full grow p-2 gap-1 overflow-y-auto">

        {{-- Main Section --}}
        <li>
            <a href="{{ route('admin.dashboard') }}"
                class="is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-open:before:hidden is-drawer-open:after:hidden active"
                data-tip="Dashboard">
                <x-icon name="rocket" class="size-5 shrink-0" />
                <span class="is-drawer-close:hidden is-drawer-open:inline">Dashboard</span>
            </a>
        </li>

        {{-- Section: Content Management --}}
        <li
            class="menu-title is-drawer-close:hidden is-drawer-open:block text-xs font-bold uppercase tracking-wider text-base-content/50 mt-3">
            Manajemen Konten
        </li>

        {{-- Posts / Artikel --}}
        <li>
            <a href="{{ route('articles.index') }}"
                class="is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-open:before:hidden is-drawer-open:after:hidden"
                data-tip="Artikel / Posts">
                <x-icon name="newspaper" class="size-5 shrink-0" />
                <span class="is-drawer-close:hidden is-drawer-open:inline">Artikel / Posts</span>
            </a>
        </li>

        {{-- Pages / Halaman Statis --}}
        <li>
            <a href="{{ route('pages.index') }}"
                class="is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-open:before:hidden is-drawer-open:after:hidden"
                data-tip="Halaman">
                <x-icon name="panels-top-left" class="size-5 shrink-0" />
                <span class="is-drawer-close:hidden is-drawer-open:inline">Halaman Statis</span>
            </a>
        </li>

        {{-- Categories & Tags --}}
        <li>
            <a href="{{ route('categories.index') }}"
                class="is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-open:before:hidden is-drawer-open:after:hidden"
                data-tip="Kategori & Tag">
                <x-icon name="tags" class="size-5 shrink-0" />
                <span class="is-drawer-close:hidden is-drawer-open:inline">Kategori & Tag</span>
            </a>
        </li>

        {{-- Media Library --}}
        <li>
            <a href="{{ route('media.index') }}"
                class="is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-open:before:hidden is-drawer-open:after:hidden"
                data-tip="Galeri Media">
                <x-icon name="images" class="size-5 shrink-0" />
                <span class="is-drawer-close:hidden is-drawer-open:inline">Galeri Media</span>
            </a>
        </li>

        {{-- Comments --}}
        <li>
            <a href="#"
                class="is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-open:before:hidden is-drawer-open:after:hidden"
                data-tip="Komentar">
                <x-icon name="messages-square" class="size-5 shrink-0" />
                <span class="is-drawer-close:hidden is-drawer-open:flex justify-between items-center w-full">
                    <span>Komentar</span>
                    <span class="badge badge-sm badge-primary">3</span>
                </span>
            </a>
        </li>

        {{-- Section: System Administration --}}
        <li
            class="menu-title is-drawer-close:hidden is-drawer-open:block text-xs font-bold uppercase tracking-wider text-base-content/50 mt-3">
            Pengaturan Sistem
        </li>

        {{-- Users Management --}}
        <li>
            <a href="#"
                class="is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-open:before:hidden is-drawer-open:after:hidden"
                data-tip="Pengguna">
                <x-icon name="users" class="size-5 shrink-0" />
                <span class="is-drawer-close:hidden is-drawer-open:inline">Pengguna</span>
            </a>
        </li>

        {{-- Settings --}}
        <li>
            <a href="#"
                class="is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-open:before:hidden is-drawer-open:after:hidden"
                data-tip="Pengaturan">
                <x-icon name="settings-2" class="size-5 shrink-0" />
                <span class="is-drawer-close:hidden is-drawer-open:inline">Pengaturan</span>
            </a>
        </li>
    </ul>

</aside>
