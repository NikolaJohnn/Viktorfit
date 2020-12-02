<!DOCTYPE html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>videos</title>
</head>
<body>

  <div class="container">
    <div class="container-fluid">


  <?php
    include('header.php');
  ?>

<br><br>
  
  <form action = 'videos.php' method = 'POST' enctype= "multipart/form-data">

    <select name="groups" id="groups" value ="groups">

      <option value="">Grupa mišića</option>
      <option value="grudi">Grudi</option>
      <option value="ramena">Ramena</option>
      <option value="ledja">Ledja</option>
      <option value="biceps">Biceps</option>
      <option value="noge">Noge</option>
      <option value="triceps">Triceps</option>
      <option value="stomak">Stomak</option>
      <option value="gluteus">Gluteus</option>
      <option value="bodyweight">Bodyweight</option>
      <option value="hiit">HIIT</option>

    </select> <br><br>

    <input type="text" name="name" placeholder="Ime vežbe"> <br><br>

    <p>Video: </p> <input type="text" name="video"> <br><br>

    <textarea name="description" id="" cols="30" rows="10" placeholder="Opis vežbe"></textarea> <br><br>

    <p>Slika (opis): </p> <input type="file" name="img"> <br><br>

    <button name="upload" value="upload">Dodaj video</button>

  </form>
  <?php

    require_once("../classes/classDataBase.php");

    $db = new DataBase();

    if(is_string($db->connect())) {
      echo "Error connecting to database <br>".$db->connect();

    exit();

    }

    if(isset($_POST["upload"])) {

      $groups = $_POST["groups"];

      $name = $_POST["name"];

      $video = $_POST["video"];

      // $video = $_FILES["file"]["name"];

      // $tmp = $_FILES["file"]["tmp_name"];

      $img = $_FILES["img"]["name"];

      $img_tmp = $_FILES["img"]["tmp_name"];

      $description = $_POST["description"];
    

      // move_uploaded_file($tmp, "../videos/".$video);

      move_uploaded_file($img_tmp, "../images/descriptions/".$img);

      $res = $db->multi_query("INSERT INTO video (video, groups,names,descriptions, images) VALUES('$video','$groups','$name','$description', '$img')");

      if($res == 1) {
        echo "Uspešno dodat video";
      }
      else {
        echo "Greska prilikom dodavanja videa ".mysqli_error($res);
      }
    }
    else {
      echo "<p>Da bi dodao video moras da uneseš sve parametre: 'Grupa mišića', 'Ime vežbe', 'Fajl' i 'Opis'</p>";
      exit();
    }

  ?>

</div>
  </div>


</body>
</html>