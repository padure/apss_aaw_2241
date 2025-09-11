<?php
    $users = [
        "Sally Goldner",
        "Mr. Raquel Daugherty",
        "Ms. Krystal Russel",
        "Mae Kohler",
        "Mrs. Moses Bednar",
        "Erin Gislason",
        "Alton Block DDS",
    ];  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <h2>Lisat utilizatorilor</h2>
    <?php require "./users.php"; ?>
</body>
</html>