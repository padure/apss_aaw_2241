<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleet Management - Cars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>
    
    <!-- Main Content -->
    <div class="container-lg py-5">
        <div class="row justify-content-center">
            <a href="/cars/create" class="btn btn-dark btn-sm mb-3 col-1">Adauga</a>
        </div>
        <!-- Cars List -->
        <?php if (empty($cars)): ?>
            <div class="alert alert-info text-center py-5" role="alert">
                <h4 class="alert-heading fw-bold">No Vehicles Found</h4>
                <p class="mb-0">There are no vehicles in your inventory yet. Start adding vehicles to your fleet.</p>
            </div>
        <?php else: ?>
            <div class="row g-4">
                <?php foreach ($cars as $car): ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card border-0 shadow-sm h-100 overflow-hidden">
                            <!-- Card Header with Gradient -->
                            <div class="bg-gradient bg-dark text-white p-4">
                                <h5 class="card-title fw-bold mb-1"><?= htmlspecialchars($car->make); ?> <?= htmlspecialchars($car->model); ?></h5>
                                <p class="text-white-50 mb-0 small">Year: <?= htmlspecialchars($car->year); ?></p>
                            </div>
                            
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="row g-2 mb-3">
                                    <div class="col-6">
                                        <small class="text-muted d-block fw-semibold">Color</small>
                                        <span class="badge rounded-pill" style="background-color: <?= htmlspecialchars($car->color); ?>; color: #fff; width: 24px; height: 24px; display: inline-flex; align-items: center; justify-content: center;"></span>
                                        <span class="ms-2"><?= htmlspecialchars($car->color); ?></span>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted d-block fw-semibold">Price</small>
                                        <span class="text-success fw-bold">$<?= number_format($car->price, 2); ?></span>
                                    </div>
                                </div>
                                
                                <div class="d-grid gap-2">
                                    <small class="text-muted fw-semibold">Details</small>
                                    <p class="text-secondary mb-0 small">Vehicle ID: <span class="fw-bold">#<?= $car->id; ?></span></p>
                                </div>
                            </div>
                            
                            <!-- Card Footer -->
                            <div class="card-footer bg-white border-top border-light py-3">
                                <div class="d-flex gap-2">
                                    <a href="/cars/<?= $car->id ?>" class="btn btn-dark btn-sm flex-grow-1 fw-semibold">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="/cars/<?= $car->id ?>/edit" class="btn btn-warning btn-sm flex-grow-1 fw-semibold text-dark">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white-50 py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">© 2025 Fleet Management System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>