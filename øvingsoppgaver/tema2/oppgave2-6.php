<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematisk ulikhet</title>
</head>

<body>
    <h1>Matematisk ulikhet</h1>
    <h2>Skriv inn to tall som skal sammenliknes.</h2>
    <form method="post" id="ulikhetSkjema" name="ulikhetSkjema">
        <label for="tall1">Tall 1 </label>
        <input type="text" id="tall1" name="tall1"><br>

        <label for="tall2">Tall 2 </label>
        <input type="text" id="tall2" name="tall2"><br><br>
        <input type="submit" value="Fortsett" id="svarKnapp" name="svarKnapp">
    </form><br><br>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $tall1 = $_POST["tall1"];
        $tall2 = $_POST["tall2"];

        if (!$tall1 || !$tall2) {
            echo "Begge tallene er ikke fylt ut.<br>";
        } else {
            echo "Det første tallet er $tall1.<br>";
            echo "Det andre tallet er $tall2.<br><br>";
            if ($tall1 < $tall2) {
                echo "$tall1 er mindre enn $tall2.<br>";
            } else if ($tall1 > $tall2) {
                echo "$tall1 er større enn $tall2.<br>";
            } else {
                echo "$tall1 er lik $tall2.<br>";
            }
        }
    }
    ?>
</body>

</html>