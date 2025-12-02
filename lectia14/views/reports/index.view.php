<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Intern de Rapoarte Tehnice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.4/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container-lg">
            <h2>Lista tuturor rapoartelor</h2>
            <?php $nr=1; ?>
            <?php foreach($reports as $report): ?>
                <div class="row my-2">
                    <div class="col-1 border"><?= $nr++; ?></div>
                    <div class="col-2 border"><b>Titlu:</b> <?= $report->title; ?></div>
                    <div class="col border"><b>Autor:</b> <?= $report->author; ?></div>
                    <div class="col border"><b>Categorie:</b> <?= $report->category; ?></div>
                    <div class="col-2 border"><b>Data crearii:</b> <?= $report->created_at; ?></div>
                    <div class="col-4 border"><b>Continut:</b> <?= $report->getShortContent(70); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Footer -->
    <?php include __DIR__ . "/../components/footer.view.php"; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>