<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head', [
    'title' => $title ?? config('app.name'),
    'description' => $description ?? 'Deskripsi default aplikasi',
    'keywords' => $keywords ?? 'laravel, app',
    'robots' => $robots ?? 'index, follow',
    'image' => $image ?? asset('images/default-og.jpg'),
])

<body {{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}

    {{-- Slot untuk script di bawah halaman jika diperlukan --}}
    {{ $scripts ?? '' }}
</body>

</html>
