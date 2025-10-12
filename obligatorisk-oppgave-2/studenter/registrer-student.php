<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrer student</title>
</head>

<body>
    <h1>Registrer student</h1>
    <form method="post" id="registrerStudent" name="registrerStudent">
        Brukernavn <input type="text" id="brukernavn" name="brukernavn"><br>
        Fornavn <input type="text" id="fornavn" name="fornavn"><br>
        Etternavn <input type="text" id="etternavn" name="etternavn"><br>
        Klassekode <select name="klassekode" id="klassekode">
            <?php
            include("../php-funksjoner.php");
            lagKlassekodeDropdown();
            ?>
        </select><br><br>
        <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp">
        <input type="reset" value="Nullstill" id="nullstillKnapp" name="nullstillKnapp">
    </form><br>

    <?php
    if (isset($_POST["registrerStudentKnapp"])) {
        $brukernavn = $_POST["brukernavn"];
        $fornavn = $_POST["fornavn"];
        $etternavn = $_POST["etternavn"];
        $klassekode = $_POST["klassekode"];

        if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {
            if (!$brukernavn) {
                echo "Brukernavn er ikke fylt ut.<br>";
            }
            if (!$fornavn) {
                echo "Fornavn er ikke fylt ut.<br>";
            }
            if (!$etternavn) {
                echo "Etternavn er ikke fylt ut.<br>";
            }
            if (!$klassekode) {
                echo "Klassekode er ikke valgt.<br>";
            }
        } else {
            include("../db-tilkobling.php");

            $sqlSetning = "SELECT * FROM student WHERE brukernavn = '$brukernavn';";
            $sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen.");
            $antallRader = mysqli_num_rows($sqlResultat);

            if ($antallRader != 0) {
                echo "Brukernavnet er registrert fra før.<br>";
            } else {
                $sqlSetning = "INSERT INTO student VALUES('$brukernavn', $fornavn, '$etternavn', '$klassekode');";
                mysqli_query($db, $sqlSetning) or die("Ikke mulig å registrere data i databasen.<br>");

                echo "Følgende student er nå registrert: $fornavn $etternavn.";
            }
        }
    }
    ?>
</body>

</html>