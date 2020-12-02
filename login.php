<!DOCTYPE html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/app/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Login</title>
</head>
<body class="app-body">


  <div class="container">
  <div class="form row">
    <form action="process.php" method="POST">
      <p>

        <label>Username:</label> <br>

        <input type="text" id="user" name="user"> 

      </p>
      <p>

        <label>Password:</label> <br>

        <input type="password" id="password" name="password"> 

      </p>

      <p>
      
      <input type="checkbox" onclick="myFunction()">Show Password
      
      </p>

      <p>

        <button id="btn" value="Login" class = "btn btn-warning" name="Login">Login</button>

      </p>
    </form>
    
    <?php
      if(isset($_GET['Empty'])) {
        echo "<div class=".'message'."><p>".$_GET['Empty']."</p></div>";
      }

      if(isset($_GET['NP'])) {
        echo "<div class=".'message'."><p>".$_GET['NP']."</p></div>";
      }
    ?>     
  </div>
  </div>
  <script>

  //Show and hidden password
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
    }
  </script>

</body>
</html>