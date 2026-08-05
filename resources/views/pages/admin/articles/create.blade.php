<x-layouts.admin title="Buat Artikel Baru">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('articles.index') }}" class="btn btn-circle btn-ghost btn-sm" title="Kembali">
                    <x-icon name="arrow-left" class="size-5" />
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-base-content">Buat Artikel Baru</h1>
                    <p class="text-sm text-base-content/70">Tulis dan publikasikan ide Anda.</p>
                </div>
            </div>
        </div>
    </x-slot:header>

    {{-- Form Wrapper --}}
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Include Form Partial (tanpa variabel $post) --}}
        @include('pages.admin.articles.partials.form')

    </form>

</x-layouts.admin>
