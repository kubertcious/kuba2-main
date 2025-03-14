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

        div {
            height: 320px;
            overflow: auto;
        }

       
    </style>
</head>
<body>
    <form action="tablice.php" method="post">
        <input type="number" name="pozycje" placeholder="wpisz liczbe pozycji">
        <input type="submit" name="ok">
        <div>
        <?php
            
            if (isset($_POST['pozycje'])) {
                $n = $_POST['pozycje'];
            }
            
            $tab1 = array();
            $tab2 = array();
            $tab3 = array();
            $tab4 = array();

            if (isset($_POST['ok'])) { ?>
            <table>
                <tr>
                    <td>tab1</td>
                    <td>tab2</td>
                    <td>tab3</td>
                    <td>tab4</td>
                </tr>
                <?php 
                    function czyPierwsza($liczba) {
                        for ($j=2; $j < $liczba; $j++) { 
                            if ($liczba % $j == 0) return false; 
                        }
                        return true;
                    }

                    $liczbaPierwsza = 2;

                    for ($i=0; $i < $n; $i++) { 
                        
                        $tab1[$i] = $i+1;
                        $tab2[$i] = ($i+1)*2;

                        if ($i<2) {
                            $tab3[$i] = 1;
                        } else {
                            $tab3[$i] = $tab3[$i-1] + $tab3[$i-2];
                        }

                        while (!czyPierwsza($liczbaPierwsza)) {
                            $liczbaPierwsza++;
                        }
                        $tab4[$i] = $liczbaPierwsza;
                        $liczbaPierwsza++;
                     
                ?>
                    <tr>
                        <td>
                           <?php echo $tab1[$i]; ?>
                        </td>
                        <td>
                           <?php echo $tab2[$i]; ?>
                        </td>
                        <td>
                           <?php echo $tab3[$i]; ?>
                        </td>
                        <td>
                           <?php echo $tab4[$i]; ?>
                        </td>
                    </tr>
                    <?php } ?>
            </table>
        <?php } ?>
        </div>
    </form>

</body>
</html>