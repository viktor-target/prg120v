<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vis alle klasser</title>
</head>

<body>
    <?php

    include("../db-tilkobling.php");

    $sqlSetning = "SELECT * FROM klasse;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen.");
    $antallRader = mysqli_num_rows($sqlResultat);
        ?>
</body>

</html>