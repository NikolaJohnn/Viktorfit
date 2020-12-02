<!DOCTYPE html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>recepti</title>
</head>
<body>
  <?php 
  
  
  include("header.php");
  
  require_once("../classes/classDataBase.php");

  $db = new DataBase();

  if(is_string($db->connect())) {
    echo "Error connecting to database <br>".$db->connect();

  exit();

  }
  
  ?>
  
  <br><br>

  <div class="container">

    <div class="container-fluid">

    <form action="recepti.php" method= "POST" enctype= "multipart/form-data">

    <input type="text" name="ime" placeholder="Ime recepta"> <br><br>

    <textarea name="namirnice" id="" cols="30" rows="10" placeholder="Namirnice"></textarea> <br>

    <textarea name="priprema" id="" cols="30" rows="10" placeholder="Nacin pripreme"></textarea> <br>

    <input type="file" name="images"> <br>

    <button name="upload" value="upload">Dodaj</button>

    </form>

    </div>

  </div>

  
<?php

if(isset($_POST['upload']))
{
  
  $ime = $_POST['ime'];

  $namirnice = $_POST['namirnice'];

  $priprema = $_POST['priprema'];

  $img = $_FILES['images']['name'];

  $img_tmp = $_FILES['images']['tmp_name'];

  move_uploaded_file($img_tmp, "../images/recipes/".$img);

  $res = $db->multi_query("INSERT INTO recipes (names, namirnice, nacin, images) VALUES('$ime','$namirnice', '$priprema', '$img')");
  

  if($res == 1) {
    echo "Uspesno dodat recept";
  }
  else {
    echo "Greska prilikom dodavanja!";
  }
}
else 
{
  echo "Unesite paremetre";
}
?>

</body>
</html>