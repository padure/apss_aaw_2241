<?php
    define("PUBLIC_DIR", "public/");

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['nume'])){
            $nume_dir = $_POST['nume'];
            if(!is_dir(PUBLIC_DIR . $nume_dir)){
                mkdir(PUBLIC_DIR . $nume_dir);
            }
        }
    }
    // if($response = opendir(PUBLIC_DIR)){
    //     while(false !== ($content = readdir($response) )){
    //         $dirs = ltrim($content, ".");
    //     }
    //     closedir($response);
    // }
    $filles = scandir(PUBLIC_DIR);
    array_shift($filles);
    array_shift($filles);
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucrul cu directoare și fișiere</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3 class="mt-5">Gestionare directorii</h3>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nume" class="form-label">Nume directoriu</label>
                <input type="text" name="nume" id="nume" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark">Save</button>
        </form>
        <h3 class="mt-5">Lista folderilor</h3>
        <?php foreach($filles as $file): ?>
            <div class="d-flex align-items-center justify-content-between border p-2">
                <?= ucfirst($file); ?>
                <a href="delete.php?nume=<?=$file;?>" class="btn btn-danger">Delete</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>