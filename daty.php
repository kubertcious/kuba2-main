<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo date("j - n - Y", strtotime("2017-10-11"));
        echo "<br>";
        echo "Jest " . date("i", strtotime("10:00 +15 minutes")) . " minut po godzinie " . date("H", strtotime("10:00 +15 minutes"));
        echo "<br>";
        echo "Dziś jest: " . date("D, j F Y", strtotime("2017-10-11"));
    ?>
</body>
</html>