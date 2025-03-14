<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$date = time(); 

$days = [
    "Sunday" => "Niedziela",
    "Monday" => "Poniedziałek",
    "Tuesday" => "Wtorek",
    "Wednesday" => "Środa",
    "Thursday" => "Czwartek",
    "Friday" => "Piątek",
    "Saturday" => "Sobota"
];

$months = [
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


$weekday = date("l", $date);
$month = date("F", $date);

//F = Pełna nazwa miesiąca
//l = Pełna nazwa dnia tygodnia
$dzienTygodnia = $days[$weekday];
$miesiac = $months[$month];

echo "<h1>Data i Czas</h1>";
echo "Dziś jest: " . date("d-m-Y", $date) . " r. <br>";
echo "Jest: " . date("i", $date) . " minut po godzinie " . date("H", $date) . "-tej <br>";
echo "Dziś jest: " . $dzienTygodnia . ", " . date("d", $date) . " " . $miesiac . " " . date("Y", $date) . " roku.";
?>

</body>
</html>