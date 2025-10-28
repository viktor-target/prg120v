<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vis tall i motsatte rekkefølger</title>
</head>

<body>
    <h1>Vis tall i motsatte rekkefølger</h1>
    <h2>Skriv inn 5 tall</h2>
    <form method="post" id="tallSkjema" name="tallSkjema">
        <?php
        $antallTall = 5;
        for ($indeks = 1; $indeks <= $antallTall; $indeks++) {
            echo "
            <label for='tall$indeks'>Tall $indeks </label>
            <input type='number' id='tall$indeks' name='tall[]'><br>";
        }
        ?>
        <input type="submit" value="Fortsett" id="svarKnapp" name="svarKnapp">
    </form>

    <?php
    if (isset($_POST["svarKnapp"])) {
        $tall = $_POST["tall"];
        $alleTall = count($tall);
        for ($i = 0; $i < $alleTall; $i++) {
            echo "$tall[$i] ";
        }
        for ($i = $alleTall - 1; $i >= 0; $i--) {
            echo "$tall[$i]";
        }
    }
    ?>
</body>

</html>