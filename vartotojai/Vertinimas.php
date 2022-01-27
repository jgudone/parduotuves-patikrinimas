<?php
session_start();
$_SESSION["klausimas4"] = $_POST["klausimas4"];

/* print_r($_POST);
$klausimas4 = $_POST["klausimas4"];
echo $klausimas4; */

$klausimas1 = $_SESSION["klausimas1"];
$klausimas2 = $_SESSION["klausimas2"];
$klausimas3 = $_SESSION["klausimas3"];
$klausimas4 = $_SESSION["klausimas4"];

$vidurkis = ($klausimas1 + $klausimas2 + $klausimas3 + $klausimas4)/4;
echo($vidurkis);

$link=mysqli_connect("localhost","root","","vartotojai");

$sql="INSERT INTO vertinimas VALUES ('".$_COOKIE['ID']."', '".$vidurkis."')";
mysqli_query($link, $sql);

if (mysqli_errno($link)) {
echo mysqli_error($link);
exit;
}
    
   
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br>
        <a href="vidus.php" style="font-size: 32px;">Grįžti</a>
        <form action="vidus.php" method="GET" >
        </form>
    </body>
</html>