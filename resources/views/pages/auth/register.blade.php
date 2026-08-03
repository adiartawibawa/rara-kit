<x-layouts.guest title="Create an account">
    {{-- Header Form --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold tracking-tight">Create an account</h1>
        <p class="text-sm mt-2">
            Already have an account?
            <a href="{{ route('login') }}" class="text-primary hover:text-primary/80 underline font-medium">Log in</a>
        </p>
    </div>

    {{-- Form Utama --}}
    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        {{-- Row First Name & Last Name --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div>
                <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}"
                    class="input w-full border-slate-700/60 focus:border-primary text-white placeholder-slate-500 rounded-lg text-sm"
                    required />
            </div>
            <div>
                <input type="text" name="last_name" placeholder="Last name" value="{{ old('last_name') }}"
                    class="input w-full border-slate-700/60 focus:border-primary text-white placeholder-slate-500 rounded-lg text-sm" />
            </div>
        </div>

        {{-- Email Input --}}
        <div>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                class="input w-full border-slate-700/60 focus:border-primary text-white placeholder-slate-500 rounded-lg text-sm"
                required />
        </div>

        {{-- Password Input with Eye Icon --}}
        <div class="relative">
            <input type="password" id="password" name="password" placeholder="Enter your password"
                class="input w-full border-slate-700/60 focus:border-primary text-white placeholder-slate-500 rounded-lg text-sm pr-10"
                required />
            <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white">
                {{-- Eye Icon SVG --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 123.257 3.257 0 0 1 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.573 16.493 16.638 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                </svg>
            </button>
        </div>

        {{-- Terms & Conditions Checkbox --}}
        <div class="flex items-center gap-2 pt-1">
            <input type="checkbox" name="terms" id="terms"
                class="checkbox checkbox-xs rounded border-slate-600 checked:bg-primary checked:border-primary"
                required />
            <label for="terms" class="text-xs cursor-pointer select-none">
                I agree to the <a href="#" class="text-primary underline">Terms & Conditions</a>
            </label>
        </div>

        {{-- Submit Button --}}
        <button type="submit"
            class="btn w-full bg-primary hover:bg-primary/75 text-white border-0 rounded-lg text-sm font-medium mt-2 normal-case">
            Create account
        </button>
    </form>

    {{-- Divider --}}
    <div class="relative flex py-5 items-center">
        <div class="flex-grow border-t border-slate-800"></div>
        <span class="flex-shrink mx-4 text-xs text-slate-500">Or register with</span>
        <div class="flex-grow border-t border-slate-800"></div>
    </div>

    {{-- Social Auth Buttons --}}
    <div class="grid grid-cols-2 gap-3">
        <a href="#"
            class="btn btn-outline border-slate-700/80 hover text-white rounded-lg normal-case font-normal text-sm bg-[#1b1b2a]">
            {{-- Google Icon --}}
            <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24">
                <path fill="#EA4335"
                    d="M12 5c1.6 0 3 .6 4.1 1.6l3.1-3.1C17.3 1.7 14.8 1 12 1 7.5 1 3.7 3.6 1.9 7.3l3.7 2.9C6.5 7.1 9 5 12 5z" />
                <path fill="#4285F4"
                    d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5c-.3 1.5-1.1 2.8-2.4 3.7l3.7 2.9c2.2-2 3.7-5 3.7-8.8z" />
                <path fill="#FBBC05"
                    d="M5.6 14.8c-.2-.7-.4-1.5-.4-2.3s.2-1.6.4-2.3L1.9 7.3C.7 9.7 0 10.8 0 12s.7 2.3 1.9 4.7l3.7-2.9z" />
                <path fill="#34A853"
                    d="M12 23c3.2 0 6-1.1 8-3l-3.7-2.9c-1.1.7-2.5 1.2-4.3 1.2-3 0-5.5-2.1-6.4-5.2L1.9 16C3.7 19.7 7.5 23 12 23z" />
            </svg>
            Google
        </a>
        <a href="#"
            class="btn btn-outline border-slate-700/80 hover text-white rounded-lg normal-case font-normal text-sm bg-[#1b1b2a]">
            {{-- Apple Icon --}}
            <svg class="w-4 h-4 mr-1 fill-current" viewBox="0 0 170 170">
                <path
                    d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.19-2.12-9.97-3.17-14.34-3.17-4.58 0-9.49 1.05-14.75 3.17-5.26 2.13-9.5 3.24-12.74 3.35-4.33.13-9.13-1.9-14.4-6.09-3.41-2.73-7.3-7.42-11.68-14.07-6.26-9.5-11.12-20.3-14.58-32.41-3.46-12.11-5.19-23.71-5.19-34.8 0-14.32 3.51-26.2 10.53-35.64 7.02-9.44 15.93-14.28 26.73-14.53 4.86 0 10.23 1.25 16.12 3.75 5.89 2.5 9.87 3.75 11.95 3.75 1.7 0 5.79-1.28 12.28-3.84 6.49-2.56 12.02-3.71 16.59-3.45 12.3.93 22.37 5.75 30.2 14.47-10.87 6.58-16.15 15.63-15.84 27.15.31 8.98 3.82 16.48 10.53 22.5 6.71 6.02 14.88 9.53 24.51 10.53-2.12 6.42-4.8 12.87-8.04 19.35zM119.22 31.84c0-6.85 2.47-13.55 7.42-20.1 4.95-6.55 11.26-10.79 18.93-12.74.52 1.48.78 2.92.78 4.33 0 7.02-2.58 13.88-7.74 20.58-5.16 6.7-11.4 10.97-18.72 12.82-.2-.84-.33-1.79-.33-2.84z" />
            </svg>
            Apple
        </a>
    </div>
</x-layouts.guest>
