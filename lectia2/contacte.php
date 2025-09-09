<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Johny Blog</title>
</head>

<body>
    <!-- Meniu -->
    <?php include "./componente/nav.php"; ?>
    <!-- Continut -->
    <main>
        <h1>Contacte</h1>
        <?php for($i=0; $i<3; $i++): ?>
            <?php include "./componente/article.php"; ?>
        <?php endfor; ?>
    </main>
    <!-- Subsol -->
    <?php include "./componente/footer.php"; ?>
</body>

</html>