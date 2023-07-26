<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Serene Beauty | About Us</title>
        <link rel="stylesheet" href="css/style2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="logic.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
		<script>
		function initMap() {
			var salonLocation = {lat: 40.712776, lng: -74.005974}; // Update with your salon's latitude and longitude coordinates
			var map = new google.maps.Map(document.getElementById('map'), {
				center: salonLocation,
				zoom: 15
			});
			var marker = new google.maps.Marker({
				position: salonLocation,
				map: map,
				title: 'Beauty Salon Location'
			});
		}
		</script>
		<style>
			@media(max-width: 700px){
    .text-box h1{
        font-size: 20px;
    }
    .nav-links ul li{
        display: block;
    }
    .nav-links{
        position: absolute;
       
        height: 100vh;
        width: 200px;
        background-color: rgba(180, 176, 166, 0.8);
        top: 0;
        right: -200px;
        text-align: left;
        z-index: 2;
        transition: 1s;
    }
    nav .fa{
        display: block;
        color: black;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
    }
    .nav-links ul{
        padding: 30px ;
    }
}
		</style>
</head>
<body class="aboutus">
	<section class="header-aboutus">
		<nav>
			<a href="index2.php"><img src="images/logo-black.png" alt=""></a>
			<div class="nav-links" id="navlinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index2.php">HOME</a></li>
					<li><a href="services.php">SERVICES</a></li>
					<li><a href="blog.php">BLOGS</a></li>
					<?php
					if(!isset($_SESSION['flag']))
                    {
                        session_start();
                    }
                    
                    if ($_SESSION['flag']) {
                        $f = $_SESSION['flag'];
                        $i = $_SESSION['id'];
                        if ($f === 0) {

                            echo "<li><a href='signUp.html'>SIGN UP</a></li>";
                            echo "<li><a href='login.html'>LOG IN</a></li>";
                        } else {
                            echo "<li><a href='user_pannel.php'>USER</a></li>";
                            if($i === '3')
                            {
                                echo "<li><a href='ad_services.php'>ADMIN</a></li>"; 
                            }
                        }
                    } else {
                        echo "<li><a href='signUp.html'>SIGN UP</a></li>";
                        echo "<li><a href='login.html'>LOG IN</a></li>";
                    }

                    ?>
					
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
	</section>
	<div class="container">
		<h1 class="text-brown">About Us</h1>
		<div class="image-container">
			<img src="images/blog-img.jpg" alt="Beauty Salon Image">
			<div class="quote-overlay">
				<p class="text-white">"Beauty begins the moment you decide to be yourself."</p>
			</div>
		</div>
		<div class="content-container">
			<p>Welcome to our beauty salon, where we believe in the power of beauty to boost your confidence and enhance your natural radiance. With a team of highly skilled professionals and a passion for creating exceptional experiences, we strive to provide top-notch services and pampering treatments that leave you feeling rejuvenated and beautiful.</p>
			<p>Our salon offers a wide range of beauty services, including haircuts, styling, coloring, manicures, pedicures, facials, waxing, and more. We take pride in staying up-to-date with the latest trends and techniques in the beauty industry, ensuring that our clients receive the best possible care.</p>
			<p>At Beauty Salon, we prioritize customer satisfaction above all else. Our friendly and knowledgeable staff is dedicated to understanding your unique needs and delivering personalized services tailored to you. We create a warm and welcoming atmosphere where you can relax and indulge in some well-deserved self-care.</p>
			<p>With a focus on using high-quality products and maintaining the highest standards of hygiene and safety, you can trust us to provide exceptional services that exceed your expectations. We believe that everyone deserves to look and feel their best, and we are here to make that a reality for you.</p>
			<p>Visit our salon today and experience the ultimate beauty journey. Let us take care of you and help you unleash your inner beauty.</p>
		</div>
		<div class="owner-details">
			<h2>Meet Our Owner</h2><br>
			<div class="owner-info">
			  <div class="owner-image">
				<img src="images/owner-img.jpg" alt="Owner's Image">
			  </div>
			  <div class="owner-text">
				
				<p><h4>Mrs. Vijaya wadgure</h4>Vijaya Wadgure, the proud owner of Serene Beauty, brings a wealth of experience and passion to the beauty industry. With 7 years of expertise in Makeup, she has established Serene Beauty as a premier destination for exceptional beauty services</p>
			  </div>
			</div>
		  </div>

		  
		  <div class="location-details">
			<h2 >Salon Location</h2>
			<div class="address-details">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
			  <p class="text-skin text-bold"> Address: <br>Vishal Nagar , Near gajanan mandir , Chht. Sambhajinagar</p>
			</div>
			<div class="map-container" id="map"></div>
			<script src="https://api.mapbox.com/mapbox-gl-js/v2.4.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.4.0/mapbox-gl.css" rel="stylesheet">

  <!-- Initialize the map -->
  <script>
    mapboxgl.accessToken = 'YOUR_MAPBOX_ACCESS_TOKEN'; // Replace with your Mapbox access token

    // Create a new map instance
    var map = new mapboxgl.Map({
      container: 'map', // Specify the ID of the map container
      style: 'mapbox://styles/mapbox/streets-v11', // Specify the map style
      center: [lng, lat], // Specify the initial center coordinates
      zoom: 12 // Specify the initial zoom level
    });</script>
		  </div>
		  
		<section class="footer">
			<div class="icons">
				<a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
				<a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
				<a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
				<a href="https://www.twitter.com"><i class="fab fa-twitter-square"></i></a>
				<p>&copy; 2023 Serene Beauty. All Rights Reserved.</p>
			</div>
		
		</section>
	</div>
	<script>
        var navlinks = document.getElementById("navlinks");
        function showMenu() {
            navlinks.style.right = "0";
        }
        function hideMenu() {
            navlinks.style.right = "-200px";
        }
    </script>
</body>
</html>
