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
  <title>Trening</title>
</head>
<body>

 <?php

    include("user_header.php");
 
    require_once("../classes/classDataBase.php");
      
    $db = new DataBase();
    
    if(is_string($db->connect())) {
      echo "Error connecting to database <br>".$db->connect();
    
      exit();

    }
 
 ?>

  <div class="container">
    <div class="container-fluid">
      
      <h2>Kreiraj svoj trening</h2>

    <form method="post" action="traing.php" class="input_form">
        <input type="text" name="task2" class="task_input form-control" placeholder="Dodaj vežbu">
        <input type="text" name="task3" class="task_input form-control" placeholder="Dodaj seriju">
        <input type="text" name="task4" class="task_input form-control" placeholder="Broj ponavljanja">
        <input type="text" name="task5" class="task_input form-control" placeholder="Opterećenje">
      <button type="submit" name="submit" id="add_btn" class="add_btn">Dodaj</button>
    </form>
  
    </div>
  </div>

  <?php
  
    $errors = "";  

    if (isset($_POST['submit'])) {
      if (empty($_POST['task2']) or ($_POST['task3']) or ($_POST['task4']) ($_POST['task5'])){

        $errors = "Moraš da uneseš sve parametre!";

      }
        else {
          $task2 = $_POST['task2'];
          $task3 = $_POST['task3'];
          $task4 = $_POST['task4'];
          $task5 = $_POST['task5'];
          $sql = $db->multi_query("INSERT INTO tasks (ime, serija, ponavljanja, opterecenje) VALUES ('$task2', '$task3', '$task4', '$task5')");
          header('location: app/user/traing.php');
        }
     }
  
  
  ?>
</body>
</html>