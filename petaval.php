<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Available</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Container styles */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .content {
            text-align: center;
        }

        .pets {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .pet {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            max-width: 300px;
        }

        .pet img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Form container */
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        form input, form textarea, form select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        form button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <?php
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        $pet = htmlspecialchars($_POST['pet']);

        echo "<div class='form-container'>";
        echo "<h1>Thank You, $name!</h1>";
        echo "<p>Your request for purchasing a $pet has been received.</p>";
        echo "<p>We will contact you at $email or $phone shortly.</p>";
        echo "<p>Delivery Address: $address</p>";
        echo "<a href='index.html'><button>Back to Home</button></a>";
        echo "</div>";
        exit;
    }
    ?>

    <div class="container" id="pets">
        <div class="content">
            <h2>Pets Available</h2>
            <p>Choose from a variety of adorable pets to bring home!</p>
        </div>

        <div class="pets">
            <!-- Example pets -->
            <div class="pet">
                <img src="gr1.jpg" alt="Dog 1">
                <h3>Golden Retriever</h3>
                <p>Price: $1200</p>
                <form method="POST" action="">
                    <input type="hidden" name="pet" value="Golden Retriever">
                    <button type="submit">Purchase</button>
                </form>
            </div>
            <div class="pet">
                <img src="labra1.jpg" alt="Dog 2">
                <h3>Labrador</h3>
                <p>Price: $1000</p>
                <form method="POST" action="">
                    <input type="hidden" name="pet" value="Labrador">
                    <button type="submit">Purchase</button>
                </form>
            </div>
            <div class="pet">
                <img src="siberiancat.jpg" alt="Cat 1">
                <h3>Siberian Cat</h3>
                <p>Price: $900</p>
                <form method="POST" action="">
                    <input type="hidden" name="pet" value="Siberian Cat">
                    <button type="submit">Purchase</button>
                </form>
            </div>
            <div class="pet">
                <img src="persian.jpg" alt="Cat 2">
                <h3>Persian Cat</h3>
                <p>Price: $800</p>
                <form method="POST" action="">
                    <input type="hidden" name="pet" value="Persian Cat">
                    <button type="submit">Purchase</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Customer Form -->
    <div class="form-container">
        <h1>Customer Details</h1>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>
            
            <label for="pet">Pet Type:</label>
            <select id="pet" name="pet" required>
                <option value="Golden Retriever">Golden Retriever</option>
                <option value="Labrador">Labrador</option>
                <option value="Siberian Cat">Siberian Cat</option>
                <option value="Persian Cat">Persian Cat</option>
            </select>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
