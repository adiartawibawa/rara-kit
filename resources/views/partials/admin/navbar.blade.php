<header class="navbar w-full bg-base-200 sticky top-0 z-30 pr-8">
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
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-9 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img alt="User Avatar"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content mt-3 z-1 p-2 shadow-lg bg-base-100 rounded-box w-52 border border-base-200">
                <li class="menu-title px-4 py-2">
                    <span>{{ auth()->user()->name ?? 'Administrator' }}</span>
                </li>
                <li><a href="#">Profil Saya</a></li>
                <li><a href="#">Pengaturan</a></li>
                <div class="divider my-1"></div>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-error">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
