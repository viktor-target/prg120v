<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematisk ulihet 2</title>
</head>

<body>
    <h1>Matematisk ulikhet 2</h1>
    <h2>Skriv inn tre tall som skal sammenliknes.</h2>
    <form method="post">
        <label for="tall1">Tall 1</label>
        <input type="text" id="tall1" name="tall1"><br>

        <label for="tall2">Tall 2</label>
        <input type="text" id="tall2" name="tall2"><br>

        <label for="tall1">Tall 3</label>
        <input type="text" id="tall3" name="tall3"><br><br>

        <input type="submit" value="Fortsett" id="svarKnapp" name="svarKnapp">
    </form>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $tall1 = $_POST["tall1"];
        $tall2 = $_POST["tall2"];
        $tall3 = $_POST["tall1"];

        if (!$tall1 || !$tall2 || !$tall3) {
            echo "Alle tallene er ikke fyllt ut.";
        } else if (
            !ctype_digit($tall1) ||
            !ctype_digit($tall2) ||
            !ctype_digit($tall3)
        ) {
            echo "Du har skrevet noe annet enn tall.";
        } else {
            if ($tall1 < $tall2) {
                echo "$tall1 er mindre enn $tall2<br>";
            } else if ($tall1 > $tall2) {
                echo "$tall1 er større enn $tall2<br>";
            } else {
                echo "$tall1 er lik $tall2<br>";
            }
            if ($tall2 < $tall3) {
                echo "$tall2 er mindre enn $tall3<br>";
            } else if ($tall2 > $tall3) {
                echo "$tall2 er større enn $tall3<br>";
            } else {
                echo "$tall2 er lik $tall3<br>";
            }
            if ($tall3 < $tall1) {
                echo "$tall3 er mindre enn $tall1<br>";
            } else if ($tall3 > $tall1) {
                echo "$tall3 er større enn $tall1<br>";
            } else {
                echo "$tall3 er lik $tall1<br>";
            }
        }
    }
    ?>
</body>

</html>