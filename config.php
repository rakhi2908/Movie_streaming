<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root"; // Default XAMPP/WAMP username
$password = ""; // Default password for XAMPP/WAMP is empty
$dbname = "moviestreaming"; // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Initialize a message variable
$message = '';

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form input values
    $name = $_POST['FullName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO users (Full_Name, Email, Password) VALUES (?, ?,?)");
    $stmt->bind_param("sss", $name, $email, $password); // 's' for string

    // Execute the query and check if the data was inserted successfully
    if($stmt->execute()){
        $_SESSION['Account Created Successfully'] = "Account Created Successfully"; 
    }else{
        $_SESSION['Account Created Successfully'] = "Error: ".$stmt->error;
    }

    // Close the statement and connection
    $stmt->close();

    //redirect back to the original page
    header("Location:StreamFlix.php");
    exit();
    
}
$conn->close();
?>
