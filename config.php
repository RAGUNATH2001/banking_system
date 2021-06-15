<?php

$host="localhost";
$dbusername="id16980263_root";
$dbpassword="4huVF7!A<=IZ]UIf";
$dbname="id16980263_banking_system";

//database connection
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
  echo 'error';

}

?>
