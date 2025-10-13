<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slett klasse</title>
</head>

<body>
    <h1>Slett klasse</h1>
    <script src="obligatorisk-oppgave-2\js-funksjoner.js"></script>
    <form method="post" id="slettKlasseSkjema" name="slettKlasseSkjema" onsubmit="return slettKlasseVarsel();">
        <select id="klassekode" name="klassekode">
            <option value="">--Velg klasse som skal slettes--</option>
            <?php
            include("php-funksjoner.php");
            lagKlasseDropdown();
            ?>
        </select><br><br>
        <input type="submit" value="Slett klasse" id="slettKlasseKnapp" name="slettKlasseKnapp">
        <input type="reset" value="Nullstill" id="nullstillKnapp" name="nullstillKnapp">
    </form><br>

    <?php
    if (isset($_POST["slettKlasseKnapp"])) {
        $klassekode = $_POST["klassekode"];

        if (!$klassekode) {
            echo "Ingen klassekode er valgt.<br>";
        } else {
            include("db-tilkobling.php");
            $sqlSetning = "SELECT * FROM student WHERE klassekode = '$klassekode'";
            $sqlResultat = mysqli_query($db, $sqlSetning)
                or die("Ikke mulig å hente data fra databasen.<br>");
            $antallRader = mysqli_num_rows($sqlResultat);

            if ($antallRader != 0) {
                echo "Denne klassen har minst én student og kan ikke slettes.<br>";
            } else {
                $sqlSetning = "SELECT * FROM klasse WHERE klassekode = '$klassekode'";
                $sqlResultat = mysqli_query($db, $sqlSetning)
                    or die("Ikke mulig å hente data fra databasen.<br>");
                $rad = mysqli_fetch_array($sqlResultat);
                $klassenavn = $rad["klassenavn"];
                $studiumkode = $rad["studiumkode"];

                $sqlSetning = "DELETE FROM klasse WHERE klassekode = '$klassekode'";
                mysqli_query($db, $sqlSetning)
                    or die("Ikke mulig å slette data i databasen.<br>");
                
                echo "Følgende klasse har blitt slettet: $klassekode | $klassenavn | $studiumkode.<br>";
            }
        }
    }
    ?>
</body>

</html>