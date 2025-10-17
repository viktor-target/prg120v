<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tre ganger tre</title>
</head>

<body>
    <h1>Tre ganger tre</h1>
    <p>Hva er 3 ganger 3?</p>
    <form method="post" id="treGangerTre" name="treGangerTre">
        <input type="text" id="svar" name="svar"><br><br>
        <input type="submit" value="Fortsett" id="svarKnapp" name="svarKnapp">
    </form><br>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $svar = $_POST["svar"];
        if ($svar == 9) {
            echo "Riktig. 3 ganger 3 er 9.";
        } else {
            echo "Feil. 3 ganger 3 er ikke $svar. 3 ganger 3 er 9.";
        }
    }
    ?>
</body>

</html>