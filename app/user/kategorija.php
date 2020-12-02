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

<div class="container">

    <div class="container-fluid">

    <input class="form-control form-control-lg" id="myInput" onkeyup="myFunction()" type="text" placeholder="Pretraži po imenu">     

      <ul class="cate list-group list-group-flush" id="myUL">

      <?php

        require_once("../classes/classDataBase.php");

        $db = new DataBase();

        if(is_string($db->connect())) {
          echo "Error connecting to database <br>".$db->connect();

        exit();

        }

        if(isset($_GET['groups']))
        {

          $groups = $_GET['groups'];


          $res = $db->query("SELECT * FROM video WHERE groups='$groups'");



          while($row = $db->fetch_assoc($res))
          {

            $id = $row['id'];

            $name = $row['names'];

            echo "<li class='cate2 list-group-item'><a href='watch.php?id=$id'>".$name."</a></li>";

          }

        }

      ?>
      
     </ul>


    <?php include('footer.php');  ?>
    
    </div>

  </div>
    
  </div>

  <script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
  </script>

</body>
</html>

