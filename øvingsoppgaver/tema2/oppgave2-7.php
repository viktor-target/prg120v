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
    </form><br>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $tall1 = $_POST["tall1"];
        $tall2 = $_POST["tall2"];
        $tall3 = $_POST["tall3"];

        if (!$tall1 || !$tall2 || !$tall3) {
            echo "Alle tallene er ikke fyllt ut.";
        } else if (
            !ctype_digit($tall1) ||
            !ctype_digit($tall2) ||
            !ctype_digit($tall3)
        ) {
            echo "Du har skrevet noe annet enn tall.";
        } else {
            echo "
            Tall 1 er $tall1<br>
            Tall 2 er $tall2<br>
            Tall 3 er $tall3<br><br>";

            sammenlignTall($tall1, $tall2);
            sammenlignTall($tall2, $tall3);
            sammenlignTall($tall3, $tall1);

            function sammenlignTall($num1, $num2)
            {
                if ($num1 < $num2) {
                    echo "$num1 er mindre enn $num2<br>";
                } else if ($num1 > $num2) {
                    echo "$num1 er større enn $num2<br>";
                } else {
                    echo "$num1 er lik $num2<br>";
                }
            }

        }
    }
    ?>
</body>

</html>