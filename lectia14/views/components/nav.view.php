<nav class="sticky top-0 z-50 bg-gradient-to-r from-indigo-600 via-indigo-500 to-purple-600 text-white shadow-sm" role="navigation" aria-label="Main">
    <?php $current = $_SERVER['REQUEST_URI'] ?? '/'; ?>
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Brand -->
            <div class="flex items-center gap-3">
                <a href="/" class="flex items-center gap-3">
                    <span class="inline-flex items-center justify-center w-9 h-9 rounded-md bg-white/20 text-white font-semibold">SIRT</span>
                    <span class="hidden sm:inline text-white font-semibold tracking-wide">Sistem Intern Rapoarte</span>
                </a>
            </div>

            <!-- Desktop links -->
            <div class="hidden md:flex items-center gap-6">
                <a href="/" class="px-3 py-2 rounded-md transition <?= ($current === '/' || $current === '/index.php') ? 'bg-white/10' : 'hover:bg-white/6' ?>" aria-current="<?= ($current === '/' || $current === '/index.php') ? 'page' : 'false' ?>">Acasă</a>
                <a href="/reports" class="px-3 py-2 rounded-md transition <?= str_starts_with($current, '/reports') ? 'bg-white/10' : 'hover:bg-white/6' ?>" aria-current="<?= str_starts_with($current, '/reports') ? 'page' : 'false' ?>">Rapoarte</a>
            </div>

            <!-- Actions -->
            <div class="flex items-center gap-3">
                <a href="/reports/create" class="hidden md:inline-flex items-center gap-2 bg-white text-indigo-700 px-3 py-2 rounded-md font-medium shadow hover:bg-white/90 transition">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Adaugă
                </a>

                <!-- Mobile toggle -->
                <button id="nav-toggle" aria-controls="nav-menu" aria-expanded="false" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white" aria-label="Meniu">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="nav-menu" class="md:hidden hidden bg-white/5 border-t border-white/10">
        <div class="max-w-6xl mx-auto px-4 py-4 space-y-1">
            <a href="/" class="block px-3 py-2 rounded-md text-white/90 hover:text-white <?= ($current === '/' || $current === '/index.php') ? 'bg-white/6' : '' ?>">Acasă</a>
            <a href="/reports" class="block px-3 py-2 rounded-md text-white/90 hover:text-white <?= str_starts_with($current, '/reports') ? 'bg-white/6' : '' ?>">Rapoarte</a>
            <div class="pt-2 border-t border-white/10">
                <a href="/reports/create" class="block px-3 py-2 rounded-md text-white/90 hover:text-white">Adaugă raport</a>
            </div>
        </div>
    </div>
</nav>
    <script>
        (function () {
            const btn = document.getElementById('nav-toggle');
            const menu = document.getElementById('nav-menu');
            btn?.addEventListener('click', function () {
                const expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', String(!expanded));
                menu.classList.toggle('hidden');
            });

            // Close mobile menu on Escape
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
        })();
    </script>