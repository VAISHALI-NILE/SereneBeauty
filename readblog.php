<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Reading Page</title>
    <link rel="stylesheet" href="css/readblog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<style>
        .header-home {
            min-height: 30vh;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(images/readblog-img.jpg);
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
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    <section class="blog-content">
        <div class="container">
            <h1 class="blog-title">Healthy Skin Healthy you</h1>
            <div class="blog-meta">
                <span class="author">By Shraddha Chavan</span>
                <span class="date">June 18, 2023</span>
            </div>
            <div class="blog-images">
                <img src="images/b1.jpg" alt="Image 1">

            </div>
            <div class="blog-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia tellus velit, id finibus turpis rhoncus ac. Nullam scelerisque, elit vitae fermentum fermentum, eros tellus feugiat est, vel dignissim mi libero sed nisi. Fusce auctor, felis a ultrices cursus, lectus ipsum efficitur risus, in posuere dolor neque ut mi. Quisque in lectus sed nisi auctor tincidunt. Integer interdum aliquet purus, in aliquet lorem malesuada sed. Nullam sit amet posuere ligula. Vestibulum vitae tellus leo. Nulla facilisi. Ut gravida, est id ultricies pulvinar, velit lorem tempus ipsum, non finibus velit elit a orci.</p>
                <img src="images/b2.jpg" alt="Image 2">
                <p>Suspendisse sagittis ullamcorper efficitur. Curabitur nec semper tellus, nec vulputate velit. Vestibulum aliquam enim tellus, et condimentum tortor hendrerit vitae. Nam scelerisque libero ut est congue lobortis. Aenean ut convallis nunc, vel ullamcorper lectus. Mauris volutpat justo vel enim ullamcorper, a ultricies nibh viverra. Integer interdum semper tortor sed pharetra.</p> 
                <img src="images/b3.jpg" alt="Image 3">
                <p>In efficitur, ex sit amet fermentum egestas, mi neque finibus tellus, eu sagittis sem risus nec nibh. Sed et auctor nunc. Vestibulum id lorem eget risus aliquam elementum. Mauris ac condimentum massa. Nulla tincidunt gravida bibendum. Aliquam iaculis neque sed turpis scelerisque, non venenatis turpis faucibus. Sed tincidunt efficitur lacus non ullamcorper.</p>
            </div>
        </div>
    </section>
<hr>
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