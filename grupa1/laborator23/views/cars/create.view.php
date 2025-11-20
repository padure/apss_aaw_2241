<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Vehicle - Fleet Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.4/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>

    <div class="container-lg py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <div>
                            <h2 class="h5 mb-0 fw-bold">Adaugă un vehicul nou</h2>
                            <small class="text-muted">Completează detaliile vehiculului pentru a-l adăuga în inventar</small>
                        </div>
                    </div>

                    <form action="/cars" method="POST" class="card-body">
                        <div class="mb-3">
                            <label for="make" class="form-label">Make</label>
                            <input id="make" name="make" type="text" class="form-control" placeholder="e.g. Toyota, BMW, Ford" required>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input id="model" name="model" type="text" class="form-control" placeholder="e.g. Corolla, X5, Mustang" required>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="year" class="form-label">Year</label>
                                <input id="year" name="year" type="number" min="1900" max="2100" class="form-control" placeholder="2024" required>
                            </div>
                            <div class="col-md-4">
                                <label for="color" class="form-label">Color</label>
                                <input id="color" name="color" type="text" class="form-control" placeholder="e.g. Red, #ff0000" required>
                            </div>
                            <div class="col-md-4">
                                <label for="price" class="form-label">Price (USD)</label>
                                <input id="price" name="price" type="number" step="0.01" min="0" class="form-control" placeholder="0.00" required>
                            </div>
                        </div>

                        <?php if (!empty($errors) && is_array($errors)): ?>
                            <div class="alert alert-danger mt-3">
                                <ul class="mb-0">
                                    <?php foreach ($errors as $error): ?>
                                        <li><?= htmlspecialchars($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="d-flex gap-2 mt-4">
                            <a href="/cars" class="btn btn-secondary">
                                <i class="bi bi-x-lg me-1"></i> Anulare
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-plus-lg me-1"></i> Adaugă vehicul
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include __DIR__ . "/../components/footer.view.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>