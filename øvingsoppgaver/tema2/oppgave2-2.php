<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Er du student</title>
</head>

<body>
    <h1>Er du student?</h1>
    <h2>Svar med j (ja) eller n (nei).</h2>
    <form method="post" id="erDuStudent" name="erDuStudent">
        <input type="text" id="svar" name="svar"><br><br>
        <input type="submit" value="Fortsett" name="svarKnapp" id="svarKnapp">
    </form><br>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $svar = $_POST["svar"];
        if (!$svar) {
            echo "Du har ikke svart.";            
        } else if ($svar == "j") {
            echo "Du har svart ja på spørsmålet om du er student.";
        } else if ($svar == "n") {
            echo "Du har svart nei på spørsmålet om du er student.";
        } else {
            echo "Du har svart noe annet enn ja (j) eller nei (n).";
        }
    }
    ?>
</body>

</html>