<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vis alle klasser</title>
    <style>
        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 8px 8px;
        }
    </style>
</head>

<body>
    <?php

    include("../db-tilkobling.php");

    $sqlSetning = "SELECT * FROM klasse;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen.");
    $antallRader = mysqli_num_rows($sqlResultat);
    ?>
    <h1>Registrerte klasser</h1>
    <table>
        <tr>
            <th>Klassekode</th>
            <th>Klassenavn</th>
            <th>Studiumkode</th>
        </tr>
        <?php
        for ($r = 0; $r < $antallRader; $r++) {
            $rad = mysqli_fetch_array($sqlResultat);
            $klassekode = $rad["klassekode"];
            $klassenavn = $rad["klassenavn"];
            $studiumkode = $rad["studiumkode"];

            echo "<tr><td>$klassekode</td><td>$klassenavn</td><td>$studiumkode</td></tr>";
        }
        ?>
    </table>
</body>

</html>