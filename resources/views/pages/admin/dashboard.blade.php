<x-layouts.admin title="Dashboard Ringkasan">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold text-base-content">Ringkasan Sistem</h1>
                <p class="text-sm text-base-content/70">
                    Selamat datang kembali! Berikut adalah statistik situs Anda hari ini.
                </p>
            </div>
            <div>
                <a href="{{ route('articles.create') }}" class="btn btn-primary gap-2">
                    <x-icon name="file-plus-corner" class="h-4 w-4" />
                    Buat Artikel Baru
                </a>
            </div>
        </div>
    </x-slot:header>

    <div class="space-y-6">

        {{-- 1. STATISTIK UTAMA (daisyUI Stats) --}}
        <div class="stats stats-vertical border-base-300 bg-base-100 w-full border shadow-sm lg:stats-horizontal">

            <div class="stat">
                <div class="stat-figure text-primary">
                    <x-icon name="document-text" class="h-8 w-8" />
                </div>
                <div class="stat-title">Total Artikel</div>
                <div class="stat-value text-primary">{{ number_format($stats['total_articles'] ?? 128) }}</div>
                <div class="stat-desc">↗︎ {{ $stats['articles_this_month'] ?? 12 }} artikel bulan ini</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <x-icon name="eye" class="h-8 w-8" />
                </div>
                <div class="stat-title">Total Pembaca</div>
                <div class="stat-value text-secondary">{{ $stats['total_readers'] ?? '45.2K' }}</div>
                <div class="stat-desc">↗︎ {{ $stats['readers_growth'] ?? '21%' }} dari minggu lalu</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-warning">
                    <x-icon name="chat-bubble-left-right" class="h-8 w-8" />
                </div>
                <div class="stat-title">Moderasi Komentar</div>
                <div class="stat-value text-warning">{{ $stats['pending_comments'] ?? 8 }}</div>
                <div class="stat-desc">Menunggu persetujuan</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-accent">
                    <x-icon name="users" class="h-8 w-8" />
                </div>
                <div class="stat-title">Penulis Aktif</div>
                <div class="stat-value">{{ $stats['active_authors'] ?? 14 }}</div>
                <div class="stat-desc">{{ $stats['new_authors'] ?? 2 }} pengguna baru</div>
            </div>

        </div>

        {{-- 2. LAYOUT GRID --}}
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

            {{-- KOLOM KIRI (2/3 Width): TABEL ARTIKEL & KOMENTAR --}}
            <div class="space-y-6 lg:col-span-2">

                {{-- Card: Artikel Populer --}}
                <div class="card border-base-300 bg-base-100 border shadow-sm">
                    <div class="card-body p-6">
                        {{-- Card Header --}}
                        <div class="mb-4 flex items-center justify-between border-b border-base-200 pb-3">
                            <div class="flex items-center gap-2">
                                <x-icon name="trending-up" class="size-5 text-primary" />
                                <h2 class="card-title text-lg font-bold">Artikel Populer</h2>
                            </div>
                            <span class="badge badge-ghost text-xs font-medium text-base-content/60">Berdasarkan
                                Views</span>
                        </div>

                        {{-- List Data Artikel Populer --}}
                        <div class="divide-y divide-base-200">
                            @forelse ($popularArticles ?? [] as $article)
                                <div
                                    class="flex items-center justify-between gap-3 py-3.5 -mx-6 px-6 transition-colors hover:bg-base-200/40">

                                    {{-- Peringkat & Detail Artikel --}}
                                    <div class="flex items-center gap-3 min-w-0 flex-1">
                                        {{-- Badge Nomor Peringkat (#1, #2, #3 highlight) --}}
                                        <div
                                            class="flex size-7 shrink-0 items-center justify-center rounded-full text-xs font-bold
                            {{ $loop->iteration == 1 ? 'bg-amber-500/15 text-amber-600' : ($loop->iteration == 2 ? 'bg-slate-400/15 text-slate-600' : ($loop->iteration == 3 ? 'bg-amber-700/15 text-amber-800' : 'bg-base-200 text-base-content/60')) }}">
                                            #{{ $loop->iteration }}
                                        </div>

                                        {{-- Judul & Metadata --}}
                                        <div class="space-y-1 min-w-0 flex-1">
                                            <a href="{{ route('articles.show', $article->id ?? 1) }}"
                                                class="font-semibold text-sm hover:text-primary transition-colors line-clamp-1">
                                                {{ $article->title }}
                                            </a>
                                            <div class="flex items-center gap-2 text-xs text-base-content/60">
                                                <span>{{ $article->category->name ?? 'Umum' }}</span>
                                                <span>•</span>
                                                <span>Oleh <strong
                                                        class="font-medium text-base-content/80">{{ $article->author->name ?? 'Admin' }}</strong></span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Jumlah Views --}}
                                    <div class="shrink-0 text-end">
                                        <div
                                            class="badge badge-secondary/15 border-0 font-bold text-xs text-secondary gap-1.5 py-2.5 px-3">
                                            <x-icon name="eye" class="size-3.5" />
                                            <span>{{ number_format($article->views_count ?? ($article->views ?? 0)) }}</span>
                                        </div>
                                    </div>

                                </div>
                            @empty
                                <div class="py-8 text-center text-sm text-base-content/60">
                                    Belum ada data artikel populer.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                {{-- Card: Artikel Terbaru --}}
                <div class="card border-base-300 bg-base-100 border shadow-sm">
                    <div class="card-body p-6">
                        <div class="mb-4 flex items-center justify-between border-b border-base-200 pb-3">
                            <h2 class="card-title text-lg font-bold">Artikel Terbaru</h2>
                            <a href="{{ route('articles.index') }}"
                                class="link link-primary text-xs font-semibold no-underline hover:underline">
                                Lihat Semua →
                            </a>
                        </div>

                        {{-- List Data Artikel --}}
                        <div class="divide-y divide-base-200">
                            @forelse ($latestArticles ?? [] as $article)
                                <div
                                    class="flex flex-col gap-3 py-3.5 sm:flex-row sm:items-center sm:justify-between hover:bg-base-200/40 -mx-6 px-6 transition-colors">

                                    {{-- Detail Artikel --}}
                                    <div class="space-y-1.5 min-w-0 flex-1">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            {{-- Judul Artikel --}}
                                            <a href="{{ route('articles.show', $article->id ?? 1) }}"
                                                class="font-semibold text-sm hover:text-primary transition-colors line-clamp-1">
                                                {{ $article->title }}
                                            </a>

                                            {{-- Badge Status --}}
                                            @if (($article->status ?? 'published') === 'published')
                                                <span class="badge badge-success badge-xs text-white">Terbit</span>
                                            @else
                                                <span class="badge badge-warning badge-xs">Draft</span>
                                            @endif

                                            {{-- Badge Kategori --}}
                                            <span class="badge badge-ghost badge-xs font-mono">
                                                {{ $article->category->name ?? 'Umum' }}
                                            </span>
                                        </div>

                                        {{-- Metadata: Penulis & Tanggal --}}
                                        <div class="flex items-center gap-2 text-xs text-base-content/60">
                                            <span>Oleh: <strong
                                                    class="font-medium text-base-content/80">{{ $article->author->name ?? 'Admin' }}</strong></span>
                                            <span>•</span>
                                            <span>{{ optional($article->created_at)->translatedFormat('d M Y') ?? '03 Ags 2026' }}</span>
                                        </div>
                                    </div>

                                    {{-- Action Buttons --}}
                                    <div class="flex shrink-0 items-center gap-1 self-end sm:self-center">
                                        <a href="{{ route('articles.show', $article->id ?? 1) }}"
                                            class="btn btn-ghost btn-xs btn-square" title="Lihat Artikel">
                                            <x-icon name="eye" class="size-4" />
                                        </a>

                                        <form action="{{ route('articles.index') }}" method="POST" class="inline"
                                            onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-ghost btn-xs btn-square text-error"
                                                title="Hapus Artikel">
                                                <x-icon name="trash" class="size-4" />
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            @empty
                                <div class="py-8 text-center text-sm text-base-content/60">
                                    Belum ada artikel terbaru.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                {{-- Card: Moderasi Komentar Masuk --}}
                <div class="card border-base-300 bg-base-100 border shadow-sm">
                    <div class="card-body p-6">
                        <h2 class="card-title mb-2 text-lg font-bold">Komentar Perlu Moderasi</h2>

                        <div class="divide-base-200 divide-y">
                            @forelse ($pendingComments ?? [] as $comment)
                                <div class="flex flex-col gap-3 py-3 sm:flex-row sm:items-center justify-between">
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <span class="text-sm font-bold">{{ $comment->author_name }}</span>
                                            <span class="text-xs text-base-content/50">pada artikel
                                                "{{ $comment->article->title ?? 'Artikel' }}"</span>
                                        </div>
                                        <p class="mt-1 text-sm text-base-content/80">"{{ $comment->body }}"</p>
                                    </div>
                                    <div class="flex shrink-0 items-center gap-2">
                                        <form action="{{ route('comments.show', $comment->id ?? 1) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit"
                                                class="btn btn-success btn-xs text-white">Setujui</button>
                                        </form>

                                        <form action="{{ route('comments.show', $comment->id ?? 1) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-error btn-outline btn-xs">Tolak</button>
                                        </form>
                                    </div>
                                </div>
                            @empty
                                <p class="py-4 text-center text-sm text-base-content/60">Tidak ada komentar yang
                                    menunggu moderasi saat ini.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

            </div>

            {{-- KOLOM KANAN (1/3 Width): WIDGET & AKTIVITAS --}}
            <div class="space-y-6">

                {{-- Widget: Quick Actions --}}
                <div class="card border-base-300 bg-base-100 border shadow-sm">
                    <div class="card-body p-6">
                        <h2 class="card-title mb-3 text-base font-bold">Aksi Cepat</h2>
                        <div class="flex flex-col gap-2">
                            <a href="{{ route('pages.create') }}" class="btn btn-outline btn-sm justify-start gap-2">
                                <x-icon name="document-plus" class="h-4 w-4" />
                                Buat Halaman Baru
                            </a>
                            <a href="{{ route('categories.index') }}"
                                class="btn btn-outline btn-sm justify-start gap-2">
                                <x-icon name="folder" class="h-4 w-4" />
                                Kelola Kategori & Tag
                            </a>
                            <a href="{{ route('media.index') }}" class="btn btn-outline btn-sm justify-start gap-2">
                                <x-icon name="photo" class="h-4 w-4" />
                                Unggah Media Gambar
                            </a>
                            <a href="{{ route('settings.index') }}"
                                class="btn btn-outline btn-sm justify-start gap-2">
                                <x-icon name="cog" class="h-4 w-4" />
                                Pengaturan Umum Situs
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Widget: Kapasitas Media Storage --}}
                <div class="card border-base-300 bg-base-100 border shadow-sm">
                    <div class="card-body p-6">
                        <div class="mb-2 flex items-center justify-between">
                            <h2 class="card-title text-base font-bold">Penyimpanan Media</h2>
                            <span
                                class="text-primary font-mono text-xs font-bold">{{ $storage['percentage'] ?? 68 }}%</span>
                        </div>
                        <progress class="progress progress-primary w-full" value="{{ $storage['percentage'] ?? 68 }}"
                            max="100"></progress>
                        <p class="mt-2 text-xs text-base-content/70">
                            {{ $storage['used_gb'] ?? '6.8' }} GB dari {{ $storage['total_gb'] ?? '10' }} GB kapasitas
                            server terpakai.
                        </p>
                    </div>
                </div>

                {{-- Widget: Aktivitas Terbaru (Log) --}}
                <div class="card border-base-300 bg-base-100 border shadow-sm">
                    <div class="card-body p-6">
                        <h2 class="card-title mb-3 text-base font-bold">Log Aktivitas</h2>

                        <ul class="space-y-4 text-xs">
                            @forelse ($activityLogs ?? [] as $log)
                                <li class="flex items-start gap-3">
                                    <div class="mt-0.5 rounded bg-base-200 p-1.5 text-base-content">
                                        <x-icon :name="$log->icon ?? 'bookmark'" class="h-4 w-4" />
                                    </div>
                                    <div>
                                        <p class="font-semibold text-base-content">{{ $log->title }}</p>
                                        <p class="text-base-content/60">{{ $log->description }}</p>
                                        <span
                                            class="text-[10px] text-base-content/40">{{ optional($log->created_at)->diffForHumans() ?? 'Baru saja' }}</span>
                                    </div>
                                </li>
                            @empty
                                <li class="text-center text-base-content/60">Belum ada aktivitas terbaru.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>

</x-layouts.admin>
