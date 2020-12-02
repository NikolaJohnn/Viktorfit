<?php

//This class works with a database

class DataBase {
   private $server;
   private $username;
   private $password;
   private $database;
   private $db;

   public function __construct() {
     $this->server="localhost";
     $this->username="viktor";
     $this->password="";
     $this->database="viktor";
   }

   public function __destruct() {
     @mysqli_close($this->db);
   }

   public function connect() {
      try {
     $this->db = mysqli_connect($this->server, $this->username, $this->password, $this->database);
     // Checking db connection
     //var_dump($this->db);
        }
        catch(Exception $ex) {
          echo $ex->GetMessage;
        }

       if(!$this->db)
          return mysqli_connect_error();
       $this->query="SET NAMES utf8";
          return $this->db;
   }

   public function query($sql) {
     return mysqli_query($this->db, $sql);
   }

   public function exec($sql) {
    return mysqli_query($this->db, $sql);
  }

  public function fetch_assoc($res) {
    return mysqli_fetch_assoc($res);
  }

  public function fetch_array($res) {
    return mysqli_fetch_array($res);
  }

  public function fetch_object($res) {
    return mysqli_fetch_object($res);
  }

  public function num_rows($res) {
    return mysqli_num_rows($res);
  }

  public function multi_query($sql) {
    return mysqli_multi_query($this->db, $sql);
  }
}

?>