<?php
session_start();
$_SESSION["klausimas2"] = $_POST["klausimas2"];

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>3 klausimas</p>
        <p> Ar greitai pristatyta prekė? </p>
        <form action="4kl.php" method="POST">
          <label for="klausimas3">Įveskite vertinimą nuo 1 iki 5 (l.gerai):</label><br>
          <input type="text" name="klausimas3" required><br><br>
          
          <input type="submit" value="Atsakyti">
      </form>

    </body>
</html>