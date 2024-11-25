<?php
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

$query = isset($_GET['query']) ? pg_escape_string($conn, $_GET['query']) : '';

// Fetch latest recipes (all or based on search)
$searchQuery = $query ? "SELECT * FROM recipes WHERE recipe_title LIKE '%$query%'" : "SELECT * FROM recipes";
$recipesResult = pg_query($conn, $searchQuery);
$recipes = [];
while ($row = pg_fetch_assoc($recipesResult)) {
    $recipes[] = $row;
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode([
    'recipes' => $recipes
]);

pg_close($conn);

?>
