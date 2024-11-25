<?php
session_start();
header("Content-Type: application/json");

$host = "localhost";
$port = "5432";
$dbname = "web";
$user = "postgres";
$password = "root";

// Connect to the PostgreSQL database
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Error: Unable to connect to the database.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $existingUser = pg_query_params($conn, "SELECT * FROM cooked_users WHERE user_email = $1", [$email]);
    if (pg_num_rows($existingUser) > 0) {
        echo json_encode(['success' => false, 'message' => 'Email already registered.']);
        exit();
    }

    $insertQuery = "INSERT INTO cooked_users (user_email, user_password, user_role) VALUES ($1, $2, 1)";
    $result = pg_query_params($conn, $insertQuery, [$email, $password]);

    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Registration successful.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Registration failed.']);
    }
}

pg_close($conn);
?>
