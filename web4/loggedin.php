<?php
   
   // test cookies if is set, display if set

if(isset($_COOKIE['username'])) {
        echo 'User' . $_COOKIE['username'] . 'is set<br>';

    }else {
        echo 'User is not set.';
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>
    You are logged in and can access all pages on this web site. <br> <a href="anotherpage.php">
    <br>Visit another page on this site?</a>
</body>
</html>