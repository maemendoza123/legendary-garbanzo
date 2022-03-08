<?php

// set cookies

$cookie_name = "auth";
    $cookie_value = "ok";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");



    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];

             header('Location: loggedin.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form method = "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>
</body>
</html>

    



