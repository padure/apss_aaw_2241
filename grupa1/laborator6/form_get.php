<?php
    if($_SERVER['REQUEST_METHOD'] === "GET"){
        if(isset($_GET['nume'])){
            echo "Salut, " . $_GET['nume'];
        }
    }
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metoda GET</title>
</head>
<body>
    <h3>Formular de salut</h3>
    <form action="" method="get">
        <label for="nume">Nume</label> <br>
        <input type="text" name="nume" id="nume" placeholder="Nume"> <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>