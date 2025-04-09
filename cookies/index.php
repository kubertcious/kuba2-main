<?php 

if(!isset($_COOKIE['nazwa']) && !isset($_GET['nazwa'])){
    include "header.html";
    include "form.html";
    include "footer.html";
}

elseif(isset($_GET['nazwa'])){
    setcookie("nazwa", $_GET['nazwa'], time() + 60*60*24*365);
    include "header.html";
    echo @$_COOKIE['ilosc']."<br>";
    echo "Dziękujemy ". $_GET['nazwa'];
    echo "<br> <a href=\"index.php\"> Wróć do strony głównej </a>";;
    include "footer.html";
} elseif(isset($_POST['logout'])){
    setcookie("nazwa", "", time() - 3600);
    echo "Wylogowano";
    include "header.html";
    include "form.html";
    include "footer.html";
} else {
    include "header.html";
    echo "Witaj ". @$_COOKIE['nazwa'];
    setcookie("ilosc", 0, time() + 60*60*24*365);
    $ciasteczko = $_COOKIE['ilosc'];
    $ciasteczko++;
    setcookie("ilosc", $ciasteczko, time() + 60*60*24*365);
    echo "<br>". $_COOKIE['ilosc'];
    include "logout.html";
    include "footer.html";
    
}





?>