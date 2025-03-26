<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .a{
        border: solid black 1px;
        margin: auto;
        width: 40%;
        height: 220px;
        padding: 10px;
        text-align: center;
    }

    .b{
        text-align: center;
        margin: auto;
        width: 50%;
        font-family: "Arial", sans-serif; 
        font-size: 12px; 
    }
    a{
        font-family: "Arial", sans-serif; 
        font-size: 28px; 
        color: #4A90E2; 
        line-height: 1.2;
    }
</style>
</head>
<body>
<div class="a">
<form action="formatdaty.php" method="post">
Wybierz format daty:
    <select name="format" id="format">
        <option value="RMD">YYYY-MM-DD HH:MM:SS</option>
        <option value="DMR">DD-MM-YYYY HH:MM:SS</option>
        <option value="calanazwa">Pełna nazwa dnia tygodnia i godzina</option>
    </select>
 Wybierz strefę czasową:
    <select name="strefa" id="strefa">
        <option value="Europe/Warsaw">Polska/Warszawa</option>
        <option value="America/New_York">Ameryka/Nowy York</option>
        <option value="Asia/Tokyo">Azja/Tokio</option>
    </select>

    <input type="submit" name="ok">
</form>

<div class="b">
        <h2> Aktualna data i czas: </h2> <br>
<?php 

$dni = [
    "Sunday" => "Niedziela",
    "Monday" => "Poniedziałek",
    "Tuesday" => "Wtorek",
    "Wednesday" => "Środa",
    "Thursday" => "Czwartek",
    "Friday" => "Piątek",
    "Saturday" => "Sobota"
];

    if(isset($_POST['format'])){
        $strefa = $_POST['strefa'];
        $format = $_POST['format'];

############



##############
    date_default_timezone_set($strefa);

##############
    if($format == "RMD"){
        echo "<a>" . date("Y-m-d H:i:s") . "</a>";
    }

    if($format == "DMR"){
        echo "<a>" .date("d-m-Y H:i:s"). "</a>";
    }

    if($format == "calanazwa"){
        $dzisiaj = date("l");
        $dzien = $dni[$dzisiaj];

        echo "<a>" . $dzien .date(", H:i:s"). "</a>";
    }

    function poradnia(){
        $date = date("H");

        if($date <= 6){
            $poradnia = "Noc";
        } elseif($date > 6 && $date <= 12){
            $poradnia = "Rano";
        } elseif($date > 12 && $date <= 18){
            $poradnia = "Popołudniu";
        } else {
            $poradnia = "Wieczór";
        };

        return "Pora dnia: " . $poradnia;
    };

    echo "<br> Strefa czasowa: ".$strefa . "<br>";
    echo poradnia();
    
} else {
    echo " ";
}

?>
    </div>
</div>
</body>
</html>