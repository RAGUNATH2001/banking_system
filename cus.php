<?php
$u_id=$_POST['cus_id'];
$u_acno=$_POST['cus_acno'];
$u_name=$_POST['cus_name'];
$u_amount=$_POST['cus_amount'];

//connection

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="banking_system";

//database connection
$con=new mysqli($host,$dbusername,$dbpassword,$dbname);
if($con->connect_error){
  echo 'error';

}
else{
$sql="INSERT INTO new_customer(id,account_no,name,amount) VALUES ('$u_id','$u_acno','$u_name','$u_amount')";
if($con->query($sql)){

   echo "<script>alert('Sussesfully added new user,Page redirect to Home Page');document.location='http://localhost/banking_system/'</script>";

}
else{
  echo 'Eroor';
}

}
$con->close();


?>