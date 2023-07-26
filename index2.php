<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serene Beauty | Home </title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .header-home {
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(images/b-img.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
            overflow-x: hidden;
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
            <h1>Beautify inside n out</h1>
            <p>Welcome to our haven of beauty, where dreams come true and confidence is ignited. Step into our world of exquisite pampering, 
                where our skilled professionals will curate a personalized experience to unveil your true radiance and leave you feeling like royalty.</p>
            <a href="services.php" class="hero-btn">get started</a>

        </div>
    </section>

    <!---------------Intro------------------>
    <section class="intro">
        <h1>Introduction</h1>
        <p>Beauty is not just skin-deep; it's an expression of your unique essence. Our salon celebrates the artistry of beauty, embracing diversity and individuality.
             With our curated range of services, from skincare to hairstyling, we strive to enhance your natural beauty while honoring your distinct personality. 
            Trust us to illuminate your inner glow and make you feel beautiful, inside and out. <br><br>
            <hr>
        </p>
    </section>
    <!---------------services------------>
    <section class="services">
        <h1>Services We Offer</h1>
        <p>Discover your true beauty with our comprehensive range of exceptional beauty services. </p>
        <div class="row">
            <div class="services-col">
                <img src="images/hair-services.jpg" alt="">
                <h3>HairServices</h3>
                <p>What is this? A wolf cut is a type of haircut that is shorter and thinner on the sides with shaggy messy bangs. It emphasizes face-framing layers and rugged texture.</p>
                <a href="services.php" class="hero-btn">Know More</a>
            </div>
            <div class="services-col">
                <img src="images/skincare-service.jpg" alt="">
                <h3>SkinServices</h3>
                <p>Cleansing involves more than just your face! Wash your hands thoroughly before you begin washing your face, says Zeichner.</p>
                <a href="services.php" class="hero-btn">Know More</a>
            </div>
            <div class="services-col">
                <img src="images/makeup-service.jpg" alt="">
                <h3>MakeupServices</h3>
                <p>From newspapers to magazines, to flyers, to hoardings, the makeup looks that you see in print and media is editorial makeup.</p>
                <a href="services.php" class="hero-btn">Know More</a>
            </div>
        </div>
    </section>
    <!-------------Blogs-------------------->
    <section class="blogs">
        <h1>Blogs</h1>
        <p>We're here to inspire and empower you with expert advice, product recommendations, and insider tips to help you unleash your inner beauty. </p>
        <div class="row">
            <div class="blogs-col">
                <h3>Haircare</h3>
                <p>Getting your festival look spot on is not easy, especially when it comes to your hair. If you’re camping, without easy access to showers ....  </p>
                <a href="blog.php">
                    <h6>Read more <i class="fa fa-arrow-right"></i></h6>
                </a>
            </div>
            <div class="blogs-col">
                <h3>Skincare</h3>
                <p>I usually want to go all-out on the makeup when it comes to Amber Heard. Her face is a makeup artists dream come true; she looks great in a smokey eye, an intense brow, and a serious lip. Last night, however, she said to me:..... </p>
                <a href="blog.php">
                    <h6>Read more <i class="fa fa-arrow-right"></i></h6>
                </a>
            </div>
            <div class="blogs-col">
                <h3>Hygine</h3>
                <p>The peach makeup trend has been hotting up since 2022, and now that summer 2023 is underway, it’s time to add some extra flavour to your style with some fruity peach....</p>
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
        <p>We are a passionate team of beauty enthusiasts dedicated to celebrating and exploring the world of beauty. Our mission is to inspire and empower individuals to embrace their unique beauty and enhance their self-confidence.</p>
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