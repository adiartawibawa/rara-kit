@php
    $navMenu = [
        [
            'type' => 'item',
            'label' => 'Dashboard',
            'route' => 'admin.dashboard',
            'icon' => 'rocket',
        ],
        [
            'type' => 'section',
            'title' => 'Manajemen Konten',
        ],
        [
            'type' => 'item',
            'label' => 'Artikel / Posts',
            'route' => 'articles.index',
            'icon' => 'newspaper',
        ],
        [
            'type' => 'item',
            'label' => 'Halaman Statis',
            'route' => 'pages.index',
            'icon' => 'panels-top-left',
        ],
        [
            'type' => 'item',
            'label' => 'Kategori & Tag',
            'route' => 'categories.index',
            'icon' => 'tags',
        ],
        [
            'type' => 'item',
            'label' => 'Galeri Media',
            'route' => 'media.index',
            'icon' => 'images',
        ],
        [
            'type' => 'item',
            'label' => 'Komentar',
            'route' => 'comments.index',
            'icon' => 'messages-square',
            'badge' => 3,
            'badgeStyle' => 'badge-primary',
        ],
        [
            'type' => 'section',
            'title' => 'Pengaturan Sistem',
        ],
        [
            'type' => 'item',
            'label' => 'Pengguna',
            'route' => 'users.index',
            'icon' => 'users',
        ],
        [
            'type' => 'item',
            'label' => 'Pengaturan Aplikasi',
            'route' => 'settings.index',
            'icon' => 'settings-2',
        ],
    ];
@endphp

<ul class="menu w-full grow p-2 gap-1 overflow-y-auto">
    @foreach ($navMenu as $item)
        @if ($item['type'] === 'section')
            <x-admin.nav-section :title="$item['title']" />
        @else
            <x-admin.nav-item :routeName="$item['route']" :icon="$item['icon']" :label="$item['label']" :badge="$item['badge'] ?? null"
                :badgeStyle="$item['badgeStyle'] ?? 'badge-primary'" />
        @endif
    @endforeach
</ul>
