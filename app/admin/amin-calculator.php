<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>admin kalkulator</title>
</head>
<body>
  <?php

  include('header.php');

  require_once("../classes/classDataBase.php");

  $db = new DataBase();
  
  if(is_string($db->connect())) {
    echo "Error connecting to database <br>".$db->connect();
  
   exit();

  }

  ?>

  <div class="container">
    <div class="container-fluid">

     <form action = 'amin-calculator.php' method = 'POST'>
        <div class="form-group">
          <label for="formGroupExampleInput">Ime namirnice</label>
          <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Unesi ime">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Proteini</label>
          <input type="text" name="protein" class="form-control" id="formGroupExampleInput2" placeholder="Unesi gramazu">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Masti</label>
          <input type="text" name="masti" class="form-control" id="formGroupExampleInput2" placeholder="Unesi gramazu">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Ugljeni hidrati</label>
          <input type="text" name="UH" class="form-control" id="formGroupExampleInput2" placeholder="Unesi gramazu">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Kalorije</label>
          <input type="text" name="kalorije" class="form-control" id="formGroupExampleInput2" placeholder="Unesi gramazu">
        </div>

        <button name ="btn">Dodaj namirnicu</button>

      </form>

      </div>
  </div>

  <?php

    if(isset($_POST["btn"])) {

          
      $name = $_POST["name"];

      $protein = $_POST["protein"];

      $masti = $_POST["masti"];

      $UH = $_POST["UH"];

      $kalorije = $_POST["kalorije"];

      $resu = $db->multi_query("INSERT INTO groceries (names, proteini, masti, UH, kalorije) VALUES('$name','$protein', '$masti', $UH, $kalorije)");

      if($resu == 1) {
        echo "<p>Uspešno dodat proizvod</p>";
      }
       else {
        echo "<p>Greska prilikom dodavanja proizvoda</p>";
       }
    }
    else {
      echo "dodaj namirnicu";
    }

  ?>

</body>
</html>