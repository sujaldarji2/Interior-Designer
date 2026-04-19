<?php
// Database connection
$connection = mysqli_connect("127.0.0.1", "root", "", "interior");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $comments = mysqli_real_escape_string($connection, $_POST['comments']);

    // Validate inputs
    if (empty($name) || empty($email) || empty($comments)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Insert into database
    $sql = "INSERT INTO contact_messages (name, email, comments, submission_date) 
            VALUES ('$name', '$email', '$comments', NOW())";

    if (mysqli_query($connection, $sql)) {
        // Optionally send an email (uncomment and configure if needed)
        /*
        $to = "your-email@example.com";
        $subject = "New Contact Form Submission";
        $message = "Name: $name\nEmail: $email\nComments: $comments";
        $headers = "From: $email";
        mail($to, $subject, $message, $headers);
        */
        echo "true";
    } else {
        echo "Database error: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request method.";
}

mysqli_close($connection);
?>