<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ashils Travel and Flight - Your Travel Companion</title>
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
           position: relative; /* Added for positioning */
        }

        .hero-image {
           background-image: url('aero.jpg'); 
           height: 400px; /* Set height as needed */
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

        .explore-button {
           padding: 10px 20px;
           background-color: #ffcc00;
           color: #333;
           border: none;
           border-radius: 5px;
        }

        .explore-button:hover {
           background-color: #e6b800; 
        }

        .search-section {
           text-align: center;
           margin: 20px auto;
           padding: 20px;
           background-color: white;
           border-radius: 8px;
           box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .search-section h2 {
           margin-bottom: 15px;
        }

        .search-form input {
           width: calc(33% - 20px);
           margin-right: 10px; /* Adjusted for spacing */
           padding: 10px; 
           border-radius: 4px; 
           border: 1px solid #ccc; 
        }

        .search-form button {
           padding: 10px; 
           background-color: #007bff; 
           color:white; 
           border-radius :4 px; 
           border:none; 
       }

       /* Service Section Styles */
       .service-section-container {
            display: flex; /* Use flexbox for horizontal layout */
            justify-content: space-between; /* Space out the cards */
            margin-top: 20px; /* Add some space above the section */
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
       }

       .service-card {
            background-color:white; 
            margin :10 px; 
            padding :30 px; /* Increased padding for larger cards */
            border-radius :8 px; 
            box-shadow :0 4 px 20 px rgba(0,0,0,0.1); /* Enhanced shadow for depth */
            flex-basis :30%; /* Set a basis for each card */
            min-width :300 px; /* Minimum width for responsiveness */
            max-width :350 px; /* Maximum width for larger screens */
         } 

         .service-card h3 { 
             text-align:center; 
         } 

         .service-card form { 
             display:flex; 
             flex-direction :column; 
         } 

         .service-card input { 
             margin-bottom :10 px; 
             padding :10 px; 
             border-radius :4 px; 
         } 

         .service-card button { 
             padding :10 px; 
             background-color:#007bff; 
             color:white; 
             border:none; 
             border-radius :4 px;  
         } 

         .service-card button:hover {  
             background-color:#0056b3;  
         } 

         /* Info Section Styles */
         .info-section { 
             background-color:white; 
             margin:auto; 
             padding :20 px; 
             border-radius :8 px; 
         } 

         .info-section h2 {  
             text-align:center;  
         } 

         .info-section p {  
             text-align:center;  
         } 

         footer {   
              text-align:center;   
              padding :20 px;   
          } 

          @media (max-width :768 px) {   
              .search-form input {    
                   width :100%;    
                   margin-right :0 ;    
                   margin-bottom :10 px ;    
              }   

              /* Adjust service cards for smaller screens */
              .service-card {   
                  flex-basis :100%; /* Full width on small screens */    
              }   
          }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">Ashils travel and flight</div>
        <ul class="menu">
            <li><a href="#flights">Flights</a></li>
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
                <h1>Welcome to Ashils travel and flight</h1>
                <p>Your one-stop solution for flights, hotels, and car hire.</p>
                <button class="explore-button"><a href="destination.php">Explore Now</a></button>
            </div>
        </div>
    </header>

    <!-- Search Section -->
    <section class="search-section">
        <h2>Search for Your Next Adventure</h2>
        <form class="search-form">
            <input type="text" placeholder="Enter Destination" required>
            <input type="date" required>
            <input type="date" required>
            <button type="submit">Search</button>
        </form>
    </section>

    <!-- Services Section -->
    <section class="service-section-container">
        
       <!-- Flights Section -->
       <div class="service-card" id="flights">
          <h3>Book Your Flight</h3>
          <form class="flight-form">
              <input type="text" placeholder="From" required>
              <input type="text" placeholder="To" required>
              <input type="date" required>
              <button type="submit">Search Flights</button>
          </form>
      </div>

      <!-- Hotels Section -->
      <div class="service-card" id="hotels">
          <h3>Find Hotels</h3>
          <form class="hotel-form">
              <input type="text" placeholder="Destination" required>
              <input type="date" required>
              <input type="date" required>
              <button type="submit">Search Hotels</button>
          </form>
      </div>

      <!-- Car Hire Section -->
      <div class="service-card" id="carhire">
          <h3>Car Hire Services</h3>
          <form class="carhire-form">
              <input type="text" placeholder="Pick-up Location" required>
              <input type="date" required>
              <input type="date" required>
              <button type="submit">Hire a Car</button>
          </form>
      </div>

   </section>

   <!-- Footer Section -->
   <footer>
       <p>&copy; 2025 Ashils travel and flight. All rights reserved.</p>
   </footer>

</body>
</html>








