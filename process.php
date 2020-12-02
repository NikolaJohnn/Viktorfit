<?php


  session_start();


  //Conect to server and select database with classes 

  require_once("app/classes/classDataBase.php");

  $db = new DataBase();

  if(is_string($db->connect())) {
    echo "Error connecting to database <br>".$db->connect();

    exit();
  }

  //Get value passed from login.php

    if(isset($_POST["Login"])) {

        $username = $_POST['user'];

        $password = $_POST['password'];

          if(!empty($username) and !empty($password)) {

            $result = $db->query("select * from users where username = '$username' and passwords = '$password'") or die("Greska pri upitu  baze");

            $row = $db->fetch_array($result);
          
              if($row['username'] == $username and $row['passwords'] == $password) {
              
                $_SESSION = $row['statuss'];

                if($_SESSION == "User") {

                      if($row['active'] == 1){

                        header('location:app/user');

                      }
                      else {

                        header('location:npa.php');

                      }

              }
              else {

                header('location:app/admin');

              }
            }
        
          else {
            header("location:login.php?NP= Nepostojeći korisnik");
          }

        }

      else {

        
        header("location:login.php?Empty= Niste uneli sve parametre");

      }

   }


?>