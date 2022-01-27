<?php

 if (isset($_COOKIE["vardas"])){
    header("Location: vartotojai.php");
}    

$link = mysqli_connect("localhost", "root", "", "vartotojai");
    
  if (mysqli_errno($link)) {
  echo mysqli_error($link);
  exit;
  }

  if (isset ($_POST["slapukas_2"])){
    $vardas = $_POST["vardas"];
    $slaptazodis = $_POST["slaptazodis"];
    
    $sql = "SELECT vardas, slaptazodis FROM vartotojai WHERE vardas LIKE '%$vardas%' AND slaptazodis LIKE '%$slaptazodis%'";
    $result = mysqli_query($link, $sql);
    
    if(mysqli_num_rows($result) == 1){
    setcookie("vardas", $vardas, time() + 60 * 60 * 4);
    
    $sql = "SELECT ID FROM vartotojai WHERE vardas = '".$_POST["vardas"]."'";
    $result = mysqli_query($link, $sql);
    if ($result) {
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            setcookie("ID", $row['ID'], time() + 3600*4);
        }
    }
    header("Location: vidus.php");
    }
    
    if(mysqli_num_rows($result) == 0 || mysqli_num_rows($result) >= 2){
    echo "<h1>Neteisingi prisijungimo duomenys</h1>";
    }
          
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="prisijungimas.php" method="POST">
          <label for="vardas">Iveskite vartotojo varda:</label><br>
          <input type="text" name="vardas" required><br><br>
          <label for="slaptazodis">Iveskite slaptazodi:</label><br>
          <input type="text" name="slaptazodis" required><br><br>
          <input type="hidden" name="slapukas_2">
          <input type="submit" value="Prisijungti">
      </form>

    </body>
</html>

