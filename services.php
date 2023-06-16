<!DOCTYPE html>
<html>
    <head>
        <meta name="viewpoint" content="with=device-width, initial-scale=1.0">
        <title>Serene beauty | Services</title>
        <link rel="stylesheet" href="css/style2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
        <script src="logic.js"></script>
        <style>
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
                <a href="index2.php"><img src="images/logo-black.png" alt=""></a>
                <div class="nav-links" id="navlinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index2.php">HOME</a></li>
                        <li><a href="services.php">SERVICES</a></li>
                        <li><a href="blog.php">BLOGS</a></li>
                        <?php 
                        session_start();
                        if($_SESSION['flag'] === 0)
                        {   
                            echo "<li><a href='signUp.html'>SIGN UP</a></li>";
                            echo "<li><a href='login.html'>LOG IN</a></li>";
                        }
                        else{
                            echo "<li><a href='user_pannel.php'>USER</a></li>";
                        }
                        ?>
                        
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <div class="text-box">
                <h1>OUR SERVICES</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac . Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
            </div>
        </section>
<!-- ----------------------services section------------------------- -->
    <!-------------------------Special sevice section------------------------>
<div class="container">
    <section class="ser-section">
        <div class="serv">
            <div class="container">
                <h1 class="lg-title">Special services with offers</h1>
                <p class="text-light">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac . Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
                <div class="card">
                    <img src="images/hair-services.jpg" alt="Product 1">
                    <div class="card-content">
                        <h2 class="card-title">Haircut</h2>
                        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula risus libero.</p>
                        <p class="card-price">RS 190</p>
                        <a class="hero-btn" href="bookings.html">Book Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/makeup-service.jpg" alt="Product 1">
                    <div class="card-content">
                        <h2 class="card-title">MakeUp</h2>
                        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula risus libero.</p>
                        <p class="card-price">Rs 190</p>
                        <a class="hero-btn" href="bookings.html">Book Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/skincare-service.jpg" alt="Product 1">
                    <div class="card-content">
                        <h2 class="card-title">FacePacks</h2>
                        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula risus libero.</p>
                        <p class="card-price">Rs 190</p>
                        <a class="hero-btn" href="bookings.html">Book Now</a>
                    </div>
                </div>
    <!-- Add more product cards here -->
</div>
</div>
</section>
<!------------------------------Hair services---------------------------->
<div class="container">
    <section class="ser-section">
        <div class="serv">
            <div class="container">
                <h1 class="lg-title">Hair Services That we provide</h1>
                <p class="text-light">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac . Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
                <?php
            
                $conn = new mysqli("localhost:3307", "root", "","serenebeauty") or die("Connect failed: %s\n". $conn -> error);
                $sql = "SELECT name, description, cost FROM service WHERE type = 'hair'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        $name = $row['name'];
                        $cost = $row['cost'];
                        $dis = $row['description'];
                        echo '<div class="card">
                            <img src="images/hair-services.jpg" alt="Product 1">
                            <div class="card-content">
                                <h2 class="card-title">',$name,'</h2>
                                <p class="card-description">',$dis,'</p>
                                <p class="card-price">Rs ',$cost,'</p>
                                <a class="hero-btn" href="bookings.html">Book Now</a>
                            </div>
                        </div>';
               }
            }
            ?>
    <!-- Add more product cards here -->
</div>
</div>
</section>
<!------------------------------Skincare services---------------------------->
<div class="container">
    <section class="ser-section">
        <div class="serv">
            <div class="container">
                <h1 class="lg-title">Skincare Services That we provide</h1>
                <p class="text-light">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac . Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
                <?php
            
            $conn = new mysqli("localhost:3307", "root", "","serenebeauty") or die("Connect failed: %s\n". $conn -> error);
            $sql = "SELECT name, description, cost FROM service WHERE type ='skin'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    $name = $row['name'];
                    $cost = $row['cost'];
                    $dis = $row['description'];
                    echo '<div class="card">
                        <img src="images/hair-services.jpg" alt="Product 1">
                        <div class="card-content">
                            <h2 class="card-title">',$name,'</h2>
                            <p class="card-description">',$dis,'</p>
                            <p class="card-price">Rs ',$cost,'</p>
                            <a class="hero-btn" href="bookings.html">Book Now</a>
                        </div>
                    </div>';
           }
        }
        ?>
    <!-- Add more product cards here -->
</div>
</div>
</section>
<!------------------------------Makeup services---------------------------->
<div class="container">
    <section class="ser-section">
        <div class="serv">
            <div class="container">
                <h1 class="lg-title">Makeup Services That we provide</h1>
                <p class="text-light">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac . Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
                <?php
            
            $conn = new mysqli("localhost:3307", "root", "","serenebeauty") or die("Connect failed: %s\n". $conn -> error);
            $sql = "SELECT name, description, cost FROM service WHERE type='makeup'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    $name = $row['name'];
                    $cost = $row['cost'];
                    $dis = $row['description'];
                    echo '<div class="card">
                        <img src="images/hair-services.jpg" alt="Product 1">
                        <div class="card-content">
                            <h2 class="card-title">',$name,'</h2>
                            <p class="card-description">',$dis,'</p>
                            <p class="card-price">Rs ',$cost,'</p>
                            <a class="hero-btn" href="bookings.html">Book Now</a>
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
    <a href="aboutus.php"><h4>About Us</h4></a>
    <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac <br>turpis egestas.
        Vestibulum tortor qua</p>
    <div class="icons">
        <a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.twitter.com"><i class="fab fa-twitter-square"></i></a>
        <p>&copy; 2023 Serene Beauty. All Rights Reserved.</p>
    </div>

</section>
</body>