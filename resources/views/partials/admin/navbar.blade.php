<header class="navbar w-full bg-base-300 sticky top-0 z-30 pr-8">
    {{-- Left Side: Toggle Sidebar Button & Title --}}
    <div class="flex-1 gap-2">
        <label for="admin-drawer" aria-label="Toggle sidebar"
            class="btn btn-square btn-ghost drawer-button cursor-pointer">

            {{-- Ikon Buka: Tampil saat sidebar TERTUTUP (sidebarOpen = false) --}}
            <span x-show="!sidebarOpen" x-cloak>
                <x-icon name="panel-left-open" class="size-6" />
            </span>

            {{-- Ikon Tutup: Tampil saat sidebar TERBUKA (sidebarOpen = true) --}}
            <span x-show="sidebarOpen" x-cloak>
                <x-icon name="panel-left-close" class="size-6" />
            </span>
        </label>

        <span class="font-semibold text-lg hidden sm:inline-block">Panel Admin</span>
    </div>

    {{-- Right Side: User Profile & Actions --}}
    <div class="flex-none gap-2">
        {{-- Profile Dropdown --}}
        <div class="dropdown dropdown-end">
            {{-- Trigger Avatar Button --}}
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar avatar-online">
                <div class="w-9 rounded-full ring ring-primary ring-offset-2 ring-offset-base-100">
                    <img alt="{{ auth()->user()->name ?? 'User Avatar' }}"
                        src="{{ auth()->user()->avatar_url ?? 'https://images.unsplash.com/photo-1711024068831-047ae32c247f?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" />
                </div>
            </div>

            {{-- Dropdown Menu --}}
            <ul tabindex="0"
                class="dropdown-content menu menu-sm mt-3 z-50 w-60 rounded-2xl border border-base-200 bg-base-100 p-2 shadow-xl">

                {{-- User Info Header --}}
                <li class="mb-1 border-b border-base-200 pb-2 pt-1 px-3">
                    <div class="flex flex-col gap-0.5 p-0 hover:bg-transparent">
                        <span class="font-bold text-base-content line-clamp-1">
                            {{ auth()->user()->name ?? 'Administrator' }}
                        </span>
                        <span class="text-xs text-base-content/60 line-clamp-1">
                            {{ auth()->user()->email ?? 'admin@example.com' }}
                        </span>
                    </div>
                </li>

                {{-- Menu Items --}}
                <li>
                    <a href="{{ route('profile.show') }}" class="py-2">
                        <x-icon name="id-card-lanyard" class="size-5 shrink-0 text-base-content/70" />
                        Profil Saya
                    </a>
                </li>
                <li>
                    <a href="{{ route('preferences.index') }}" class="py-2">
                        <x-icon name="sliders-horizontal" class="size-5 shrink-0 text-base-content/70" />
                        Preferensi Saya
                    </a>
                </li>

                {{-- Divider --}}
                <li class="my-1 border-t border-base-200"></li>

                {{-- Logout Form --}}
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button type="submit" class="flex w-full items-center gap-2 py-2 text-error btn-ghost">
                            <x-icon name="unplug" class="size-5 shrink-0" />
                            Keluar
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
