<!DOCTYPE html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>VIDEO</title>
</head>
<body class="back-app">

<div class="background">

<?php

      include("user_header.php"); 

?>

<div class="container">

  <div class="container-fluid">
  
    <div class="video">

    <?php


      require_once("../classes/classDataBase.php");

      $db = new DataBase();

      if(is_string($db->connect())) {
        echo "Error connecting to database <br>".$db->connect();

      exit();

      }

      if(isset($_GET['id'])) {

        $id = $_GET['id'];

        $res = $db->query("SELECT * FROM video WHERE id = '$id'");

        $row = $db->fetch_assoc($res);

        $video = $row['video'];

        $name = $row['names'];

        $descriptions = $row['descriptions'];

        $images = $row['images'];

        $groups = $row['groups'];

        echo "<h1>".$name."</h1>";
    

    ?>
    

     <video width="60%" height="60%" controls>

      <source src="
      <?php

      //Ne znam kako se na engleskom kaze terarni operator, a zaboravio sam sintaksu, pa moram postupno :D

       if($groups == 'grudi' or $groups ==  'ramena' or $groups == 'ledja' or $groups ==  'biceps') {

         echo "../videos/";

        } 


        else if($groups == 'bodyweight') {

          echo "../videos3/";

        }

          else {
            echo "../videos2/";
          }
           
           echo $video ?>" type = "video/mp4">

    </video>

  <?php


    echo "<h4>OPIS VEŽBE:</h4>";


    echo "<p>".$descriptions."</p>";


    if($images !== "") {

      echo   "<img src='../images/descriptions/$images'>";

    }


    } 


    ?>

  
    </div>

  </div>


  <?php include('footer.php');  ?>

</div>

</div>



</body>
</html>