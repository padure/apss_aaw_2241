<?php
    $nume = "John Doe";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laborator 1</title>
    <style>
        p{
            color: blue;
        }
    </style>
</head>
<body>
    <p>Eu sunt text simplu</p>
    <?php echo "Salut, $nume!"; ?>
    <script> alert("Test"); </script>
</body>
</html>