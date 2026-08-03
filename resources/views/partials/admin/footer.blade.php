{{-- resources/views/partials/footer.blade.php --}}
<footer class="footer footer-center p-4 bg-base-100 text-base-content border-t border-base-200 mt-auto">
    <aside class="flex flex-col sm:flex-row items-center justify-between w-full max-w-7xl px-2 gap-2">
        <p class="text-xs sm:text-sm text-base-content/70">
            &copy; {{ date('Y') }} <span class="font-semibold">{{ config('app.name', 'Laravel') }}</span>. All rights
            reserved.
        </p>
        <div class="flex gap-4 text-xs sm:text-sm text-base-content/70">
            <a href="#" class="link link-hover">Privacy Policy</a>
            <a href="#" class="link link-hover">Terms of Service</a>
            <a href="#" class="link link-hover">Support</a>
        </div>
    </aside>
</footer>
