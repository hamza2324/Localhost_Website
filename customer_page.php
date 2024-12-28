<?php
// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database connection settings
    $host = "localhost";
    $dbname = "petzone";
    $db_user = "root";
    $db_password = "database";

    try {
        // Establish a database connection
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve customer credentials from the form
        $customerEmail = $_POST['customer-email'];
        $customerPassword = $_POST['customer-password'];

        // Validate credentials
        $stmt = $conn->prepare("SELECT * FROM customers WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $customerEmail);
        $stmt->bindParam(':password', $customerPassword);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            // Successful login
            echo "<script>alert('Login successful! Redirecting to customer dashboard.');</script>";
            header("Refresh: 2; url=customer_dashboard.php");
            exit();
        } else {
            // Invalid credentials
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <style>
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .customer-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
        }
        .customer-img img {
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
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background: #5a67d8;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #434190;
        }
        .error {
            color: red;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="customer-img">
            <img src="customer_pic.jpg" alt="Customer Picture">
        </div>
        <h2>Customer Login</h2>
        <form method="POST" action="">
            <input type="email" name="customer-email" placeholder="Email" required>
            <input type="password" name="customer-password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
