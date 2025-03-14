
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            margin: auto;
            padding: 5px;
            text-align: left;
        }
        td {
            width: 75px;
            
        }
        .a {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <form action="petle.php" method="post">
        <input type="number" name="kolumny" placeholder="wpisz liczbe kolumn">
        <input type="number" name="wiersze" placeholder="wpisz liczbe wierszy">
        <input type="submit" name="ok">
    </form>
    
                
    <?php 
        
        $tab = array();
        $ko = $_POST['kolumny'];
        $wi = $_POST['wiersze'];

        for($i=0; $i<$ko; $i++)
            for($v=0; $v<$wi; $v++)
                $tab[$i][$v] = rand(0,9);
    ?>
    
    <table>
    <?php
        for($i=0; $i<$ko; $i++){
            echo "<tr>";
            for($v=0; $v<$wi; $v++){       
                echo "<td "; 
                if($tab[$i][$v] <5){
                    echo "class=\"a\"";
                } 
                echo ">"; 
                echo $tab[$i][$v]."</td> ";
            }
            echo "</tr>";
        }
    ?>
    </table> 
</body>
</html>