<?php

session_start();
$phone = $_SESSION['phone'];
// $uid =$_SESSION['uid'];
// $temp = $_SESSION['temp'];

$r=$_GET['response'];
if($r==1){
    echo " <p><u>SUCCESS<u></p>";
    
}

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .button {
  display: inline-block;
  padding: 10px 50px;
  background-color: white;
  color: green;
  text-decoration: none;
  border-radius: 4px;
margin: 0;
  position: absolute;
  top:50%;
  left:43%;

 
}

.button:hover {
  background-color:purple;
  color: white;
}
p{
    color: green;
    position: absolute;
  top:30%;
  left:40%; 
  font-size: 60px;
  font-weight: bold;
 
}
*{
    background-color:lavender;
}
</style>
<body>
<div class = "box">
<a href="/hospital-ManagementPHP/index.php" class="button">GO TO HOME
</a>
</div>
</body>
</html>
