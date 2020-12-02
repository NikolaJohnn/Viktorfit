<!DOCTYPE html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Admin panel</title>
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

    if($active = $db->query("SELECT * from users where active=1"))
    {

     $row_active = $db->num_rows($active);

     echo "<p>Broj ljudi koji imaju pristup aplikaciji je ".$row_active."</p>";

    }

    else

    {

    die("Greska pri upitu  baze");

    }

    ?>

    <form action = 'index.php' method = 'POST'>

    <input type="text" name="username" placeholder="Korisničko ime"> <br><br>

    <input type="text" name="password" placeholder="Šifra"> <br><br>

    <button name="add" value="add">Dodaj korisnika</button>

    <br><br>

    </form>

    <?php


    if(isset($_POST["add"])) {

      
      $username = $_POST["username"];

      $pass = $_POST["password"];

      $resu = $db->multi_query("INSERT INTO users (username, passwords, statuss) VALUES('$username','$pass', 'user')");

      if($resu == 1) {
        echo "<p>Uspešno dodat korisnik</p>";
      }
    }
    else {
      echo "<p>Najbolje bi bilo da šifra ima 8 i više različitih karaktera (veliko slovo, brojevi), preporuka da bi koriniku bilo lako za pamćenje, njegovo ime i godina rodjenja npr 'Viktor1999'.</p>";
    }

    ?>

    <?php
  
    echo  
     "<table>
        <tr>
          <td>Ime</td>
          <td>Šifra</td>
          <td>Status</td>
          <td>Vreme pocetka</td>
        </tr>";


    $result = $db->query("select * from users") or die("Greska pri upitu  baze");


    while($row = $db->fetch_array($result))
    {
      echo "<tr><td>".$row["username"]."</td><td>".$row["passwords"]."</td><td>".$row["statuss"]."</td><td><i>".$row["time"]."</i></td></tr>";
    }

    
     ?>

    
  </table>


</body>

</html>