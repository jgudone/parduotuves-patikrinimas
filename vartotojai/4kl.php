<?php
session_start();
$_SESSION["klausimas3"] = $_POST["klausimas3"];

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
        <p>4 klausimas</p>
        <p> Ar gera prekės kokybė? </p>
        <form action="Vertinimas.php" method="POST">
          <label for="klausimas4">Įveskite vertinimą nuo 1 iki 5 (l.gerai):</label><br>
          <input type="text" name="klausimas4" required><br><br>
          
          <input type="submit" value="Atsakyti">
      </form>

    </body>
</html>