<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshop";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT user_id FROM orders_info WHERE city ='Bangalore'";
    $query = $conn->query($sql);
    $results = $query->fetchAll(PDO::FETCH_OBJ);

    if ($query->rowCount() > 0) {
        foreach ($results as $result) {
            echo "User ID: " . $result->user_id . "<br>";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$_SESSION['trd']=$result->user_id;
?>
<a href="test1.php">hello</a>
