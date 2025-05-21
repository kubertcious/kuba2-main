<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            justify-content: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        form {
            margin-bottom: 20px;
            width: 25%;
            border: 2px solid black;
            padding: 8px;
            float: left;
            margin-left: 37.5%;
        }
        b {
            color: green;
        }
        </style>
</head>
<body>

    <form action="cwsql.php" method="post">
    <h1>Dodawanie użytkowników</h1>
        user_name: <input type="text" name="username" placeholder="username"> <br>
        user_email: <input type="text" name="useremail" placeholder="email"> <br>
        user_pass: <input type="password" name="pass" placeholder="password"> <br>
        user_city: <input type="text" name="usercity" placeholder="city"> <br>
        user_street: <input type="text" name="userstreet" placeholder="street"> <br>
        <input type="submit" name="ok">
    </form>

    <?php
    $connection =   mysqli_connect('localhost', 'root', '', 'cwphp1');
    if (mysqli_connect_errno()){
        echo "Błąd połączenia z MySQL: " . mysqli_connect_error();
        exit();
    } else {
        echo "<b>Połączono z MySQL</b>";
    }
    echo "<br>";

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ok'])) {
        $idquery = "SELECT MAX(user_id) FROM users";
        $result = mysqli_query($connection, $idquery);
        $row = mysqli_fetch_row($result);
        echo $row[0] . "<br>";
        $userid = $row[0] + 1;

        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $userpass = $_POST['pass'];
        $usercity = $_POST['usercity'];
        $userstreet = $_POST['userstreet'];

        $wstaw = "INSERT INTO users (user_id, user_name, user_email, user_pass, user_counter, user_city, user_street) 
                    VALUES ('$userid', '$username', '$useremail', '$userpass', '0', '$usercity', '$usercity')";
        if (mysqli_query($connection, $wstaw)) {
            echo "Dodano użytkownika: " . $username . "<br>" . "----------------------------------" . "<br>";
        } else {
            echo "Błąd dodawania użytkownika: " . mysqli_error($connection) . "<br>" . "----------------------------------" . "<br>";
        }

        header("Location: cwsql.php");
        exit();
    }
?>

    <table>
        <tr>
            <td>ID:</td>
            <td>Imię I Nazwisko:</td>
            <td>Email:</td>
            <td>Hasło:</td>
            <td>Licznik:</td>
            <td>Miasto:</td>
            <td>Ulica:</td>
        </tr>

<?php

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['user_id'] . "</td>";
            echo "<td>" . $row['user_name'] . "</td>";
            echo "<td>" . $row['user_email'] . "</td>";
            echo "<td>" . $row['user_pass'] . "</td>";
            echo "<td>" . $row['user_counter'] . "</td>";
            echo "<td>" . $row['user_city'] . "</td>";
            echo "<td>" . $row['user_street'] . "</td>";
            
            echo "</tr>";
        }
    } else {
        echo "Błąd zapytania: " . mysqli_error($connection);
    }
    mysqli_close($connection);
    ?>
</body>
</html>