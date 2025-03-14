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
        .min {
            background-color: green;
          
        }

        .max {
            background-color: red;
          
        }
    </style>
</head>
<body>
        <form action="arraye.php" method="post">
        <input type="number" name="pozycje" placeholder="wpisz liczbe pozycji">
        <input type="submit" name="ok">
    <?php 
        if (isset($_POST['pozycje'])) {
            $pozycje = $_POST['pozycje'];
        } else {
            echo " ";
        }

        $netto = array();
        $tablicadruga = array();
        
        
    ?>
    <table>
        <tr>
            <td>Ceny netto</td>
            <td>Ceny brutto</td>
        </tr>
       
        <?php 

        
        for($i=0; $i<$pozycje; $i++){
            $a = rand(1,1000);
            $netto[$i] = $a;
        }

        foreach($netto as $i => $vat){
            $tablicadruga[$i] = $vat*1.23;
           }

            
            
            for($i=0; $i<$pozycje; $i++){
            echo "<tr> <td";
                if($netto[$i] == min($netto)){
                    echo " class=\"min\">";
                } elseif($netto[$i] == max($netto)) {
                    echo " class=\"max\">";
                } else {
                    echo ">";
                }
            echo $netto[$i];
            echo "</td> <td";
                if($tablicadruga[$i] == min($tablicadruga)){
                   echo " class=\"min\">";
                } elseif($tablicadruga[$i] == max($tablicadruga)) {
                    echo " class=\"max\">";
                } else {
                    echo ">";
                }
            echo $tablicadruga[$i];
            echo "</tr> </td>";
            
        } 
        
        
        ?>
    
    <?php
       
    ?>
</body>
</html>