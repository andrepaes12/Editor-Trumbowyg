<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "editor";
$port = 3306;

try{
  //connection with the $port
  // $conn = new PDO("mysql:host=$host;port=$port;dbname=".$database, $user, $pass);

  //connection without the $port
  $conn = new PDO('mysql:host='.$host.';dbname='.$database, $user, $pass);

  // echo "Connection to Database done with success!";

} catch(PDOException $e) {

  echo "Error Message: Connection to Database has failed! Error Info: ".$e->getMessage();

}