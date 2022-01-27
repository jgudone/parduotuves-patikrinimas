<?php
session_start();
$_SESSION["klausimas1"] = $_POST["klausimas1"];

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
        <p>2 klausimas</p>
        <p> Ar patogi prekės paieška? </p>
        <form action="3kl.php" method="POST">
          <label for="klausimas2">Įveskite vertinimą nuo 1 iki 5 (l.gerai):</label><br>
          <input type="text" name="klausimas2" required><br><br>
          
          <input type="submit" value="Atsakyti">
      </form>

    </body>
</html>