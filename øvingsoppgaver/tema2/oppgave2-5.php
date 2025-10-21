<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematikk 3</title>
</head>

<body>
    <h1>Matematikk 3</h1>
    <h2>Velg tall og regneoperasjon.</h2>
    <h3>Regneoperasjon må være et tall fra 1-4.<br>
        (1 = addisjon | 2 = subtraksjon | 3 = multiplikasjon | 4 = divisjon)</h3>
    <form method="post" id="matteSkjema" name="matteSkjema">
        Tall 1<input type="text" id="tall1" name="tall1"><br>
        Tall 2<input type="text" id="tall2" name="tall2"><br>
        Regneoperasjon<input type="text" id="regneoperasjon" name="regneoperasjon"><br><br>
        <input type="submit" value="Fortsett" id="svarKnapp" name="svarKnapp"><br><br>
    </form>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $tall1 = $_POST["tall1"];
        $tall2 = $_POST["tall2"];
        $regneoperasjon = $_POST["regneoperasjon"];

        if ($regneoperasjon == 1) {
            echo "Det første tallet er $tall1.<br>";
            echo "Det andre tallet er $tall2.<br>";
            echo "Regneoperasjonen er addisjon.<br><br>";
            $resultat = $tall1 + $tall2;
            echo "Resultatet av regneoperasjonen ($tall1 + $tall2) er $resultat.<br>";
        }
    }
    ?>
</body>

</html>