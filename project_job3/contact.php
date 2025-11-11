<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Link to your main CSS file -->
    <title>Contact Us - Ashils travel and flight</title>
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

        .contact-section {
            max-width: 800px; /* Set a max width for the content */
            margin: 40px auto; /* Center the section */
            padding: 20px; /* Add some padding */
            background-color: white; /* White background for contrast */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Subtle shadow */
        }

        .contact-section h2 {
            text-align: center; /* Center the heading */
            color: #007bff; /* Blue color for the heading */
        }

        .contact-section p {
            line-height: 1.6; /* Improve readability */
            margin-bottom: 20px; /* Space between paragraphs */
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%; /* Full width inputs */
            margin-bottom: 10px; /* Space between inputs */
            padding: 10px; /* Padding inside inputs */
            border-radius: 4px; /* Rounded corners */
            border: 1px solid #ccc; /* Border style */
        }

        .contact-form button {
            padding: 10px; 
            background-color: #007bff; 
            color: white; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; /* Pointer cursor on hover */
        }

        .contact-form button:hover {
            background-color: #0056b3; /* Darker blue on hover */
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

    <!-- Contact Us Section -->
    <section class="contact-section">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to reach out!</p>
        
        <form class="contact-form">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Ashils travel and flight. All rights reserved.</p>
    </footer>

</body>
</html>
