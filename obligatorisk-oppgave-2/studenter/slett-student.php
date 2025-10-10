<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slett student</title>
</head>

<body>
    <script src="../js-funksjoner.js"></script>
    <h1>Slett student</h1>
    <form method="post" id="slettStudentSkjema" name="slettStudentSkjema" onsubmit="return slettStudentVarsel()">
        <select name="brukernavn" id="brukernavn">
            <option>--Velg student som skal slettes--</option>
            <?php
            include("../php-funksjoner.php");
            lagStudentDropdown();
            ?>
        </select><br><br>
        <input type="submit" value="Slett student" id="slettStudentKnapp" name="slettStudentKnapp">
        <input type="reset" value="Nullstill" name="nullstillKnapp" id="nullstillKnapp">
    </form><br>

    <?php
    if (isset($_POST["slettStudentKnapp"])) {
        $brukernavn = $_POST["brukernavn"];

        if (!$brukernavn) {
            echo "Brukernavn er ikke valgt.<br>";

        } else {
            include("../db-tilkobling.php");
            $sqlSetning = "SELECT * FROM student WHERE brukernavn = '$brukernavn'";
            $sqlResultat = mysqli_query($db, $sqlSetning)
                or die("Ikke mulig å hente data fra databasen.<br>");
            $rad = mysqli_fetch_array($sqlResultat);
            $fornavn = $rad["fornavn"];
            $etternavn = $rad["etternavn"];

            $sqlSetning = "DELETE FROM student WHERE brukernavn = '$brukernavn';";
            mysqli_query($db, $sqlSetning)
                or die("Ikke mulig å slette data i databasen.<br>");

            echo "Følgende student har blitt slettet: $fornavn $etternavn.";
        }
    }
    ?>
</body>

</html>