<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = mysqli_connect($servername, $username, $password, $dbname,3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $country = $_POST["cn"];
    $street_add = $_POST["houseadd"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postal_code = $_POST["pc"];
    $phone = $_POST["phone"];
    $email_add = $_POST["email_add"];

    
  
    // Add more fields as needed
    
    // Example: Insert data into a table
    $sql = "INSERT INTO order_conf (first_name,last_name,country,street_add,city,state,postal_code,phone,email_add) VALUES ('$first_name','$last_name','$country','$street_add','$city','$state','$postal_code','$phone','$email_add')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>


