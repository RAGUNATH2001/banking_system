<!-- navbar --> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <style>
          .nav{
            width:100%;
    display:grid;
    grid-template-columns: 30% 30% 10% 10% 10% 13%;
    border:3px solid pink;
    border-radius: 15px;
    padding:20px;
    background-color:pink;
    font-size: 25px;
    opacity: 0.9;
    
}
.quries,.home,.customer,.Transfer,.addcustomer{
    font-family: "Sofia", sans-serif;
    transform: scale(1);
    transition:0.3s ease-in-out;
    
}

.home:hover,.quries:hover,.customer:hover,.Transfer:hover,.addcustomer:hover{
    
    text-decoration: underline;
    text-decoration-color: aqua;
    transform: scale(1.1);
    cursor: pointer;
    
    
}
.font-effect-outline{
    font-family: "Audiowide", sans-serif;
    font-size:30px;
    color:green;  
   
    transition: width 1s, height 1s, transform 5s;
}
.font-effect-outline:hover{
    transform: rotate(360deg);
}


a{
    color:black;
    text-decoration: none;
    font-family: "Sofia", sans-serif;
    transform: scale(1);
    transition:0.3s ease-in-out;
}
a:hover{
    text-decoration: underline;
    text-decoration-color: aqua;
    transform: scale(1.1);
    cursor: pointer;

}
          
          }
        </style>
      <div class="nav">
        <div class="quries">Any Quries:<span id="number">9092097912</span></div>
        <div  class="font-effect-outline">BANKING SYSTEM</div>
        <div class="home"><a href="index.html">Home</a></div>
        <div class="customer"><a href="history.php"> History</a></div>
        <div class="Transfer"><a href="transfer.php" target="_blank">Transfer</a></div>
        <div class="addcustomer" id="myBtn">Add Customer</div>
        
      </div>
       </nav>
