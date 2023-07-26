<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="./images/site_icon.png" type="image/x-icon" />
    <title>Serene beauty | Services</title>
    <link rel="stylesheet" href="css\style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="logic.js"></script>
    <style>
        .header-services {
            min-height: 60vh;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(images/service-bg-img.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 300px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #ffffff;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #4d4d4d;
        }

        .card-description {
            font-size: 14px;
            margin-bottom: 20px;
            color: #6c6c6c;
        }

        .card-price {
            font-size: 18px;
            font-weight: bold;
            color: #704c38;
        }

        @media (max-width: 768px) {
            .card {
                width: calc(50% - 40px);
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
                margin: 20px 0;
            }
        }
    </style>
</head>

<body>
    <section class="header-services">
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
            <h1>OUR SERVICES</h1>
            <p>Discover your true beauty with our comprehensive range of exceptional beauty services.Our skilled professionals are dedicated to enhancing your natural features and providing a luxurious experience.</p>
        </div>
    </section>
    <!-- ----------------------services section------------------------- -->
    <!-------------------------Special sevice section------------------------>
    <div class="container">
                <section class="ser-section">
                    <div class="serv">
                        <div class="container">
                            <h1 class="lg-title">Special Services That we provide</h1>
                            <p class="text-light">we offer a range of special services designed to provide an extraordinary and unforgettable beauty experience. Our special services include:</p>
                            <?php

$conn = new mysqli("sql100.infinityfree.com", "if0_34678114", "943Uw88q1QdrSMC","if0_34678114_serenebeauty") or die("Connect failed: %s\n" . $conn->error);
                            $sql = "SELECT * FROM service WHERE type='special'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $name = $row['name'];
                                    $cost = $row['cost'];
                                    $dis = $row['description'];
                                    $imageData = $row['img'];
                                    // Decode the Base64-encoded image data
                                    $decodedImage = base64_decode($imageData);
                                    $imgSrc = 'data:image/jpeg;base64,' . base64_encode($decodedImage);
                                    // Display the image
                                    echo '<div class="card">
                                    <img src="' . $imgSrc . '" alt="Image">
                        <div class="card-content">
                            <h2 class="card-title">', $name, '</h2>
                            <p class="card-description">', $dis, '</p>
                            <p class="card-price">Rs ', $cost, '</p>
                            <form action="bookings.php" method="GET">
                            <button type="submit" class="hero-btn" name="book_now" value="' . $row['s_id'] . '">Book Now</button>
                        </form>
                        </div>
                    </div>';
                                }
                            }
                            ?>
                            <!-- Add more product cards here -->
                        </div>
                    </div>

        <!------------------------------Hair services---------------------------->
        <div class="container">
            <section class="ser-section">
                <div class="serv">
                    <div class="container">
                        <h1 class="lg-title">Hair Services That we provide</h1>
                        <p class="text-light"> Whether you're looking for a stylish haircut, a vibrant new hair color, or a special occasion updo, we offer a wide range of hair services to cater to your unique needs..</p>
                        <?php
                        $conn = new mysqli("sql100.infinityfree.com", "if0_34678114", "943Uw88q1QdrSMC","if0_34678114_serenebeauty") or die("Connect failed: %s\n" . $conn->error);
                        $sql = "SELECT * FROM service WHERE type = 'hair'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $name = $row['name'];
                                $cost = $row['cost'];
                                $dis = $row['description'];
                                $imageData = $row['img'];
                                // Decode the Base64-encoded image data
                                $decodedImage = base64_decode($imageData);
                                $imgSrc = 'data:image/jpeg;base64,' . base64_encode($decodedImage);
                                // Display the image
                                echo '<div class="card">
                                <img src="' . $imgSrc . '" alt="Image">
                                <div class="card-content">
                                    <h2 class="card-title">' . $name . '</h2>
                                    <p class="card-description">' . $dis . '</p>
                                    <p class="card-price">Rs ' . $cost . '</p>


                                    <form action="bookings.php" method="GET">
                                    <button type="submit" class="hero-btn" name="book_now" value="' . $row['s_id'] . '">Book Now</button>
                                </form>
								</form>
                                </div>
                            </div>';

                            }
                        }
                        ?>



                        <!-- Add more product cards here -->
                    </div>
                </div>
            </section>
            <!-- --------------------------------skin services--------------------------> 
            <div class="container">
                <section class="ser-section">
                    <div class="serv">
                        <div class="container">
                            <h1 class="lg-title">Skincare Services That we provide</h1>
                            <p class="text-light">Our dedicated team of experienced estheticians and skincare professionals is committed to providing personalized treatments and solutions tailored to your unique skin type and concerns. Our skin services include:

</p>
                            <?php

$conn = new mysqli("sql100.infinityfree.com", "if0_34678114", "943Uw88q1QdrSMC","if0_34678114_serenebeauty") or die("Connect failed: %s\n" . $conn->error);
                            $sql = "SELECT * FROM service WHERE type='skin'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $name = $row['name'];
                                    $cost = $row['cost'];
                                    $dis = $row['description'];
                                    $imageData = $row['img'];
                                    // Decode the Base64-encoded image data
                                    $decodedImage = base64_decode($imageData);
                                    $imgSrc = 'data:image/jpeg;base64,' . base64_encode($decodedImage);
                                    // Display the image
                                    echo '<div class="card">
                                    <img src="' . $imgSrc . '" alt="Image">
                        <div class="card-content">
                            <h2 class="card-title">', $name, '</h2>
                            <p class="card-description">', $dis, '</p>
                            <p class="card-price">Rs ', $cost, '</p>
                            <form action="bookings.php" method="GET">
                            <button type="submit" class="hero-btn" name="book_now" value="' . $row['s_id'] . '">Book Now</button>
                        </form>
                        </div>
                    </div>';
                                }
                            }
                            ?>
                            <!-- Add more product cards here -->
                        </div>
                    </div>

            <!------------------------------Makeup services---------------------------->
            <div class="container">
                <section class="ser-section">
                    <div class="serv">
                        <div class="container">
                            <h1 class="lg-title">Makeup Services That we provide</h1>
                            <p class="text-light">Whether you're attending a special event, preparing for a photoshoot, or simply want to treat yourself to a glamorous makeover, our makeup services are tailored to your individual preferences. Our makeup services include:</p>
                            <?php

$conn = new mysqli("sql100.infinityfree.com", "if0_34678114", "943Uw88q1QdrSMC","if0_34678114_serenebeauty") or die("Connect failed: %s\n" . $conn->error);
                            $sql = "SELECT * FROM service WHERE type='makeup'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $name = $row['name'];
                                    $cost = $row['cost'];
                                    $dis = $row['description'];
                                    $imageData = $row['img'];
                                    $s_id = $row['s_id'];
                                    // Decode the Base64-encoded image data
                                    $decodedImage = base64_decode($imageData);
                                    $imgSrc = 'data:image/jpeg;base64,' . base64_encode($decodedImage);
                                    // Display the image
                                    echo '<div class="card">
                                    <img src="' . $imgSrc . '" alt="Image">
                        <div class="card-content">
                        
                            <h2 class="card-title">', $name, '</h2>
                            <p class="card-description">', $dis, '</p>
                            <p class="card-price">Rs ', $cost, '</p>
                            
                            <form action="bookings.php" method="GET">
                            <button type="submit" class="hero-btn" name="book_now" value="' . $row['s_id'] . '">Book Now</button>
                        </form>
                        </div>
                    </div>';
                                }
                            }
                            ?>
                            <!-- Add more product cards here -->
                        </div>
                    </div>

                </section>
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