<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tall fra 1 til 10</title>
</head>

<body>
    <h1>Tall fra 1 til 10</h1>
    <?php
    $antallTall = 10;
    for ($i = 1; $i <= $antallTall; $i++) {
        $kvadrat = $i ** 2;
        echo "$i har kvadratet $kvadrat<br>";
    }
    ?>
</body>

</html>