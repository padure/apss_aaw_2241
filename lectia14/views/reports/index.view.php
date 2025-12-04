<section class="py-8">
    <?php
        $query = $query ?? [];
        $categories = $categories ?? ['Network', 'Security', 'Software', 'Hardware'];
    ?>
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
            <div>
                <h1 class="text-2xl md:text-3xl font-semibold text-slate-900">Lista tuturor rapoartelor</h1>
                <p class="text-sm text-slate-500 mt-1">Caută, filtrează și sortează rapoartele tehnice.</p>
            </div>

            <div class="flex items-center gap-3 w-full md:w-auto">
                <form method="get" action="/reports" class="flex items-center gap-2 w-full md:w-auto">
                    <label for="search" class="sr-only">Caută titlu sau autor</label>
                    <input id="search" name="search" value="<?= htmlspecialchars($query['search'] ?? '') ?>"
                           class="flex-1 md:w-64 px-3 py-2 border border-slate-200 rounded-md bg-white text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                           placeholder="Caută titlu sau autor..." type="search">

                    <select name="category" class="hidden md:block px-3 py-2 border border-slate-200 rounded-md bg-white text-slate-700">
                        <option value="">Toate categoriile</option>
                        <?php foreach ($categories as $cat): ?>
                            <option value="<?= htmlspecialchars($cat) ?>" <?= (isset($query['category']) && $query['category'] === $cat) ? 'selected' : '' ?>><?= htmlspecialchars($cat) ?></option>
                        <?php endforeach; ?>
                    </select>

                    <select name="sort" class="hidden md:block px-3 py-2 border border-slate-200 rounded-md bg-white text-slate-700">
                        <option value="desc" <?= ($query['sort'] ?? '') === 'desc' ? 'selected' : '' ?>>Cele mai noi</option>
                        <option value="asc" <?= ($query['sort'] ?? '') === 'asc' ? 'selected' : '' ?>>Cele mai vechi</option>
                    </select>

                    <button type="submit" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-2 rounded-md">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z"/></svg>
                        Caută
                    </button>
                </form>
                <a href="/reports/create" class="ml-0 md:ml-2 inline-flex items-center gap-2 bg-white border border-slate-200 text-slate-900 px-3 py-2 rounded-md hover:shadow">
                    <svg class="w-4 h-4 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Adaugă
                </a>
            </div>
        </div>

        <div class="mb-4">
            <?php if (!empty($query['search']) || !empty($query['category']) || !empty($query['sort'])): ?>
                <div class="flex flex-wrap items-center gap-2">
                    <?php if (!empty($query['search'])): ?>
                        <span class="inline-flex items-center gap-2 bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm">Căutare: <strong class="ml-1"><?= htmlspecialchars($query['search']) ?></strong></span>
                    <?php endif; ?>
                    <?php if (!empty($query['category'])): ?>
                        <span class="inline-flex items-center gap-2 bg-slate-100 text-slate-700 px-3 py-1 rounded-full text-sm">Categorie: <strong class="ml-1"><?= htmlspecialchars($query['category']) ?></strong></span>
                    <?php endif; ?>
                    <?php if (!empty($query['sort'])): ?>
                        <span class="inline-flex items-center gap-2 bg-slate-100 text-slate-700 px-3 py-1 rounded-full text-sm">Sortare: <strong class="ml-1"><?= htmlspecialchars($query['sort'] === 'asc' ? 'Crescătoare' : 'Descrescătoare') ?></strong></span>
                    <?php endif; ?>
                    <a href="/reports" class="ml-2 text-sm text-slate-500 hover:text-slate-700">Resetează</a>
                </div>
            <?php endif; ?>
        </div>

        <?php if (empty($reports)): ?>
            <div class="bg-white border border-slate-200 rounded-lg p-6 text-center text-slate-600">
                Nu există rapoarte care să corespundă criteriilor.
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php $nr = 1; foreach ($reports as $report): ?>
                    <?php
                        $badgeClass = match(strtolower($report->category)) {
                            'security' => 'bg-red-100 text-red-800',
                            'network' => 'bg-blue-100 text-blue-800',
                            'software' => 'bg-green-100 text-green-800',
                            'hardware' => 'bg-yellow-100 text-yellow-800',
                            default => 'bg-slate-100 text-slate-700',
                        };
                    ?>
                    <article class="bg-white border border-slate-200 rounded-lg p-4 shadow-sm hover:shadow-md transition">
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div class="text-slate-400 text-sm font-semibold"><?= $nr++; ?></div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">
                                        <a href="/reports/<?= $report->id ?>" class="hover:underline"><?= htmlspecialchars($report->title) ?></a>
                                    </h3>
                                    <div class="text-sm text-slate-500">
                                        de <span class="font-medium text-slate-700"><?= htmlspecialchars($report->author) ?></span>
                                        • <time datetime="<?= $report->created_at ?>"><?= $report->created_at ?></time>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <span class="inline-flex items-center gap-2 px-2 py-1 rounded-md text-xs font-semibold <?= $badgeClass ?>">
                                    <?= htmlspecialchars($report->category) ?>
                                </span>
                            </div>
                        </div>

                        <p class="mt-3 text-sm text-slate-600"><?= htmlspecialchars($report->getShortContent(120)); ?></p>

                        <div class="mt-4 flex items-center justify-between">
                            <a href="/reports/<?= $report->id ?>" class="text-indigo-600 hover:underline text-sm font-medium">Vezi detalii</a>
                            <div class="text-xs text-slate-400">Creat: <?= $report->created_at ?></div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>