<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="./images/site_icon.png" type="image/x-icon" />
	<title>Serene Beauty | Blogs</title>
	<link rel="stylesheet" type="text/css" href="css/blog_style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="logic.js"></script>
	<style>
		.header-home {
			min-height: 80vh;
			width: 100%;
			background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(images/blog-img.jpg);
			background-position: center;
			background-size: cover;
			position: relative;
			overflow: hidden;
		}

		nav {
			display: flex;
			padding: 2% 6%;
			justify-content: space-between;
			align-items: center;
		}

		nav img {
			width: 150px;
		}

		.nav-links {
			flex: 1;
			text-align: right;
		}

		.nav-links ul li {
			list-style: none;
			display: inline-block;
			padding: 8px 12px;
			position: relative;
		}

		.nav-links ul li a {
			color: #fff;
			text-decoration: none;
			font-size: 13px;
		}

		a {
			color: burlywood;
			text-decoration: none;
			font-size: 13px;
		}

		.nav-links ul li::after {
			content: '';
			width: 0%;
			height: 2px;
			background: #b4b0a6;
			display: block;
			margin: auto;
			transition: 0.5s;
		}

		.nav-links ul li:hover::after {
			width: 100%;
		}

		.text-box {
			width: 90%;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}

		.text-box h1 {
			font-size: 62px;
			color: #fff;
		}

		.text-box p {
			margin: 10px 0 40px;
			font-size: 14px;
			color: #fff;
		}

		.hero-btn {
			display: inline-block;
			text-decoration: none;
			color: black;
			border: none;
			border-bottom: 1px solid #b4b0a6;
			padding: 5px 20px;
			font-size: 13px;
			background: transparent;
			position: relative;
			cursor: pointer;
		}

		.hero-btn:hover {
			border-bottom: 1px solid #b4b0a6;
			background: #b4b0a6;
			transition: 1s;
		}

		nav .fa {
			display: none;
		}

		@media(max-width: 700px) {
			.text-box h1 {
				font-size: 20px;
			}

			.nav-links ul li {
				display: block;
			}

			.nav-links {
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

			nav .fa {
				display: block;
				color: #fff;
				margin: 10px;
				font-size: 22px;
				cursor: pointer;
			}

			.nav-links ul {
				padding: 30px;
			}
		}

		.footer {
			width: 100%;
			text-align: center;
			padding: 30px 0;
		}

		.footer h4 {
			margin-bottom: 25px;
			margin-top: 20px;
			font-weight: 600;
		}

		/* .icons .fa{
	color: #f44336;
	margin: 0 13px;
	cursor: pointer;
	padding: 18px 0;
} */
		.icons i {
			color: #b4b0a6;
			margin: 0 13px;
			cursor: pointer;
			padding: 18px 0;
		}

		.footer a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>

<body>
	<section class="header-home">
		<nav>
			<a href="index2.php"><img src="images/logo-white.png" alt=""></a>
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
		<div class="text-box">
			<h1>A Blog that every girl will love</h1>
			<p>Our super helpfull skincare productive post isn't to be missed </p>
		</div>
	</section>




		<div class="container" style="text-align:center;">
			<br>
			<br>
			<br>
			<?php

			$conn = new mysqli("sql100.infinityfree.com", "if0_34678114", "943Uw88q1QdrSMC","if0_34678114_serenebeauty") or die("Connect failed: %s\n" . $conn->error);
			$sql = "SELECT * FROM blogs ";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$name = $row['bl_name'];
					$author = $row['author'];
					$date = $row['date'];
					$title = $row['title'];
					$imageData = $row['blog_image1'];
					// Decode the Base64-encoded image data
					$decodedImage = base64_decode($imageData);
					$imgSrc = 'data:image/jpeg;base64,' . base64_encode($decodedImage);
					// Display the image
					echo '<div class="box-2">
					<img class="b-img-1" src="' . $imgSrc . '" alt="Image">
					<h3 class="heading1">', $name, '</h3>
					<p class="blog-heading-1">', $title, '</p>
					<p class="text">The idea behind hair slugging is that the oils will penetrate and deeply moisture your
						hair while you sleep, giving it the hydration it needsto flourish 
						<form action="readblog.php" method="GET">
									<input type="hidden" name="bl_id" value="' . $row['bl_id'] . '">
									<button type="submit" class="hero-btn">MORE..</button>
								</form>
					</p>
					<span class="name">', $author, ' . ', $date, '</span>
				</div>';
				}
			}
			?>
		</div>

	<section class="footer">
		<hr style="margin-left: 10%; margin-right: 10%;">
		<a href="aboutus.php">
			<h4>About Us</h4>
		</a>
		<p>We are a passionate team of beauty enthusiasts dedicated to celebrating and exploring the world of beauty. Our mission is to inspire and empower individuals to embrace their unique beauty and enhance their self-confidence.</p>
		<div class="icons">
			<a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
			<a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
			<a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
			<a href="https://www.twitter.com"><i class="fab fa-twitter-square"></i></a>
			<p>&copy; 2023 Serene Beauty. All Rights Reserved.</p>
		</div>

	</section>
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