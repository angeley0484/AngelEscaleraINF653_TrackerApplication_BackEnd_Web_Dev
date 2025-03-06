<?php
$dsn = "mysql:host=localhost;dbname=assignment_tracker"; // database name
$username = 'root'; // default XAMPP MySQL username
$password = ''; // default XAMPP MySQL password is empty

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Database connection failed");
}
?>
