<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Link to your main CSS file -->
    <title>Car Hire - Ashils travel and flight</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar .menu {
            list-style-type: none;
            padding: 0;
        }

        .navbar .menu li {
            display: inline;
            margin: 0 15px;
        }

        .navbar .menu a {
            color: white;
            text-decoration: none;
        }

        .car-hire-section {
            max-width: 800px; /* Set a max width for the content */
            margin: 40px auto; /* Center the section */
            padding: 20px; /* Add some padding */
            background-color: white; /* White background for contrast */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Subtle shadow */
        }

        .car-hire-section h2 {
            text-align: center; /* Center the heading */
            color: #007bff; /* Blue color for the heading */
        }

        .car {
            margin-bottom: 30px; /* Space between cars */
            text-align: center; /* Center align text */
        }

        .car img {
            width: 100%; /* Make images responsive */
            height: auto; /* Maintain aspect ratio */
            border-radius: 4px; /* Rounded corners for images */
            transition: transform 0.3s ease; /* Smooth transition for hover effect */
        }

        .car img:hover {
            transform: scale(1.05); /* Scale up image on hover */
        }

        .price-tag {
            font-weight: bold; /* Bold price tag */
            color: #007bff; /* Blue color for prices */
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #007bff; /* Match footer with navbar */
            color: white; /* White text for contrast */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">Ashils travel and flight</div>
        <ul class="menu">
            <li><a href="travel and flight.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="destination.php">Destinations</a></li>
            <li><a href="carhire.php">Car Hire</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <!-- Car Hire Section -->
    <section class="car-hire-section">
        <h2>Car Hire Options</h2>

        <!-- Car 1 -->
        <div class="car">
            <h3>Ford Mustang</h3>
            <img src="mustang.jpg" alt="Ford Mustang"> <!-- Placeholder for image -->
            <p>A powerful sports car with an iconic design and thrilling performance.</p>
            <p class="price-tag">Average Price per Day: R1,200</p>
            <p>Class: Sports</p>
        </div>

        <!-- Car 2 -->
        <div class="car">
            <h3>Toyota Corolla</h3>
            <img src="corolla.jpg" alt="Toyota Corolla"> <!-- Placeholder for image -->
            <p>A reliable and fuel-efficient sedan perfect for city driving.</p>
            <p class="price-tag">Average Price per Day: R600</p>
            <p>Class: Sedan</p>
        </div>

        <!-- Car 3 -->
        <div class="car">
            <h3>BMW X5</h3>
            <img src="bmw x5.jpg" alt="BMW X5"> <!-- Placeholder for image -->
            <p>A luxury SUV that combines comfort with performance and style.</p>
            <p class="price-tag">Average Price per Day: R1,500</p>
            <p>Class: SUV</p>
        </div>

        <!-- Car 4 -->
        <div class="car">
            <h3>Volkswagen Golf</h3>
            <img src="golf.jpg" alt="Volkswagen Golf"> <!-- Placeholder for image -->
            <p>A compact hatchback known for its versatility and fun driving experience.</p>
            <p class="price-tag">Average Price per Day: R750</p>
            <p>Class: Hatchback</p>
        </div>

    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Ashils travel and flight. All rights reserved.</p>
    </footer>

</body>
</html>
