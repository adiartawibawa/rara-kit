@props([
    'routeName' => null,
    'href' => null,
    'icon' => null,
    'label' => '',
    'badge' => null,
    'badgeStyle' => 'badge-primary',
    'tooltip' => null,
    'activePatterns' => [],
])

@php
    $url = $routeName ? route($routeName) : $href ?? '#';

    $isActive = false;
    if ($routeName) {
        // Jika route nama berakhiran '.index' (misal: 'admin.articles.index'),
        // jadikan wildcard 'admin.articles.*' agar sub-halaman (edit/create) tetap aktif.
        $autoPattern = \Illuminate\Support\Str::endsWith($routeName, '.index')
            ? \Illuminate\Support\Str::beforeLast($routeName, '.index') . '.*'
            : $routeName;

        $patterns = array_unique(array_merge([$routeName, $autoPattern], (array) $activePatterns));

        $isActive = request()->routeIs($patterns);
    }
@endphp

<li>
    <a href="{{ $url }}"
        {{ $attributes->class([
            'is-drawer-close:tooltip is-drawer-close:tooltip-right is-drawer-open:before:hidden is-drawer-open:after:hidden',
            'active font-semibold text-base-300 bg-primary' => $isActive,
        ]) }}
        data-tip="{{ $tooltip ?? $label }}">

        @if ($icon)
            <x-icon :name="$icon" class="size-5 shrink-0" />
        @endif

        <span class="is-drawer-close:hidden is-drawer-open:flex justify-between items-center w-full">
            <span>{{ $label }}</span>
            @if ($badge !== null)
                <span class="badge badge-sm {{ $badgeStyle }}">{{ $badge }}</span>
            @endif
        </span>
    </a>
</li>
