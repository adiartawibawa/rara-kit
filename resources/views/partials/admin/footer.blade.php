{{-- resources/views/partials/footer.blade.php --}}
<footer class="footer footer-center p-4 bg-base-100 text-base-content border-t border-base-200 mt-auto">
    <aside class="flex flex-col sm:flex-row items-center justify-between w-full max-w-7xl px-2 gap-2">
        <p class="text-xs sm:text-sm text-base-content/70">
            &copy; {{ date('Y') }} <span
                class="font-semibold text-primary">{{ config('app.name', 'Laravel') }}</span>. All rights
            reserved.
        </p>
        <div class="flex gap-4 text-xs sm:text-sm text-base-content/70">
            <span>Made with ❤️ <a href="https://adiartawibawa.com" target="_blank"
                    class="link link-hover hover:text-primary no-underline">adiartawibawa</a></span>
        </div>
    </aside>
</footer>
