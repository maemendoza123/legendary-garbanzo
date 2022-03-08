<!DOCTYPE html>
<html>
    <head>
        <title>Your Favorite</title>
    </head>
<body>
<?php
        if(isset($_POST["username"]) && ($_POST["dish"])) {
            echo "Thanks for your selection ".($_POST["username"]).'<br>';
            echo "You really enjoyed ".($_POST["dish"]).'<br>';
            echo "-especially with a ".($_POST["color"])." wine";
            
        }
        if(isset($_POST["username"]) && empty($_POST["dish"])) {
            echo "Unfortunately, you had leave your favorite dish empty". '<br>';
            echo "Please fill needed details in the empty selection";
        }


    ?>


    </form>
</body>
</html>
