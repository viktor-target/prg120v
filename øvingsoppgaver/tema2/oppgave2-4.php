<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Er du gift og har du barn</title>
</head>

<body>
    <h1>Svar med j (ja) eller n (nei).</h1>
    <h2>Er du gift?</h2>
    <form method="post" id="giftOgBarn" name="giftOgBarn">
        <input type="text" id="giftSvar" name="giftSvar"><br><br>
        <h2>Har du barn?</h2>
        <input type="text" id="barnSvar" name="barnSvar"><br><br>
        <input type="submit" value="Fortsett" name="svarKnapp" id="svarKnapp">
    </form><br>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $giftSvar = strtolower($_POST["giftSvar"]);
        $barnSvar = strtolower($_POST["barnSvar"]);

        if (!$giftSvar || !$barnSvar) {
            echo "Du har ikke svart på begge spørsmålene.";
        } else if ($giftSvar == "j" && $barnSvar == "j") {
            echo "Du er gift og har barn.<br>";
        } else if ($giftSvar == "j" && $barnSvar == "n") {
            echo "Du er gift og har ikke barn.<br>";
        } else if ($giftSvar == "n" && $barnSvar == "j") {
            echo "Du er ikke gift og har barn.<br>";
        } else if ($giftSvar == "n" && $barnSvar == "n") {
            echo "Du er ikke gift og du har ikke barn.<br>";
        } else {
            echo "Du har svar noe annet enn enn j (ja) eller n (nei).<br>";
        }
    }
    ?>
</body>

</html>