<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hasla.php" method="post">
        Login: <input type="text" name="login" placeholder="Login"> </br>
        Hasło: <input type="text" name="haslo" placeholder="Hasło"> <br>
        <input type="submit" name="ok">
    </form>
    <?php 

    $password = $_POST['haslo'];
    $user = $_POST['login'];
        function checkPass($user,$password){
            if (!$fd = fopen("C:\\xampp\\htdocs\\kuba2\\plik.txt","r")){
                return false;
            }
            $result = false;
            while (!feof ($fd)){
                $line = trim(fgets($fd));
                $arr = explode(";",$line);
                if(count($arr)< 2) continue;
                if($arr[0] != $user) continue;
                if($arr[1] == $password){
                    $result = true;
                }
            break;
            }
            fclose($fd);
            return $result;
            
        }

        if (checkPass($user, $password)) {
            echo "OK";
        } else {
            echo "Invalid username or password.";
        }


    ?>
</body>
</html>