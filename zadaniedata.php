<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$data = time(); 
$dzisiaj = date("l", $data);
$miesiacteraz = date("F", $data);

$dni = [
    "Sunday" => "Niedziela",
    "Monday" => "Poniedziałek",
    "Tuesday" => "Wtorek",
    "Wednesday" => "Środa",
    "Thursday" => "Czwartek",
    "Friday" => "Piątek",
    "Saturday" => "Sobota"
];

$angMies = [
    "January" => "Styczeń",
    "February" => "Luty",
    "March" => "Marzec",
    "April" => "Kwiecień",
    "May" => "Maj",
    "June" => "Czerwiec",
    "July" => "Lipiec",
    "August" => "Sierpień",
    "September" => "Wrzesień",
    "October" => "Październik",
    "November" => "Listopad",
    "December" => "Grudzień"
];

$dzienTygodnia = $dni[$dzisiaj];
$miesiac = $angMies[$miesiacteraz];

echo "Dziś jest: " . date("d-m-Y", $data) . " rok <br>";
echo "Jest: " . date("i", $data) . " minut po godzinie " . date("H", $data) . "-tej <br>";
echo "Dziś jest: " . $dzienTygodnia . ", " . date("d", $data) . " " . $miesiac . " " . date("Y", $data) . " roku.";
?>

</body>
</html>