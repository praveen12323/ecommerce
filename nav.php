<?php
include "db.php";

include "header.php";


                         
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

	<title>button</title>
	<style>
		h1{
			text-align: center;
			justify-content: center;

		}
		div{
			
  	          position: absolute;
  	          top: 7%;
  	          left: 38%;
  	          transform: translateY(-50%);
  	          color: #33FF7A ;
  	          font-size: 35px;
  	      }

  #btn_click {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  top: 15%;
  width: 17%;
  left: 40%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 25px;
  
}
#btn_click:hover {
  background-color: #F9FCFA ;
}

#btn{

	left: 50%;	
	top: 23%;
	font-size: 20px;
}
		
		


	</style>
</head>
<body> 
	<div>
	<i class="uil uil-check-circle"></i>
	
	</div>
	<h1>Order Confirmed</h1><br>
	
     <div  id="btn_click">
         <a href="index.php">Continue to shopping</a>
             </div><br>
  
	

</body>
</html>
<?php
 if (isset($_POST["updateAddress"])) {
        $newAddress = $_POST["newAddress"];
        $updateSql = "UPDATE orders_info SET address='$newAddress' WHERE user_id='$_SESSION[uid]'";
        $updateQuery = mysqli_query($con, $updateSql);
        if ($updateQuery) {
            echo "Address updated successfully!";
            // Update the address in the current session
            $_SESSION["address"] = $newAddress;
        } else {
            echo "Failed to update address.";
        }
    }
?>

<!-- Add a form to update the address -->
<form method="POST" action="">
    <label for="newAddress">New Address:</label>
    <input type="text" name="newAddress" id="newAddress" required>
    <button type="submit" name="updateAddress">Update Address</button>
</form>