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
        <?php
        $antallTall = 3;
        for ($i = 1; $i <= $antallTall; $i++) {
            echo "
            <label for='tall$i'>Tall $i</label>
            <input type='text' id='tall$i' name='tall[]'><br>";
        }
        ?><br>
        <input type="submit" value="Fortsett" id="svarKnapp" name="svarKnapp">
    </form><br>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $tall = $_POST["tall"];
        if (!$tall[0] || !$tall[1] || !$tall[2]) {
            echo "Alle tallene er ikke fyllt ut.";
        } else if (
            !ctype_digit($tall[0]) ||
            !ctype_digit($tall[1]) ||
            !ctype_digit($tall[2])
        ) {
            echo "Du har skrevet noe annet enn tall.";
        } else {
            echo "
                Tall 1 er $tall[0]<br>
                Tall 2 er $tall[1]<br>
                Tall 3 er $tall[2]<br><br>";

            sammenlignTall($tall[0], $tall[1]);
            sammenlignTall($tall[1], $tall[2]);
            sammenlignTall($tall[2], $tall[0]);
        }
    }
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
    ?>
</body>

</html>