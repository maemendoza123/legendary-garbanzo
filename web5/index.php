<html>
<head><title>Calculation Result</title></head>
<body>
    <?php

session_start();

$number_visits = $_SESSION['page_load_count'];
if(isset($_GET['reset']) || !isset($number_visits)){
    $number_visits = 0;
}
$number_visits++;
$_SESSION['page_load_count'] = $number_visits;
?>
<h1>Hello</h1>
<p>You have visited this page <?= $number_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>

<?php
 if($number_visits == 5): ?>
    <h3>Wow!</h3>
    <p>You sure come to this page a lot.</p>
<?php endif ?>

<?php
 if($number_visits == 10): 
   header("Location:http://localhost/Phpmyadmin/web5/congratulations.php/");
   ?>
    <?php endif ?>

</body>
</html>
