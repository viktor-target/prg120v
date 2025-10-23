<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vis tall i motsatte rekkefølger</title>
</head>

<body>
    <h1>Vis tall i motsatte rekkefølger</h1>
    <h2>Skriv inn 5 tall.</h2>
    <form method="post" id="tallSkjema" name="tallSkjema">
        <input type="number" id="tall1" name="tall1"><br>
        <input type="number" id="tall2" name="tall2"><br>
        <input type="number" id="tall3" name="tall3"><br>
        <input type="number" id="tall4" name="tall4"><br>
        <input type="number" id="tall5" name="tall5"><br><br>
        <input type="submit" id="svarKnapp" name="svarKnapp">
    </form>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $tall1 = $_POST["tall1"];
        $tall2 = $_POST["tall2"];
        $tall3 = $_POST["tall3"];
        $tall4 = $_POST["tall4"];
        $tall5 = $_POST["tall5"];
        $alleTall = [$tall1, $tall2, $tall3, $tall4, $tall5];

        for ($x = 0; $x < count($alleTall); $x++) {
            echo $alleTall[$x], " ";
            if ($x == count($antallTall)) {
                echo "<br>";
            }
        }
        for ($x = count($alleTall) - 1; $x >= 0; $x--) {
            echo $alleTall[$x], " ";
        }
    }
    ?>
</body>

</html>