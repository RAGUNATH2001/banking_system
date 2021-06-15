<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-image:radial-gradient(rgb(98, 197, 214),rgb(218, 221, 34),gray);" >
<?php
     include 'config.php';
    // $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "banking_system";

	// $conn = mysqli_connect($servername, $username, $password, $dbname);

	// if(!$conn){
	// 	die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	// }



    $sql = "SELECT * FROM new_customer";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : black;"><div  class="font-effect-outline" style="color:red;">Customer details & operation</div></h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border:2px double yellow; text-align:center; background-color:pink; color:red;">
                        <thead style="color : red; ">
                            <tr>
                            <th scope="col" class="text-center py-2">Customer Id</th>
                            <th scope="col" class="text-center py-2">Customer Name</th>
                            <!-- <th scope="col" class="text-center py-2">E-Mail</th> -->
                            <th scope="col" class="text-center py-2"> Account Balance</th>
                            <th scope="col" class="text-center py-2">Transfer</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <!-- <td class="py-2"><?php echo $rows['email']?></td> -->
                        <td class="py-2"><?php echo $rows['amount']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color:green; color:red;" >Transfer</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="text-center mt-5 py-2" style="color:green ;font-size:20px">
  <p>&copy 2021. Made by <b style="color:red; font-family: 'Sofia', sans-serif;">  RAGUNATH  N </b> <br>BE-Computer Science and Engineering<br>M.Kumarasamy College of Engineering,Karur</p>
</footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
