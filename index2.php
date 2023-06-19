<!DOCTYPE html>
<html>

<head>
    <meta name="viewpoint" content="with=device-width, initial-scale=1.0">
    <title>Serene Beauty | Home </title>
    <link rel="stylesheet" href="css\style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="logic.js"></script>
    <style>
        .header-home {
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(images/b-img.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
        }
    </style>
</head>

<body>
    <section class="header-home">
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
                        if ($f === 0) {

                            echo "<li><a href='signUp.html'>SIGN UP</a></li>";
                            echo "<li><a href='login.html'>LOG IN</a></li>";
                        } else {
                            echo "<li><a href='user_pannel.php'>USER</a></li>";
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
            <h1>Beautify inside n out</h1>
            <p>Pellentesque hlbbmnvabitant morbi tristique senectus et netus et malesuada fames ac . Donec eu libero sit
                amet quam egestas semper. Aenean ultricies mi vitae est.</p>
            <a href="services.php" class="hero-btn">get started</a>

        </div>
    </section>

    <!---------------Intro------------------>
    <section class="intro">
        <h1>Intro</h1>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
            sit amet quam egestas semper. Aenean ultricies mi vitae est. <br><br>
            <hr>
        </p>
    </section>
    <!---------------services------------>
    <section class="services">
        <h1>Services We Offer</h1>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Vestibulum tortor qua</p>
        <div class="row">
            <div class="services-col">
                <img src="images/hair-services.jpg" alt="">
                <h3>HairServices</h3>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor qua</p>
                <a href="services.php" class="hero-btn">Know More</a>
            </div>
            <div class="services-col">
                <img src="images/skincare-service.jpg" alt="">
                <h3>SkinServices</h3>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor qua</p>
                <a href="services.php" class="hero-btn">Know More</a>
            </div>
            <div class="services-col">
                <img src="images/makeup-service.jpg" alt="">
                <h3>MakeupServices</h3>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor qua</p>
                <a href="services.php" class="hero-btn">Know More</a>
            </div>
        </div>
    </section>
    <!-------------Blogs-------------------->
    <section class="blogs">
        <h1>Blogs</h1>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac .</p>
        <div class="row">
            <div class="blogs-col">
                <h3>Haircare</h3>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam, </p>
                <a href="blog.php">
                    <h6>Read more <i class="fa fa-arrow-right"></i></h6>
                </a>
            </div>
            <div class="blogs-col">
                <h3>Skincare</h3>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam, </p>
                <a href="blog.php">
                    <h6>Read more <i class="fa fa-arrow-right"></i></h6>
                </a>
            </div>
            <div class="blogs-col">
                <h3>Hygine</h3>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam,</p>
                <a href="blog.php">
                    <h6>Read more <i class="fa fa-arrow-right"></i></h6>
                </a>
            </div>
        </div>
    </section>

    <!---------------none------------------>
    <!-- <section class="blogs">
    <h1>Our Blogs</h1>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada .</p>

    <div class="row">
        <div class="blogs-col">
            <img src="images/hair-services.jpg" alt="">
            <div class="layer">
                <h3>HairCare</h3>
            </div>
        </div>
        <div class="blogs-col">
            <img src="images/skincare-service.jpg" alt="">
            <div class="layer">
                <h3>SkinCare</h3>
            </div>
        </div>
        <div class="blogs-col">
            <img src="images/hair-services.jpg" alt="">
            <div class="layer">
                <h3>Hygine</h3>
            </div>
        </div>
    </div>
</section> -->


    <!-------------contact us--------->
    <section class="contact">
        <h1>Directly get in touch with us</h1>
        <a href="contactus.php" class="hero-btn">CONTACT US</a>
    </section>

    <hr style="margin-left: 10%; margin-right: 10%;">
    <!------------------Footer------------>
    <section class="footer">
        <a href="aboutus.php">
            <h4>About Us</h4>
        </a>
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
    <!---------------javascript for toggle menu------------------>
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