<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vis alle studenter</title>
    <link rel="stylesheet" href="obligatorisk-oppgave-2\style.css">
</head>

<body>
    <?php
    include("db-tilkobling.php");

    $sqlSetning = "SELECT * FROM student;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen.");
    $antallRader = mysqli_num_rows($sqlResultat);
    ?>

    <h1>Registrerte studenter</h1>
    <table>
        <tr>
            <th>Brukernavn</th>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Klassekode</th>
        </tr>

        <?php
        for ($r = 0; $r < $antallRader; $r++) {
            $rad = mysqli_fetch_array($sqlResultat);
            $brukernavn = $rad["brukernavn"];
            $fornavn = $rad["fornavn"];
            $etternavn = $rad["etternavn"];
            $klassekode = $rad["klassekode"];

            echo "<tr>
            <td>$brukernavn</td>
            <td>$fornavn</td>
            <td>$etternavn</td>
            <td>$klassekode</td><tr>";
        }
        ?>
    </table>
</body>

</html>