<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum av tall fra 1 til 10</title>
</head>

<body>
    <h1>Sum av tall fra 1 til 10</h1>

    <?php
    $startTall = 1;
    $sluttTall = 10;
    $sum = 0;

    for ($i = $startTall; $i <= $sluttTall; $i++) {
        $sum += $i;
    }

    echo "Summen av tallene fra $startTall til $sluttTall er $sum";
    ?>
</body>

</html>