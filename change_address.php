<?php
// Assuming you have already connected to the database

// Start the session (make sure this is at the top of your PHP file)
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the user is logged in and the address form has been submitted
if (isset($_SESSION['user_id']) && isset($_POST['address'])) {
    // Retrieve the user ID from the session
    $userId = $_SESSION['user_id'];

    // Sanitize and validate the new address
    $newAddress = $_POST['address'];
    // You should perform proper validation and sanitization on the address to prevent SQL injection

    // Update the user's address in the database
    $sql = "UPDATE users SET address = '$newAddress' WHERE id = '$userId'";
    // Replace 'users' with your actual table name and 'address' and 'id' with the appropriate column names

    // Execute the SQL query
    if (mysqli_query($connection, $sql)) {
        // Address update successful
        echo "Address updated successfully.";
    } else {
        // Address update failed
        echo "Error updating address: " . mysqli_error($connection);
    }
} else {
    // Handle the case where the user is not logged in or the address form is not submitted
}
?>


 <!-- /Billing Details -->
            
                <form id="signup_form" onsubmit="return false" class="login100-form">
                  <div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Alternative Address</h2>
                                    </div>
                                    <div class="form-group ">
                                    
                                        <input class="input form-control input-borders" type="text" name="user_id" id="f_name" placeholder=" id" value="<?php echo $input1_value; ?>">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="address" id="address1" placeholder="title" value="<?php echo $input2_value; ?>">
                                    </div>
                                 <!--   
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="state" id="address2" placeholder="City">
                                    </div>
                                    
                                    -->
                                    <div style="form-group">
                                       <input class="primary-btn btn-block"  value="Update Adress" type="submit" name="update_button">
                                    </div>
                                </div>

                                    
                                
                </form>