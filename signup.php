<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["signup-username"];
    $password = $_POST["signup-password"]; // In a real application, you should hash the password

    // Connect to the database (replace with your database connection code)
    $conn = mysqli_connect("localhost", "username", "password", "database");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert user data into the database (replace with proper SQL statements)
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
