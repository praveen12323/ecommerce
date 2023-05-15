<?php
include "db.php";

include "header.php";


                         
?>
<?php
		if(isset($_SESSION["uid"])){
			$sql = "SELECT * FROM orders_info WHERE user_id='$_SESSION[uid]'";
			$query = mysqli_query($con,$sql);
			$row=mysqli_fetch_array($query);}

			echo($row["address"]);
			?>
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
