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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = pg_query_params($conn, "SELECT * FROM cooked_users WHERE user_email = $1", [$email]);
    $user = pg_fetch_assoc($result);

    if ($user && password_verify($password, $user['user_password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['loggedIn'] = true;
        setcookie('user_email', $email, time() + 3600, "/", "", true, true);

        echo json_encode(['success' => true, 'message' => 'Login successful.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid credentials.']);
    }
}

pg_close($conn);
?>
