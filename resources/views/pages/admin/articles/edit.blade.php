{{-- resources/views/admin/posts/edit.blade.php --}}
<x-layouts.admin title="Edit Artikel">

    <x-slot:header>
        <div class="flex items-center gap-3">
            <a href="{{ route('articles.index') }}" class="btn btn-circle btn-ghost btn-sm">
                <x-icon name="arrow-left" class="size-5" />
            </a>
            <div>
                <h1 class="text-2xl font-bold text-base-content">Edit Artikel</h1>
                <p class="text-sm text-base-content/70">Perbarui konten artikel ini.</p>
            </div>
        </div>
    </x-slot:header>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Cukup lewatkan data $post ke partial form --}}
        @include('pages.admin.articles.partials.form', ['post' => $post])

    </form>

</x-layouts.admin>
