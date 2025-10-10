<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slett student</title>
</head>

<body>
    <h1>Slett student</h1>
    <form method="post" id="slettStudentSkjema" name="slettStudentSkjema">
        <select name="brukernavn" id="brukernavn">
            <option>--Velg student som skal slettes--</option>
            <!-- Kode/Funksjon som fyller inn listen med studentbrukernavn -->
        </select><br>
        <input type="submit" value="Slett student" id="slettStudentKnapp" name="slettStudentKnapp">
    </form><br>

    <?php
    if (isset($_POST["slettStudentKnapp"])) {
        $brukernavn = $_POST["brukernavn"];
        if (!$brukernavn) {
            echo "Brukernavn er ikke valgt. <br>";
        } else {
            /* Kode som sletter studenten */
        }
    }
    ?>
</body>

</html>