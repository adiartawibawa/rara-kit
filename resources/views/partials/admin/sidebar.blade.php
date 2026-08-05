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
    @include('partials.admin.sidebar-nav')

</aside>
