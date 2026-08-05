<x-layouts.admin title="Edit Pengguna">

    {{-- Header Page --}}
    <x-slot:header>
        <div class="flex items-center gap-3">
            <a href="{{ route('users.index') }}" class="btn btn-circle btn-ghost btn-sm" title="Kembali">
                <x-icon name="arrow-left" class="size-5" />
            </a>
            <div>
                <h1 class="text-2xl font-bold text-base-content">Edit Profil Pengguna</h1>
                <p class="text-sm text-base-content/70">Perbarui informasi dan hak akses akun
                    {{ $user->name ?? 'Ahmad Fauzi' }}.</p>
            </div>
        </div>
    </x-slot:header>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Include Partial Form --}}
        @include('pages.admin.users.partials.form', ['user' => $user ?? null])

    </form>

</x-layouts.admin>
