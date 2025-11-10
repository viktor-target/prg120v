<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tall fra 1 til 30</title>
</head>

<body>
    <h1>Tall fra 1 til 30</h1>
    <?php
    $antallTall = 30;
    for ($i = 1; $i <= $antallTall; $i++) {
        echo "$i ";
        if ($i % 10 == 0) {
            echo "<br>";
        }
    }
    ?>
</body>

</html>