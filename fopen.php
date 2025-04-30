<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $plik = fopen("C:\\xampp\\htdocs\\kuba2\\plik.txt", "r");
    if($plik){
        while (($wiersz = fgets($plik, 2)) !== false)
            {
                echo $wiersz;
            }
        if (!feof($plik)){
            echo "Błąd";
        }
        fclose($plik);
    }
    ?>
</body>
</html>