<section class="py-8">
    <?php
    $categories = $categories ?? ['Network', 'Security', 'Software', 'Hardware'];
    $old = $old ?? $_POST ?? [];
    $errors = $errors ?? [];

    if (!function_exists('old')) {
        function old($field, $default = '') { global $old; return htmlspecialchars($old[$field] ?? $default); }
    }
    if (!function_exists('fieldError')) {
        function fieldError($field) { global $errors; return isset($errors[$field]) ? htmlspecialchars($errors[$field]) : ''; }
    }
    ?>

    <div class="max-w-3xl mx-auto px-4">
        <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-md">
            <div class="flex items-start justify-between gap-4 mb-6">
                <div>
                    <h1 class="text-2xl font-semibold text-slate-900">Creează un raport nou</h1>
                    <p class="text-sm text-slate-500 mt-1">Completează câmpurile pentru a adăuga un raport tehnic.</p>
                </div>

                <div class="text-sm text-slate-500">
                    <a href="/reports" class="inline-flex items-center gap-2 text-indigo-600 hover:underline">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        Înapoi la listă
                    </a>
                </div>
            </div>

            <?php if (!empty($errors) && is_array($errors)): ?>
                <div class="mb-4 p-3 rounded-md bg-red-50 border border-red-100 text-sm text-red-800">
                    <strong class="block mb-2">Vă rugăm corectați următoarele erori:</strong>
                    <ul class="list-disc pl-5 space-y-1">
                        <?php foreach ($errors as $err): ?>
                            <li><?= htmlspecialchars($err) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="post" action="/reports" class="grid grid-cols-1 gap-4" role="form" aria-labelledby="create-report-title">
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700">Titlu</label>
                    <input id="title" name="title" required
                           value="<?= old('title') ?>"
                           class="mt-1 block w-full px-3 py-2 border border-slate-200 rounded-md bg-white text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 <?= fieldError('title') ? 'ring-red-400 border-red-400' : '' ?>"
                           placeholder="Introduceți titlul raportului" aria-invalid="<?= fieldError('title') ? 'true' : 'false' ?>">
                    <?php if ($err = fieldError('title')): ?>
                        <p class="mt-1 text-xs text-red-600"><?= $err ?></p>
                    <?php endif; ?>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="author" class="block text-sm font-medium text-slate-700">Autor</label>
                        <input id="author" name="author" required
                               value="<?= old('author') ?>"
                               class="mt-1 block w-full px-3 py-2 border border-slate-200 rounded-md bg-white text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 <?= fieldError('author') ? 'ring-red-400 border-red-400' : '' ?>"
                               placeholder="Numele autorului" aria-invalid="<?= fieldError('author') ? 'true' : 'false' ?>">
                        <?php if ($err = fieldError('author')): ?>
                            <p class="mt-1 text-xs text-red-600"><?= $err ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-slate-700">Categorie</label>
                        <select id="category" name="category" required
                                class="mt-1 block w-full px-3 py-2 border border-slate-200 rounded-md bg-white text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 <?= fieldError('category') ? 'ring-red-400 border-red-400' : '' ?>"
                                aria-invalid="<?= fieldError('category') ? 'true' : 'false' ?>">
                            <option value="">Selectează categorie</option>
                            <?php foreach ($categories as $cat): ?>
                                <option value="<?= htmlspecialchars($cat) ?>" <?= (old('category') === $cat) ? 'selected' : '' ?>><?= htmlspecialchars($cat) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php if ($err = fieldError('category')): ?>
                            <p class="mt-1 text-xs text-red-600"><?= $err ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-slate-700">Conținut</label>
                    <textarea id="content" name="content" rows="8" required maxlength="5000"
                              class="mt-1 block w-full px-3 py-2 border border-slate-200 rounded-md bg-white text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 <?= fieldError('content') ? 'ring-red-400 border-red-400' : '' ?>"
                              placeholder="Descrie contextul, observațiile, soluțiile propuse etc." aria-invalid="<?= fieldError('content') ? 'true' : 'false' ?>"><?= old('content') ?></textarea>
                    <div class="mt-1 flex items-center justify-between text-xs text-slate-500">
                        <?php if ($err = fieldError('content')): ?>
                            <div class="text-red-600"><?= $err ?></div>
                        <?php else: ?>
                            <div>Maxim 5000 caractere</div>
                        <?php endif; ?>
                        <div id="charCount" class="text-slate-400">0 / 5000</div>
                    </div>
                </div>

                <!-- Optional live snippet preview -->
                <div class="bg-slate-50 border border-slate-100 p-3 rounded-md text-sm text-slate-700">
                    <div class="font-medium text-slate-900 mb-1">Previzualizare (primele 120 caractere)</div>
                    <div id="livePreview" class="text-slate-600 italic">Aici va apărea un sumar scurt al raportului...</div>
                </div>

                <div class="flex items-center justify-end gap-3 pt-2">
                    <a href="/reports" class="inline-flex items-center gap-2 px-4 py-2 border border-slate-200 rounded-md text-slate-700 hover:bg-slate-50 transition">Anulează</a>
                    <button type="submit" class="inline-flex items-center gap-2 bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                        Creează raport
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        (function () {
            const textarea = document.getElementById('content');
            const counter = document.getElementById('charCount');
            const preview = document.getElementById('livePreview');
            const MAX = Number(textarea?.getAttribute('maxlength') || 5000);

            function updateCount() {
                if (!textarea || !counter) return;
                const len = textarea.value.length;
                counter.textContent = len + ' / ' + MAX;
                // Update preview with first 120 chars, trimmed and sanitized for display
                if (preview) {
                    let out = textarea.value.trim().replace(/\s+/g, ' ');
                    if (!out) out = 'Aici va apărea un sumar scurt al raportului...';
                    else out = out.length > 120 ? out.substr(0, 120) + '…' : out;
                    preview.textContent = out;
                }
            }

            // Initialize and attach listeners
            updateCount();
            textarea?.addEventListener('input', updateCount);

            // Small UX: focus the first invalid input if present
            (function focusInvalid() {
                const invalid = document.querySelector('[aria-invalid="true"]');
                if (invalid) invalid.focus();
            })();
        })();
    </script>
</section>