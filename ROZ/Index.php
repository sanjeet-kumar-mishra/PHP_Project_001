<?php 

// Include configuration file  
require ('connection.php');
 
//Select query 
$select = "SELECT * FROM onlinepayment";
$result = $conn->query($select);
?> 

<?php
session_start();
 
if(isset($_POST['logout'])) {
    session_destroy();
    header("Location:/hospital-ManagementPHP/index.php");
}
?>


<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Employee Details</title> 
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head> 
<style>
	body{
		background-color: lightblue;
	}
</style>

<body> 
<h1 class="text-center"><U> HMS PAYMENT LIST</u> </h1>
 
<form method="post">
    <input type="submit" name="logout" value="go to home" style="background-color: green; color: white; border: none; padding: 10px 20px; border-radius: 5px; aligncenter; display:block; margin: 0 auto;">
</form>

    <div class="container">
    <table class="table table-bordered">
			<thead class="thead-dark">
			<tr>
			  <th scope="col">id</th>
			  <th scope="col">name</th>
			  <th scope="col">email</th>
              <th scope="col">Amount</th>
              <th scope="col">orderid</th>
			  <th scope="col">payment</th>
			  <th scope="col">date&time</th>
			</tr>
			</thead>
			<tbody id="table-body">
                          <?php   
			// Loop the employee data
				echo '<table class="table table-bordered">';
				while($row = $result->fetch_object()){
					echo '<tr>'
						.'<th>'.$row->pID.'</th>'
						.'<th>'.$row->name.'</th>'
						.'<th>'.$row->email.'</th>'
                        .'<th>'.$row->toValue.'</th>'
						.'<th>'.$row->razorpayOrderId.'</th>'
						.'<th>'.$row->paymentStatus.'</th>'
                        .'<th>'.$row->updatestamp.'</th>'
						.'</tr>';
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div> 
    
</body> 
</html> 