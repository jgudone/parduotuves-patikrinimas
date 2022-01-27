<?php
/* 1 klausimas */

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>1 klausimas</p>
        <p> Ar greitai radote norimą prekę? </p>
        <form action="2kl.php" method="POST">
          <label for="klausimas1">Įveskite vertinimą nuo 1 iki 5 (l.gerai):</label><br>
          <input type="text" name="klausimas1" required><br><br>
          
          <input type="submit" value="Atsakyti">
      </form>

    </body>
</html>