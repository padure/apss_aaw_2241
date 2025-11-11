<?php
    $nume = $_GET['nume'];
    if(is_dir("public/" . $nume)){
        rmdir("public/" . $nume);
    }
    header('location:index.php');
?>