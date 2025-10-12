<?php

function lagStudentDropdown()
{
    include("db-tilkobling.php");
    $sqlSetning = "SELECT * FROM student ORDER BY brukernavn;";
    $sqlResultat = mysqli_query($db, $sqlSetning)
        or die("Ikke mulig å hente data fra databasen.<br>");
    $antallRader = mysqli_num_rows($sqlResultat);

    for ($r = 0; $r < $antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $brukernavn = $rad["brukernavn"];
        $fornavn = $rad["fornavn"];
        $etternavn = $rad["etternavn"];
        $klassekode = $rad["klassekode"];

        echo "<option value='$brukernavn'>$fornavn $etternavn $klassekode</option>";
    }
}

function lagKlassekodeDropdown()
{
    include("db-tilkobling.php");
    $sqlSetning = "SELECT klassekode FROM klasse;";
    $sqlResultat = mysqli_query($db, $sqlSetning)
        or die("Ikke mulig å hente data fra databasen.<br>");
    $antallKolonner = mysqli_num_rows($sqlResultat);

    for ($k = 0; $k < $antallKolonner; $k++) {
        $kolonne = mysqli_fetch_array($sqlResultat);
        $klassekode = $kolonne[$k];

        echo "<option value='$klassekode'>$klassekode</option>";
    }
}

?>