<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <!--<th class="text-center">Date & Time</th>-->
            </tr>
        </thead>
        <tbody>
        <?php

            // include 'config.php';
    //         $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "banking_system";

	// $conn = mysqli_connect($servername, $username, $password, $dbname);

	// if(!$conn){
	// 	die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	// }
	
	$host="localhost";
$dbusername="id16980263_root";
$dbpassword="4huVF7!A<=IZ]UIf";
$dbname="id16980263_banking_system";

//database connection
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
  echo 'error';

}





            $sql ="select * from transation";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['s_no']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <!--<td class="py-2"><?php echo $rows['datetime']; ?> </td>-->
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

<br><br>
<footer class="text-center mt-5 py-2" style="color:green ;font-size:20px">
            <p>&copy 2021. Made by <b style="color:red; font-family: 'Sofia', sans-serif;">  RAGUNATH  N </b> <br>BE-Computer Science and Engineering<br>M.Kumarasamy College of Engineering,Karur</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
