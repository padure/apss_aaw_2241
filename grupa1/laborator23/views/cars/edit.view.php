<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vehicle - Fleet Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.4/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>

    <div class="container-lg py-5">
        <?php if (empty($car)): ?>
            <div class="alert alert-info text-center py-5" role="alert">
                <h4 class="alert-heading fw-bold">Vehicul negăsit</h4>
                <p class="mb-0">Nu a fost găsit niciun vehicul. Adaugă un vehicul în inventar.</p>
            </div>
        <?php else: ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h5 mb-0 fw-bold">Editare: <?= htmlspecialchars($car->make); ?> <?= htmlspecialchars($car->model); ?></h2>
                                <small class="text-muted">Vehicle ID: <span class="fw-semibold">#<?= htmlspecialchars($car->id ?? 'N/A'); ?></span></small>
                            </div>
                            <div class="text-end">
                                <span class="badge bg-dark fs-6">An: <?= htmlspecialchars($car->year); ?></span>
                            </div>
                        </div>

                        <form action="/cars/<?= htmlspecialchars($car->id); ?>" method="POST" class="card-body">
                            <input type="hidden" name="_METHOD" value="PUT">

                            <div class="mb-3">
                                <label for="make" class="form-label">Make</label>
                                <input id="make" name="make" type="text" class="form-control" value="<?= htmlspecialchars($car->make); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="model" class="form-label">Model</label>
                                <input id="model" name="model" type="text" class="form-control" value="<?= htmlspecialchars($car->model); ?>" required>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="year" class="form-label">Year</label>
                                    <input id="year" name="year" type="number" min="1900" max="2100" class="form-control" value="<?= htmlspecialchars($car->year); ?>" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="color" class="form-label">Color</label>
                                    <input id="color" name="color" type="text" class="form-control" value="<?= htmlspecialchars($car->color); ?>" placeholder="e.g. #ff0000 or red">
                                </div>
                                <div class="col-md-4">
                                    <label for="price" class="form-label">Price (USD)</label>
                                    <input id="price" name="price" type="number" step="0.01" min="0" class="form-control" value="<?= htmlspecialchars($car->price); ?>" required>
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
                                    <i class="bi bi-arrow-left me-1"></i> Anulare
                                </a>
                                <button type="submit" class="btn btn-dark">
                                    <i class="bi bi-save me-1"></i> Salvează modificările
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <?php include __DIR__ . "/../components/footer.view.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>