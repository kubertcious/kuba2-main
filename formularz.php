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
        width: 25%;
        text-align: center;
    }

    .b{
        background-color: grey;
        text-align: center;
        margin: auto;
        width: 50%;
    }
</style>
</head>
<body>

<div class="a">
    <form action="formularz.php" method="post">
        Nazwisko: <input type="text" name="nazwisko" placeholder="Nazwisko"> </br>
        Rok urodzenia: <input type="text" name="data" placeholder="dd/mm/rrrr"> <br>
        e-mail: <input type="text" name="email" placeholder="e-mail"> </br>
        PESEL: <input type="text" name="pesel" placeholder="PESEL"> </br>
        Płeć: <input type="text" name="plec" placeholder="Płeć"> </br>
        Wzrost: <input type="text" name="wzrost" placeholder="Wzrost"> </br>
        <input type="submit" name="ok">
    </form>
</div>

    <?php 

    $poprawne = false;
    
    if(isset($_POST['nazwisko'])){
        $nazwisko = $_POST['nazwisko'];
        $data = $_POST['data'];
        $email = $_POST['email'];
        $pesel = $_POST['pesel'];
        $plec = $_POST['plec'];
        $wzrost = $_POST['wzrost'];
    } else {
        echo " ";
    }

    echo "<hr>";
    echo $nazwisko ."</br>";
    echo $data ."</br>";
    echo $email ."</br>";
    echo $pesel ."</br>";
    echo $plec ."</br>";
    echo $wzrost ."</br>";
    echo "<hr>";


    $duze = strtoupper($nazwisko[0]);
    $male = strtolower($nazwisko);
    $male[0] = $duze;
    if($nazwisko == $male){
        echo "Nazwisko: ok <br>";
        $poprawne1 = true;
    }else{
        echo "Błąd w nazwisku <br>";
        $poprawne1 = false;
    }


    $dataexplode = explode("/",$data);
    if(count($dataexplode) == 3 && strlen($dataexplode[2]) == 4){
        $poprawne2 = true;
        echo "Rok ur.: ok <br>";
    }else{
        $poprawne2 = false;
        echo "Błąd w roku urodzenia (dd/mm/rrrr) <br>";
    }


    $emailexplode = explode("@",$email);
    if(count($emailexplode) == 2 && strlen($emailexplode[0]) > 0 && strlen($emailexplode[1]) > 0){
        $poprawne3 = true;
        echo "Email: ok <br>";
    }else{
        $poprawne3 = false;
        echo "Błąd w emailu <br>";
    }


    if(strlen($pesel) == 11){
        $poprawne4 = true;
        echo "PESEL: ok <br>";
    }else{
        $poprawne4 = false;
        echo "Błąd w PESLU <br>";
    }


    if(strtolower($plec) == "mężczyzna" || strtolower($plec) == "kobieta"){
        $poprawne5 = true;
        echo "Płeć: ok <br>";
    }else{
        $poprawne5 = false;
        echo "Błąd w płci <br>";
    }


    if($wzrost > 80 && $wzrost < 300){
        $poprawne6 = true;
        echo "Wzrost: ok <br>";
    }else{
        $poprawne6 = false;
        echo "Błąd we wzroście <br>";
    }


   if(strtolower($plec) == "kobieta"){
    if($pesel[9] % 2 == 0){
        echo "PESEL zgodny z płcią";
    }else{
        echo "PESEL i płeć niezgodne";
    }
}

   if(strtolower($plec) == "mężczyzna"){
    if($pesel[9] % 2 != 0){
        echo "PESEL zgodny z płcią";
    }else{
        echo "PESEL i płeć niezgodne";
    }
}

    ?>

    <div class="b">
        <?php

        if($poprawne1 == true && $poprawne2 == true && $poprawne3 == true && $poprawne4 == true && $poprawne5 == true && $poprawne6 == true){
            echo " <h1>Poprawne</h1>";
        }else
        echo " <h1> Błąd </h1>"
        ?>
    </div>
</body>
</html>