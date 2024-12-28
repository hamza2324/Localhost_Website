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

        $success = false; // Default to unsuccessful login

        if ($stmt->rowCount() === 1) {
            $success = true; // Successful login
            echo "<script>alert('Login successful! Redirecting to customer dashboard.');</script>";
            header("Refresh: 2; url=customer_dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
        }

        // Store the login attempt in the database
        $logStmt = $conn->prepare("INSERT INTO login_attempts (email, success) VALUES (:email, :success)");
        $logStmt->bindParam(':email', $customerEmail);
        $logStmt->bindParam(':success', $success, PDO::PARAM_BOOL);
        $logStmt->execute();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
