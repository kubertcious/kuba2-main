<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .a {
            border: 2px solid black;
            border-collapse: collapse;
            text-align: center;
            margin: 5px;
            width: 75px;
            float: left;
        }

        .b {
            
        }
    </style>
</head>
<body>
<form action="sort.php" method="post">
        <input type="number" name="pozycje" placeholder="wpisz liczbe pozycji">
        <input type="submit" name="ok">
</form>
    <?php 
        if (isset($_POST['pozycje'])) {
            $pozycje = $_POST['pozycje'];
        } else {
            echo " ";
        }

        
        for($i=0; $i<$pozycje; $i++){
            $a = rand(1,10000);
            $org[$i] = $a;
            $asc[$i] = $a;
            $desc[$i] = $a;
        }

        rsort($desc);
        sort($asc);
    ?>

<div class="a">
        <div class="b"> ORG </div>

        <?php 
            for($i=0; $i < $pozycje; $i++){
                echo $i+1 .". ";
                echo $org[$i]."<br>";
            }
        ?>
    </div>

    <div class="a">
        <div class="b"> ASC </div>

        <?php 
            for($i=0; $i < $pozycje; $i++){
                echo $i+1 .". ";
                echo $asc[$i]."<br>";
            }
        ?>
    </div>

    <div class="a">
        <div class="b"> DESC </div>
        <?php 
            for($i=0; $i < $pozycje; $i++){
                echo $i+1 .". ";
                echo $desc[$i]."<br>";
            }
        ?>
    </div>

</body>
</html>