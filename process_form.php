<?php
require_once 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $query = $_POST['query'];

    // Do something with the collected data, such as saving to a database, sending an email, etc.
     $stmt = $conn->prepare("INSERT INTO request (name,address,phone,query) VALUES(?,?,?,?)"); 
     $stmt->bind_param("ssis",$name,$address,$phone,$query);  
     $stmt->execute();
     echo "request successfully submitted..";
     $stmt->close();
     $conn->close();
    // For demonstration, let's just display the submitted data
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your address: $address</p>";
    echo "<p>Your phone number: $phone</p>";
    echo "<p>Your service query: $query</p>";
    echo "We will get back to you shortly";
}
?>
