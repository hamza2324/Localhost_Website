<?php
// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database connection settings
    $host = "localhost";
    $dbname = "petzone";
    $db_user = "root";
    $db_password = '';

    // Establish a database connection
    $conn = new mysqli($host, $db_user, $db_password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve admin credentials from the form
    $adminUsername = $_POST['admin-username'];
    $adminPassword = $_POST['admin-password'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $adminUsername, $adminPassword);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if credentials are valid
    if ($result->num_rows === 1) {
        echo "<script>alert('Login successful! Redirecting to admin dashboard.');</script>";
        header("Refresh: 2; url=admin_dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password. Please try again.');</script>";
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .admin-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
        }

        .admin-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #5a67d8; /* Focus color */
        }

        button {
            padding: 12px;
            border: none;
            border-radius: 4px;
            background: #5a67d8;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background: #434190;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            .login-container {
                width: 80%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="admin-img">
            <img src="admin_pic.jpg" alt="Admin Picture">
        </div>
        <h2>Admin Login</h2>
        <form method="POST" action="">
            <input type="text" name="admin-username" placeholder="Username" required>
            <input type="password" name="admin-password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>