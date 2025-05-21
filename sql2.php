<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .div0 {
            display: flex;
            border: 2px solid black;
            padding: 8px;
            justify-content: space-around;
            width: 20%;
            margin: 10px auto;
        }
        .div1 {
            text-align: center;
        }
        .div2 {
            width: 25%;
            border: 1px solid black;
            border-radius: 50%;
            text-align: center;
        }
        b {
            color: green;
        }
        </style>
</head>
<body>
    <?php 
        $connection = mysqli_connect('localhost', 'root', '', 'cwphp1');
        if (mysqli_connect_errno()){
            echo "Błąd połączenia z MySQL: " . mysqli_connect_error();
            exit();
        } else {
            echo "<b>Połączono z MySQL</b>";
        }

        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
?>


<?php
    if($result){
        while($data = mysqli_fetch_assoc($result)){
            echo "<div class='div0'>";
            echo "<div class='div1'>" . $data['user_name'] . "</div>";
            echo "<div class='div2'>" . $data['user_counter'] . "</div>";
            echo "</div>";
        }
    }
        mysqli_close($connection);
    ?>
</body>
</html>