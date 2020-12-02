<!DOCTYPE html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Kalkulator</title>
</head>
<body class="back-app">

  <div class="background">

    <?php  include('user_header.php'); ?>
    <div class="container">
      <div class=container-fluid>
  
    
    <?php
  
    require_once("../classes/classDataBase.php");
  
    $db = new DataBase();
    
    if(is_string($db->connect())) {
      echo "Error connecting to database <br>".$db->connect();
    
     exit();

    }


        $result = $db->query("SELECT * FROM groceries");


    ?>

    <script>

      $(document).ready(function () {
            $('select').selectize({
                sortField: 'text'
            });
        });

    </script>

      <form action="calculator.php" method="POST"> 

      <div class="form-group">
        <label for="exampleFormControlSelect1" class="input-cal">Izaberite namirnicu:</label>
          <select class="form-control" id="select-state" name="glo">

           <option value=""></option>
          
          <?php 
          
            while($row = $db->fetch_array($result))
            {
              echo "<option value='".$row["names"]."'>".$row["names"]."</option>";
            }
          
          ?>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1" class="input-cal">Količina:</label>
          <input type="num" name="val" class="form-control" id="exampleFormControlInput1" placeholder="Unesite količinu namirnice u gramima">
        </div>

        <button name="btn">Izračunaj</button>
      </form>


     </div>
    </div>

    <?php
    
        if(isset($_POST['btn'])) {

          $glo = $_POST['glo'];

          $val = $_POST['val'];

          $query = $db->query("SELECT * FROM groceries WHERE names = '$glo'");

          $row2 = $db->fetch_assoc($query);

          print_r($row2);

        }
        else {
          echo "asd";
        }
    
    ?>
 


  <?php include('footer.php');  ?>

  </div>
</body>
</html>