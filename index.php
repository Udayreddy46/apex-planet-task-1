<?php
// Black Box Task 1 - Development Environment Setup
// PHP & MySQL CRUD Application

// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'blackbox_db';

// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS blackbox_db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($database);

// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "<br>Table 'users' created successfully or already exists";
} else {
    echo "<br>Error creating table: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Box Task 1 - PHP CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Black Box Task 1 - Development Environment Setup</h3>
                    </div>
                    <div class="card-body">
                        <h4>Welcome to PHP & MySQL CRUD Application</h4>
                        <p>This is the initial setup for Task 1 of your internship project.</p>
                        
                        <div class="alert alert-success">
                            <strong>Environment Status:</strong> ✅ Ready for development
                        </div>
                        
                        <h5>Next Steps:</h5>
                        <ul>
                            <li>Create user management interface</li>
                            <li>Implement CRUD operations</li>
                            <li>Add form validation</li>
                            <li>Implement search functionality</li>
                        </ul>
                        
                        <a href="create.php" class="btn btn-primary">Add New User</a>
                        <a href="read.php" class="btn btn-info">View Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
