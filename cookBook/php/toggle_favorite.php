<?php
header('Content-Type: application/json');

// Ensure proper error reporting (disable in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Parse JSON input
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Validate input
if (!isset($data['recipeId'], $data['isFavorited'], $data['userId'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid input.']);
    exit();
}

$recipeId = $data['recipeId'];
$isFavorited = $data['isFavorited'];
$userId = $data['userId'];

// Database connection settings
$host = "localhost";
$port = "5432";
$dbname = "web";
$user = "postgres";
$password = "root";

// Connect to PostgreSQL database
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
    exit();
}

// Check user session
if (!$userId) {
    echo json_encode(['success' => false, 'message' => 'You must be logged in to add to favorites.']);
    pg_close($conn);
    exit();
}

// Perform the favorite/unfavorite action
if ($isFavorited) {
    $query = "DELETE FROM user_favorite WHERE user_id = $1 AND recipe_id = $2";
    $result = pg_query_params($conn, $query, [$userId, $recipeId]);
    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Recipe removed from favorites.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error removing recipe from favorites.']);
    }
} else {
    $query = "INSERT INTO user_favorite (user_id, recipe_id) VALUES ($1, $2)";
    $result = pg_query_params($conn, $query, [$userId, $recipeId]);
    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Recipe added to favorites.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error adding recipe to favorites.']);
    }
}

pg_close($conn);
?>
