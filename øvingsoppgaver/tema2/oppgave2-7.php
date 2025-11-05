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
        for ($i = 0; $i < count($tall); $i++) {
            if (!$tall[$i]) {
                echo "Tall $i+1 er ikke fyllt ut.<br>";
            } else if (!ctype_digit($tall[$i])) {
                echo "Tall $i+1 ($tall[$i]) er ikke et tall.<br>";
            } else {
                echo "Tall $i+1 er $tall[1]<br>";
            }
        }
        for ($i = 0; $i < count($tall); $i++) {
            sammenlignTall($tall[$i], $tall[$i]);
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

        /* $tall1 = $_POST["tall1"];
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


            }

        } */
    }
    ?>
</body>

</html>