<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Link to your main CSS file -->
    <title>Destinations - Ashils travel and flight</title>
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

        .destination-section {
            max-width: 800px; /* Set a max width for the content */
            margin: 40px auto; /* Center the section */
            padding: 20px; /* Add some padding */
            background-color: white; /* White background for contrast */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Subtle shadow */
        }

        .destination-section h2 {
            text-align: center; /* Center the heading */
            color: #007bff; /* Blue color for the heading */
        }

        .destination {
            margin-bottom: 30px; /* Space between destinations */
        }

        .destination h3 {
            color: #333; /* Darker color for destination titles */
        }

        .destination p {
            line-height: 1.6; /* Improve readability */
        }

        .price-tag {
            font-weight: bold; /* Bold price tag */
            color: #007bff; /* Blue color for prices */
        }

        .destination img {
            width: 100%; /* Make images responsive */
            height: auto; /* Maintain aspect ratio */
            border-radius: 4px; /* Rounded corners for images */
            margin-top: 10px; /* Space above images */
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

    <!-- Destinations Section -->
    <section class="destination-section">
        <h2>Explore Our Destinations</h2>

        <!-- Destination 1 -->
        <div class="destination">
            <h3>Bali, Indonesia</h3>
            <img src="bali.jpg" alt="Bali Beach"> <!-- Placeholder for image -->
            <p>Bali is known for its stunning beaches, vibrant culture, and lush landscapes. The island is rich in tradition, with numerous temples and ceremonies that showcase its unique heritage.</p>
            <p class="price-tag">Average Price per Day: R1,500</p>
        </div>

        <!-- Destination 2 -->
        <div class="destination">
            <h3>Paris, France</h3>
            <img src="paris.jpg" alt="Eiffel Tower"> <!-- Placeholder for image -->
            <p>The City of Light is famous for its art, fashion, and gastronomy. Visitors can explore iconic landmarks such as the Eiffel Tower and Louvre Museum while enjoying the rich café culture.</p>
            <p class="price-tag">Average Price per Day: R3,000</p>
        </div>

        <!-- Destination 3 -->
        <div class="destination">
            <h3>Tokyo, Japan</h3>
            <img src="tokoyo.jpg" alt="Tokyo Cityscape"> <!-- Placeholder for image -->
            <p>Tokyo is a bustling metropolis that beautifully blends traditional and modern culture. From ancient shrines to futuristic skyscrapers, there's something for everyone in this vibrant city.</p>
            <p class="price-tag">Average Price per Day: R2,200</p>
        </div>

        <!-- Destination 4 -->
        <div class="destination">
            <h3>Cape Town, South Africa</h3>
            <img src="cp.jpg" alt="Cape Town Table Mountain"> <!-- Placeholder for image -->
            <p>Cape Town is renowned for its stunning landscapes, including Table Mountain and beautiful beaches. The city boasts a rich cultural heritage with influences from various communities.</p>
            <p class="price-tag">Average Price per Day: R1,800</p>
        </div>

        <!-- Destination 5 -->
        <div class="destination">
            <h3>Rio de Janeiro, Brazil</h3>
            <img src="rio.jpg" alt="Rio de Janeiro Beach"> <!-- Placeholder for image -->
            <p>Rio is famous for its breathtaking scenery, lively festivals, and beautiful beaches like Copacabana and Ipanema. The city's vibrant culture is reflected in its music and dance.</p>
            <p class="price-tag">Average Price per Day: R1,600</p>
        </div>

    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Ashils travel and flight. All rights reserved.</p>
    </footer>

</body>
</html>

