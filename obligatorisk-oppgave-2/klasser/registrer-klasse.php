<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registrer klasse</h1>
    <form method="post" id="registrerKlasse" name="registrerKlasse">
        Klassekode <input type="text" id="klassekode" name="klassekode"><br>
        Klassenavn <input type="text" id="klassenavn" name="klassenavn"><br>
        Studiumkode <input type="text" id="studiumkode" name="studiumkode"><br>
        <input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp">
        <input type="reset" value="Nullstill" id="nullstillKnapp" name="nullstillKnapp">
    </form><br>

    <?php
    if (isset($_POST["registrerKlasseKnapp"])) {
        $klassekode = $_POST["klassekode"];
        $klassenavn = $_POST["klassenavn"];
        $studiumkode = $_POST["studiumkode"];

        if (!$klassekode) {
            echo "Klassekode er ikke fylt ut.<br>";
        }
        if (!$klassenavn) {
            echo "Klassenavn er ikke fylt ut.<br>";
        }
        if (!$studiumkode) {
            echo "Studiumkode er ikke fylt ut.<br>";
        } else {
            include("../db-tilkobling.php");

            $sqlSetning = "SELECT * FROM klasse WHERE klassekode = '$klassekode';";
            $sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen.");
            $antallRader = mysqli_num_rows($sqlResultat);

            if ($antallRader != 0) {
                echo "Klassekoden er registrert fra før.<br>";
            } else {
                $sqlSetning = "INSERT INTO klasse VALUES('$klassekode', '$klassenavn', '$studiumkode');";
                mysqli_query($db, $sqlSetning) or die("Ikke mulig å registrere data i databasen.<br>");

                echo "Følgende klasse er nå registrert:<br>
                $klassekode<br>
                $klassenavn<br>
                $studiumkode.";
            }
        }
    }
    ?>
</body>

</html>