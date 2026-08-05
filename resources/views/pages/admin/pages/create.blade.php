<x-layouts.admin title="Buat Halaman Statis Baru">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex items-center gap-3">
            <a href="{{ route('pages.index') }}" class="btn btn-circle btn-ghost btn-sm" title="Kembali">
                <x-icon name="arrow-left" class="size-5" />
            </a>
            <div>
                <h1 class="text-2xl font-bold text-base-content">Tambah Halaman Statis</h1>
                <p class="text-sm text-base-content/70">Buat halaman informasi baru untuk website Anda.</p>
            </div>
        </div>
    </x-slot:header>

    {{-- Form Wrapper --}}
    <form action="#" method="POST">
        @csrf

        {{-- Partial Form --}}
        @include('pages.admin.pages.partials.form')

    </form>

</x-layouts.admin>
