<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Link to your main CSS file -->
    <title>Hotels - Ashils travel and flight</title>
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

        .hotel-section {
            max-width: 800px; /* Set a max width for the content */
            margin: 40px auto; /* Center the section */
            padding: 20px; /* Add some padding */
            background-color: white; /* White background for contrast */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Subtle shadow */
        }

        .hotel-section h2 {
            text-align: center; /* Center the heading */
            color: #007bff; /* Blue color for the heading */
        }

        .hotel {
            margin-bottom: 30px; /* Space between hotels */
            text-align: center; /* Center align text */
        }

        .hotel img {
            width: 100%; /* Make images responsive */
            height: auto; /* Maintain aspect ratio */
            border-radius: 4px; /* Rounded corners for images */
            transition: transform 0.3s ease; /* Smooth transition for hover effect */
        }

        .hotel img:hover {
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

    <!-- Hotels Section -->
    <section class="hotel-section">
        <h2>Hotel Options</h2>

        <!-- Hotel 1 -->
        <div class="hotel">
            <h3>The Ritz-Carlton</h3>
            <img src="ritz.jpg" alt="The Ritz-Carlton"> <!-- Placeholder for image -->
            <p>A luxurious hotel offering world-class amenities and stunning views.</p>
            <p class="price-tag">Average Price per Day: R3,500</p>
            <p>Class: Luxury</p>
        </div>

        <!-- Hotel 2 -->
        <div class="hotel">
            <h3>Holiday Inn Express</h3>
            <img src="hin.jpg" alt="Holiday Inn Express"> <!-- Placeholder for image -->
            <p>A comfortable and affordable option for travelers seeking convenience.</p>
            <p class="price-tag">Average Price per Day: R1,200</p>
            <p>Class: Budget</p>
        </div>

        <!-- Hotel 3 -->
        <div class="hotel">
            <h3>Hilton Garden Inn</h3>
            <img src="hilton.jpg" alt="Hilton Garden Inn"> <!-- Placeholder for image -->
            <p>A modern hotel with excellent facilities and a great location.</p>
            <p class="price-tag">Average Price per Day: R1,800</p>
            <p>Class: Mid-range</p>
        </div>

        <!-- Hotel 4 -->
        <div class="hotel">
            <h3>Marriott Marquis</h3>
            <img src="marriott.jpg" alt="Marriott Marquis"> <!-- Placeholder for image -->
            <p>A sophisticated hotel known for its exceptional service and amenities.</p>
            <p class="price-tag">Average Price per Day: R2,500</p>
            <p>Class: Luxury</p>
        </div>

    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Ashils travel and flight. All rights reserved.</p>
    </footer>

</body>
</html>
