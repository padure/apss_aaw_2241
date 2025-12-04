<!doctype html>
<html lang="ro">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title ?? 'Aplicatie') ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<?php include __DIR__ . '/../components/nav.view.php'; ?>

<main class="container">
    <?= $content ?? '' ?>
</main>

<?php include __DIR__ . '/../components/footer.view.php'; ?>

</body>
</html>
