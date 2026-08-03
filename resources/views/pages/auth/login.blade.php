<x-layouts.guest title="Masuk ke Akun Anda">
    <div class="text-center mb-4">
        <h2 class="text-2xl font-bold text-base-content">Selamat Datang Kembali</h2>
        <p class="text-sm text-base-content/70 mt-1">Silakan masuk ke akun Anda</p>
    </div>

    <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf

        {{-- Email Input --}}
        <div class="form-control">
            <label for="email" class="label">
                <span class="label-text font-medium">Email</span>
            </label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com"
                class="input input-bordered w-full @error('email') input-error @enderror" required autofocus />
            @error('email')
                <label class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </label>
            @enderror
        </div>

        {{-- Password Input --}}
        <div class="form-control">
            <label for="password" class="label">
                <span class="label-text font-medium">Password</span>
            </label>
            <input type="password" id="password" name="password" placeholder="••••••••"
                class="input input-bordered w-full @error('password') input-error @enderror" required />
            @error('password')
                <label class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </label>
            @enderror
        </div>

        {{-- Remember Me & Forgot Password --}}
        <div class="flex items-center justify-between text-sm">
            <label class="label cursor-pointer gap-2 p-0">
                <input type="checkbox" name="remember" class="checkbox checkbox-primary checkbox-sm" />
                <span class="label-text">Ingat Saya</span>
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link link-primary link-hover">
                    Lupa Sandi?
                </a>
            @endif
        </div>

        {{-- Submit Button --}}
        <div class="form-control mt-6">
            <button type="submit" class="btn btn-primary w-full">
                Masuk
            </button>
        </div>
    </form>

    {{-- Footer Register Link --}}
    <div class="text-center text-sm text-base-content/70 mt-6">
        Belum punya akun?
        <a href="{{ route('register') }}" class="link link-primary font-semibold">Daftar</a>
    </div>
</x-layouts.guest>
