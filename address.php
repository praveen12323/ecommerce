<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select one row from the database
$sql = "SELECT * FROM orders_info WHERE user_id = '12' LIMIT 1";
$result = $conn->query($sql);

// Output data of the selected row
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    // Process data here
    $input1_value = $row["address"];
    $input2_value = $row["city"];
    $input3_value = $row["state"];
} else {
    echo "0 results";
}
/*
$addv = $_POST["address"];
$cityv = $_POST["city"];
$statev= $_POST["state"];
*/
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$addv = mysqli_real_escape_string($link, $_REQUEST['address']);
$cityv = mysqli_real_escape_string($link, $_REQUEST['city']);
$statev = mysqli_real_escape_string($link, $_REQUEST['state']);

$sql = "UPDATE orders_info SET  address='$addv' city='$cityv' state='$statev' WHERE user_id=12 ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>





            <!-- /Billing Details -->
            
                <form id="signup_form" onsubmit="return false" class="login100-form">
                  <div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Alternative Address</h2>
                                    </div>
                                    <div class="form-group ">
                                    
                                        <input class="input form-control input-borders" type="text" name="address" id="f_name" placeholder=" id" value="<?php echo $input1_value; ?>">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="city" id="address1" placeholder="title" value="<?php echo $input2_value; ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="state" id="address2" placeholder="City">
                                    </div>
                                    
                                    
                                    <div style="form-group">
                                       <input class="primary-btn btn-block"  value="Update Adress" type="submit" name="update_button">
                                    </div>
                                </div>

                                    
                                
                </form>
                                

            
          

          
        
    

      
