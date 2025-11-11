<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ashils Travel and Flight - Packages</title>
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
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar .menu {
            list-style-type: none;
        }

        .navbar .menu li {
            display: inline;
            margin: 0 15px;
        }

        .navbar .menu a {
            color: white;
            text-decoration: none;
        }

        .banner {
           position: relative; 
        }

        .hero-image {
           background-image: url('aero.jpg'); 
           height: 400px; 
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
        }

        .hero-text {
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%, -50%);
           color: white;
           text-align: center;
        }

        .banner h1 {
           font-size: 36px;
        }

        .banner p {
           font-size: 18px;
        }

        /* Packages Section Styles */
        .packages-section {
            display: flex; 
            justify-content: space-around; 
            margin-top: 20px; 
            flex-wrap: wrap; 
            padding: 20px; 
        }

        .package-card {
            background-color:white; 
            margin :10px; 
            padding :20px; 
            border-radius :8px; 
            box-shadow :0 4px 20px rgba(0,0,0,0.1); 
            flex-basis :30%; 
            min-width :300px; 
            max-width :350px; 
         } 

         .package-card h3 { 
             text-align:center; 
         } 

         .package-card p { 
             text-align:center; 
             margin-bottom :10px; 
         } 

         /* Image Styles */
         img {
             width: 100%; /* Ensures all images take full width of the card */
             height: 200px; /* Fixed height for uniformity */
             object-fit: cover; /* Ensures images maintain aspect ratio */
             border-radius: 8px; /* Rounded corners */
         }

         /* VIP Class Specific Styles */
         #vip-class {
             border: 2px solid gold; /* Gold border to make it stand out */
             background-color: #fff8e1; /* Light background color for emphasis */
             box-shadow: 0 6px 30px rgba(255,215,0,0.5); /* Enhanced shadow effect */
         }
         
         /* Footer Section Styles */
         footer {   
              text-align:center;   
              padding :20px;   
          } 

          @media (max-width :768px) {   
              .package-card {   
                  flex-basis :100%;    
              }   
          }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">Ashils travel and flight</div>
        <ul class="menu">
            <li><a href="travel and flight.php">Flights</a></li>
            <li><a href="hotels.php">Hotels</a></li>
            <li><a href="carhire.php">Car Hire</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="destination.php">Destinations</a></li>
            <li><a href="packages.php">Packages</a></li>
        </ul>
    </nav>

    <!-- Banner Section -->
    <header class="banner">
        <div class="hero-image">
            <div class="hero-text">
                <h1>Welcome to Ashils Travel Packages</h1>
                <p>Your perfect travel package awaits!</p>
            </div>
        </div>
    </header>

    <!-- Packages Section -->
<section class="packages-section">
    
    <!-- Budget Class Package -->
    <div class="package-card" id="budget-class">
       <h3>Budget Class Package</h3>
       <img src="economy.jpeg" alt="Economy Flight">
       <p>Includes:</p>
       <ul>
           <li>Economy Flight</li>
           <li>Budget Hotel</li>
           <li>Hatchback/Sedan Car Hire</li>
       </ul>
       <h3>Starting from R8000</h3>
    </div>

    <!-- Average Class Package -->
    <div class="package-card" id="average-class">
       <h3>Average Class Package</h3>
       <img src="average.jpg" alt="Average Class Flight">
       <p>Includes:</p>
       <ul>
           <li>Economy Class Flight</li>
           <li>Medium Hotel</li>
           <li>Sedan/Hatchback/SUV Car Hire</li>
       </ul>
       <h3>Starting from R12000</h3>
    </div>

    <!-- Business Class Package -->
    <div class="package-card" id="business-class">
       <h3>Business Class Package</h3>
       <img src="bussiness.jpg" alt="Business Class Flight">
       <p>Includes:</p>
       <ul>
           <li>Business Class Flights</li>
           <li>Premium Hotels</li>
           <li>Sports Car/SUV Hire</li>
       </ul>
       <h3>Starting from R22000</h3>
    </div>

    <!-- VIP Class Package -->
    <div class="package-card" id="vip-class" style="margin-top: 20px;">
       <h3>VIP Class Package</h3>
       <img src="vip.jpeg" alt="VIP Flight">
       <p>Includes:</p>
       <ul>
           <li>VIP Flights</li>
           <li>VIP Hotels</li>
           <li>Super Car Hire</li>
       </ul>
       <h3>Starting from R50000</h3>
    </div>

 </section>

   <!-- Footer Section -->
   <footer>
       <p>&copy; 2025 Ashils travel and flight. All rights reserved.</p>
   </footer>

</body>
</html>

