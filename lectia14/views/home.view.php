<!-- Hero + Features Section -->
<section class="bg-gradient-to-b from-white to-slate-50 py-12">
    <?php $recentReports = $recentReports ?? []; ?>
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-slate-900 leading-tight">Sistem Intern de Rapoarte Tehnice</h1>
                <p class="mt-4 text-slate-600 text-lg">Gestiune simplă și rapidă a rapoartelor tehnice: creează, caută, filtrează și partajează.</p>
                <div class="mt-6 flex flex-wrap items-center gap-3">
                    <a href="/reports" class="inline-flex items-center gap-2 bg-indigo-600 text-white px-4 py-2 rounded-md shadow hover:bg-indigo-700 transition">Vizualizează rapoarte</a>
                    <a href="/reports/create" class="inline-flex items-center gap-2 border border-slate-200 px-4 py-2 rounded-md text-slate-700 hover:bg-slate-50 transition">Creează un raport</a>
                </div>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="p-4 bg-white border border-slate-200 rounded-lg shadow-sm">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 8c-3 0-5.5 1.5-7 3 1.5 1.5 4 3 7 3s5.5-1.5 7-3c-1.5-1.5-4-3-7-3z"/><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 8v8"/></svg>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Căutare ușoară</div>
                                <div class="text-xs text-slate-500">Găsești rapid după titlu sau autor.</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-white border border-slate-200 rounded-lg shadow-sm">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7 6h10M9 18h6"/></svg>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Filtre & Categorii</div>
                                <div class="text-xs text-slate-500">Filtrează rapid după categorie și sortează după dată.</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-white border border-slate-200 rounded-lg shadow-sm">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m4-4H8"/></svg>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Creare rapidă</div>
                                <div class="text-xs text-slate-500">Formular intuitiv pentru noul raport cu previzualizare snippet.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside>
                <div class="bg-white border border-slate-200 p-6 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-slate-800 mb-3">Rapoarte recente</h3>

                    <?php if (empty($recentReports)): ?>
                        <div class="text-sm text-slate-500">Nu există rapoarte recente.</div>
                    <?php else: ?>
                        <ul class="space-y-3">
                            <?php foreach (array_slice($recentReports, 0, 5) as $r): ?>
                                <li class="flex items-start justify-between gap-4">
                                    <div>
                                        <a href="/reports/<?= $r->id ?>" class="text-indigo-600 hover:underline font-medium"><?= htmlspecialchars($r->title) ?></a>
                                        <div class="text-xs text-slate-400">de <?= htmlspecialchars($r->author) ?> • <time datetime="<?= $r->created_at ?>"><?= $r->created_at ?></time></div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Secondary features / CTA -->
<section class="py-8">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <h4 class="text-lg font-semibold text-slate-900 mb-1">Organizare centralizată</h4>
                    <p class="text-sm text-slate-600">Păstrează toate rapoartele într-un singur loc, accesibil și organizat după categorie.</p>
                </div>

                <div>
                    <h4 class="text-lg font-semibold text-slate-900 mb-1">Ușor de căutat</h4>
                    <p class="text-sm text-slate-600">Caută după titlu sau autor și aplică filtre pentru a restrânge rezultatele.</p>
                </div>

                <div>
                    <h4 class="text-lg font-semibold text-slate-900 mb-1">Compatibilitate și securitate</h4>
                    <p class="text-sm text-slate-600">Interfață modernă, acces rapid și permisiuni ușor de gestionat (upgrade opțional).</p>
                </div>
            </div>
        </div>
    </div>
</section>