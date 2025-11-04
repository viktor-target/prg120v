<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Er du student 2</title>
</head>

<body>
    <h1>Er du student? 2</h1>
    <h2>Svar med j/ja eller n/nei (store eller små bokstaver).</h2>
    <form method="post" id="erDuStudent" name="erDuStudent">
        <input type="text" id="svar" name="svar"><br><br>
        <input type="submit" value="Fortsett" name="svarKnapp" id="svarKnapp">
    </form><br>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $svar = strtolower($_POST["svar"]);
        if (!ctype_alpha($svar)) {
            echo "Du har skrevet noe annet enn tekst.<br>";
        } else if (!$svar) {
            echo "Du har ikke svart.<br>";
        } else if ($svar == "j" || $svar == "ja") {
            echo "Du har svart ja på spørsmålet om du er student.<br>";
        } else if ($svar == "n" || $svar == "nei") {
            echo "Du har svart nei på spørsmålet om du er student.<br>";
        } else {
            echo "Du har svart noe annet enn ja/j eller nei/n.<br>";
        }
    }
    ?>
</body>

</html>