<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem de Management al Flotei - Acasă</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.4/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container-lg">
            <h2>Lista mecanicilor din sistem</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nume</th>
                        <th>Masini</th>
                        <th>Actiuni</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($mechanics as $mechanic): ?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><?= $mechanic->name; ?></td>
                            <td>
                                <ol>    
                                    <?php foreach( $mechanic->cars()->get() as $car ): ?>
                                        <li><?= $car->name; ?></li>
                                    <?php endforeach; ?>
                                </ol>
                            </td>
                            <td>
                                <a href="/mechanics/<?=$mechanic->id?>/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Footer -->
    <?php include __DIR__ . "/../components/footer.view.php"; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>