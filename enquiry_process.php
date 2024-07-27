<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'mist_solutions_db');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    // Insert data into enquiries table
    $sql = "INSERT INTO enquiries (name, email, password, comments) VALUES ('$name', '$email', '$password', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "New enquiry submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
