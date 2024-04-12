<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $query = $_POST['query'];

    // Do something with the collected data, such as saving to a database, sending an email, etc.
    $conn = new mysqli('localhost','root','', 'service');
    if ($conn->connect_error) {
        die('connection failed:'.$conn->connect_error);
    }else{
     $stmt = $conn->prepare("INSERT INTO hardup (name,address,phone,query) VALUES(?,?,?,?)"); 
     $stmt->bind_param("ssis",$name,$address,$phone,$query);  
     $stmt->execute();
     echo "request successfully submitted..";
     $stmt->close();
     $conn->close();
    }
    // For demonstration, let's just display the submitted data
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your address: $address</p>";
    echo "<p>Your phone number: $phone</p>";
    echo "<p>Your service query: $query</p>";
    echo "We will get back to you shortly";
}
?>
