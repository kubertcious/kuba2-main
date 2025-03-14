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
        th {
            text-align: center;
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
<form action="string.php" method="post">
        <input type="text" default="today" name="data" placeholder="dzień/mies/rok godz:min:sek">
        <input type="submit" name="ok">
</form>

<?php
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
    
    
    $godz1 = substr($data, 10, 10);
    $data1 = substr($data, 0, 10);

    echo $test;
    echo "</br>";
    echo $data1;

    $godziny = explode(":",$godz1);
    $daty = explode("/",$data1);

    echo "</br>";
    print_r($godziny);
    echo "</br>";
    print_r($daty);

    $dzien = ($daty[0]);
    $mies = ($daty[1]);
    $rok = ($daty[2]);

    $godz = $godziny[0];
    $min = $godziny[1];
    $sek = $godziny[2];

    function nazwamies($monthNumber) {
        $months = [
            "01" => 'Styczeń', "02" => 'Luty', "03" => 'Marzec', "04" => 'Kwiecień',
            "05" => 'Maj', "06" => 'Czerwiec', "07" => 'Lipiec', "08" => 'Sierpień',
            "09" => 'Wrzesień', 10 => 'Październik', 11 => 'Listopad', 12 => 'Grudzień',
            "1" => 'Styczeń', "2" => 'Luty', "3" => 'Marzec', "4" => 'Kwiecień',
            "5" => 'Maj', "6" => 'Czerwiec', "7" => 'Lipiec', "8" => 'Sierpień',
            "9" => 'Wrzesień'
        ];
        return $months[$monthNumber] ?? 'Invalid month';
} 
    } 
?>

<table><thead>
  <tr>
    <th colspan="2">CZAS</th>
  </tr></thead>
<tbody>
  <tr>
    <td>Dzień</td>
    <td><?php echo $dzien; ?></td>
  </tr>
  <tr>
    <td>Miesiąc</td>
    <td><?php echo nazwamies($mies);; ?></td>
  </tr>
  <tr>
    <td>Rok</td>
    <td><?php echo $rok; ?></td>
  </tr>
  <tr>
    <td>Godzina</td>
    <td><?php echo $godz; ?></td>
  </tr>
  <tr>
    <td>Minuta</td>
    <td><?php echo $min; ?></td>
  </tr>
  <tr>
    <td>Sekunda</td>
    <td><?php echo $sek; ?></td>
  </tr>
</tbody>
</table>



</body>
</html>