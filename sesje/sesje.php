<<?php 

session_start();
echo session_id();

$login = "admin";
$haslo = "admin";

if(!isset($_POST['login']) && !isset($_POST['haslo'])){
    include "header.html";
    include "form.html";
    include "footer.html";
    
}

if(isset($_POST['login']) && isset($_POST['haslo'])){
    if($_POST['login'] == $login && $_POST['haslo'] == $haslo){
        @$_SESSION['login'] = $_POST['login'];
        @$_SESSION['haslo'] = $_POST['haslo'];
        include "header.html";
        echo "Zalogowano jako: ". $_SESSION['login'] ." (".session_id(). ")<br>";
        include "logout.html";
        include "footer.html";
    } 
} elseif(isset($_POST['logout'])){
    session_destroy();
    echo "Wylogowano";
} elseif($_POST['login'] != $login || $_POST['haslo'] != $haslo){
    echo "Błędne dane logowania";
}

?>