<?php
// index.php

// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetZone - Home</title>
    
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333333;
            margin: 0;
            padding: 0;
        }
        header {
            background: #ff6f61;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        nav {
            text-align: center;
            margin: 20px 0;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #ff6f61;
            font-weight: bold;
            font-size: 18px;
            padding: 10px 20px;
            border: 2px solid #ff6f61;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        nav a:hover {
            background: #ff6f61;
            color: white;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            overflow: hidden;
        }
        footer {
            background: #37474f;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Content Section */
        .content {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            text-align: center;
        }
        .content h2 {
            color: #ff6f61;
            margin-bottom: 15px;
        }
        .content p {
            color: #555555;
            line-height: 1.6;
            margin: 10px 0;
        }

        /* Featured Sections */
        .sections {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }
        .section {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .section:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
        .section img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .section h3 {
            color: #ff6f61;
            margin-bottom: 10px;
        }
        .section p {
            color: #555555;
            margin-bottom: 10px;
        }
        .section button {
            padding: 10px 20px;
            color: #ffffff;
            background: #ff6f61;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .section button:hover {
            background: #e65b55;
        }

        /* Pets Available Page */
        .pets {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }
        .pet {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .pet:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
        .pet img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .pet h3 {
            color: #ff6f61;
            margin-bottom: 10px;
        }
        .pet p {
            color: #555555;
            margin-bottom: 10px;
        }
        .pet button {
            padding: 10px 20px;
            color: #ffffff;
            background: #ff6f61;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .pet button:hover {
            background: #e65b55;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to PetZone</h1>
    <p>Your Trusted Pet Platform</p>
</header>

<div class="container">
    <nav>
        <a href="admin_login.php">Admin Login</a>
        <a href="customer_page.php">Customer Login</a>
        <a href="petaval.php">Pets Available</a>
    </nav>

    <div class="content">
        <h2>Explore Our Pet Products</h2>
        <p>We provide high-quality pet products and services to ensure your furry friends are happy and healthy.</p>
    </div>

    <div class="sections">
        <div class="section">
            <img src="dogfood.jpg" alt="Dog Food">
            <h3>Dog Food</h3>
            <p>High-quality dog food for your loyal companion.</p>
            <a href="dogfooddetail.html">
                <button>Learn More</button>
            </a>
        </div>
        <div class="section">
            <img src="catfood.png" alt="Cat Food">
            <h3>Cat Food</h3>
            <p>Nutritional food to keep your cat healthy.</p>
            <a href="catfood.html">
                <button>Learn More</button>
            </a>
        </div>
    </div>
</div>

<div class="container" id="pets">
    <div class="content">
        <h2>Pets we have to offer</h2>
        <p>Choose from a variety of adorable pets to bring home!</p>
    </div>

    <div class="pets">
        <div class="pet">
            <img src="gr1.jpg" alt="Dog 1">
            <h3>Golden Retriever</h3>
            <p>Price: $1200</p>
            <button>Purchase</button>
        </div>
        <div class="pet">
            <img src="labra1.jpg" alt="Dog 2">
            <h3>Labrador</h3>
            <p>Price: $1000</p>
            <button>Purchase</button>
        </div>
        <div class="pet">
            <img src="siberiancat.jpg" alt="Cat 1">
            <h3>Siberian Cat</h3>
            <p>Price: $900</p>
            <button>Purchase</button>
        </div>
        <div class="pet">
            <img src="persian.jpg" alt="Cat 2">
            <h3>Persian Cat</h3>
            <p>Price: $800</p>
            <button>Purchase</button>
        </div>
        <div class="pet">
            <img src="german.jpeg" alt="Dog 3">
            <h3>German Shepherd</h3>
            <p>Price: $1100</p>
            <button>Purchase</button>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 PetZone. All Rights Reserved.</p>
</footer>

</body>
</html>
