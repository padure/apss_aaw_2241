<?php 
    $numere = [78, 4, 9, 5, 14];

    foreach($numere as $numar){
        if($numar % 2 === 0)
            echo $numar . "<br>";
    }

    $lectii = [
        ["id" => 2, "nume" => "Matematica", "zi" => "Luni", "pozitie" => 1],
        ["id" => 3, "nume" => "Fizica", "zi" => "Luni", "pozitie" => 2],
        ["id" => 4, "nume" => "Chimia", "zi" => "Luni", "pozitie" => 3],
        ["id" => 6, "nume" => "Limba engleza", "zi" => "Marti", "pozitie" => 1],
        ["id" => 7, "nume" => "Geografia", "zi" => "Marti", "pozitie" => 2],
    ];

    foreach($lectii as $lectie){
        foreach($lectie as $key => $valoare){
            if($key === "nume")
                echo  $valoare . "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectii</title>
</head>
<body>
    <h2>Orar</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nume</th>
                <th>Zi</th>
                <th>Pozitie</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lectii as $lectie): ?>
                <tr>
                    <td><?php echo $lectie['id']; ?></td>
                    <td><?php echo $lectie['nume']; ?></td>
                    <td><?php echo $lectie['zi']; ?></td>
                    <td><?php echo $lectie['pozitie']; ?></td>
                    <td><?php echo isset($lectie['profesor'])? $lectie['profesor'] :"Nu este setat"; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
