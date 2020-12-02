<!DOCTYPE html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <title>Videos</title>
</head>
<body class="back-app">

  <div class="background">

  <?php

    include("user_header.php"); 

  ?>
<!-- 
   <div class="container">
    <div class="container-fluid">  -->

      <div class="groups-content">
        <div class="groups">
          <a href="kategorija.php?groups=grudi">
            <img src="../images/grudi.svg" href="kategorija.php?groups=grudi">
          </a> 
        </div>
        <div class="groups">
          <a href="kategorija.php?groups=ramena">
            <img src="../images/ramena.svg" alt="">
          </a> 
        </div>
      </div>

      <div class="groups-content">
        <div class="groups">
          <a href="kategorija.php?groups=ledja">
            <img src="../images/ledja.svg" alt="">
          </a>      
        </div>
        <div class="groups">
        <a href="kategorija.php?groups=stomak">
          <img src="../images/stomak.svg" alt="">
        </a>
        </div>
      </div>

      <div class="groups-content">
      <div class="groups">
      <a href="kategorija.php?groups=biceps">
            <img src="../images/biceps.svg" alt="">
          </a>
      </div>
      <div class="groups">
      <a href="kategorija.php?groups=triceps">
          <img src="../images/triceps.svg" alt="">
        </a>
      </div>
      </div>

      <div class="groups-content">
      <div class="groups">  
         <a href="kategorija.php?groups=noge">
          <img src="../images/noge.svg" alt="">
        </a>
      </div>
      <div class="groups">
        <a href="kategorija.php?groups=gluteus">
          <img src="../images/gluteus.svg" alt="">
        </a>
       </div>
      </div>
      
      <div class="groups-content">
      <div class="groups">
        <a href="kategorija.php?groups=bodyweight">
          <img src="../images/Weights.svg" alt="">
        </a>
        </div>
        <div class="groups">
        <a href="kategorija.php?groups=bodyweight">
          <img src="../images/h.i.i.t.svg" alt="">
        </a>
        </div>
      </div>


      <?php include('footer.php');  ?>

   </div>
<!-- 
  </div>

  </div> -->

</body>
</html>