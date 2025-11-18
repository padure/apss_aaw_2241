<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details - Fleet Management</title>
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
                                <h2 class="h4 mb-0 fw-bold"><?= htmlspecialchars($car->make); ?> <?= htmlspecialchars($car->model); ?></h2>
                                <small class="text-muted">Vehicle ID: <span class="fw-semibold">#<?= htmlspecialchars($car->id ?? 'N/A'); ?></span></small>
                            </div>
                            <div class="text-end">
                                <span class="badge bg-dark fs-6">Year: <?= htmlspecialchars($car->year); ?></span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <h6 class="text-muted small mb-2">Color</h6>
                                    <p class="mb-0"><?= htmlspecialchars($car->color); ?></p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-muted small mb-2">Price</h6>
                                    <p class="mb-0 text-success fs-5 fw-bold">$<?= number_format($car->price, 2); ?></p>
                                </div>
                            </div>

                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Make</span>
                                    <span class="fw-semibold"><?= htmlspecialchars($car->make); ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Model</span>
                                    <span class="fw-semibold"><?= htmlspecialchars($car->model); ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Year</span>
                                    <span class="fw-semibold"><?= htmlspecialchars($car->year); ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Color</span>
                                    <span class="fw-semibold"><?= htmlspecialchars($car->color); ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Price</span>
                                    <span class="fw-semibold">$<?= number_format($car->price, 2); ?></span>
                                </li>
                            </ul>

                            <div class="d-flex gap-2">
                                <a href="/cars" class="btn btn-secondary btn-sm">
                                    <i class="bi bi-arrow-left me-1"></i>Înapoi
                                </a>
                                <a href="/cars/<?= $car->id; ?>/edit" class="btn btn-warning btn-sm text-dark">
                                    <i class="bi bi-pencil me-1"></i>Editare
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <footer class="bg-dark text-white-50 py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">© 2025 Fleet Management System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>