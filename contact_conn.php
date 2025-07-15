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
    $email = $_POST["email"];
    $message = $_POST["mess"];

    // Add more fields as needed
    
    // Example: Insert data into a table
    $sql = "INSERT INTO contact_table (email,message) VALUES ('$email','$message')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>


