<?php 

if(!isset($_COOKIE['nazwa']) && !isset($_GET['nazwa'])){
    include "header.html";
    include "form.html";
    include "footer.html";
}

elseif(isset($_GET['nazwa'])){
    setcookie("nazwa", $_GET['nazwa'], time() + 60*60*24*365);
    include "header.html";
    echo "Dziękujemy ". $_GET['nazwa'];
    echo "<br> <a href=\"index.php\"> Wróć do strony głównej </a>";;
    include "footer.html";
} else {
    include "header.html";
    echo "Witaj ". @$_COOKIE['nazwa'];
    include "logout.html";
    include "footer.html";
}

if(isset($_POST['logout'])){
    setcookie("nazwa", "", time() - 3600);
    echo "Wylogowano";
}



?>