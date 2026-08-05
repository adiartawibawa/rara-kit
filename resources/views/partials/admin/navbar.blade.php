<header class="navbar w-full bg-base-300 sticky top-0 z-30 pr-8">
    {{-- Left Side: Toggle Sidebar Button & Title --}}
    <div class="flex-1 gap-2">
        <label for="admin-drawer" aria-label="open sidebar" class="btn btn-square btn-ghost drawer-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round" stroke-linecap="round"
                stroke-width="2" fill="none" stroke="currentColor" class="size-5">
                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                <path d="M9 4v16"></path>
                <path d="M14 10l2 2l-2 2"></path>
            </svg>
        </label>

        <span class="font-semibold text-lg hidden sm:inline-block">Panel Admin</span>
    </div>

    {{-- Right Side: User Profile & Actions --}}
    <div class="flex-none gap-2">
        {{-- Profile Dropdown --}}
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar avatar-online">
                <div class="w-9 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img alt="User Avatar"
                        src="https://images.unsplash.com/photo-1711024068831-047ae32c247f?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content mt-1 z-1 p-2 shadow-lg bg-base-100 rounded-box w-52 border border-base-300">
                <li class="menu-title py-2">
                    <span>{{ auth()->user()->name ?? 'Administrator' }}</span>
                </li>
                <li>
                    <a href="{{ route('profile.show') }}">
                        <x-icon name="id-card-lanyard" class="size-5 shrink-0" />
                        Profil Saya
                    </a>
                </li>
                <li>
                    <a href="{{ route('preferences.index') }}">
                        <x-icon name="sliders-horizontal" class="size-5 shrink-0" />
                        Preferensi Saya
                    </a>
                </li>
                <div class="divider my-1"></div>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" class="inline-flex text-error gap-2">
                            <x-icon name="unplug" class="size-5 shrink-0" />
                            Keluar
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
