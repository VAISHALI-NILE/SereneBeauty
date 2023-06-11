<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="with=device-width, initial-scale=1.0">
	<title>Serene Beauty | Blogs</title>
	<link rel="stylesheet" type="text/css" href="css/blog_style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="logic.js"></script>
	<style>
		.header-home{
    min-height: 80vh;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/blog-img.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
}
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}
nav img{
    width: 150px;
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 13px;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #b4b0a6 ;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;
}
.text-box{
    width: 90%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.text-box h1{
    font-size: 62px;
    color: #fff;
}
.text-box p{
    margin: 10px 0 40px;
    font-size: 14px;
    color: #fff;
}
.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.hero-btn:hover{
    border: 1px solid #b4b0a6;
    background: #b4b0a6;
    transition: 1s;
}
nav .fa{
    display: none;
}
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
        color: #fff;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
    }
    .nav-links ul{
        padding: 30px ;
    }
}
.footer{
    width: 100%;
    text-align: center;
    padding: 30px 0;
}
.footer h4{
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
.footer a{
    text-decoration: none;
    color: black;
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
		<h1>A Blog that every girl will love</h1>
		<p>Our super helpfull skincare productive post isn't to be missed </p>
	</div>
</section>
<section>
	<div class="container">
		<br><br>
		<div class="col-div-6">
				<div class="box-1">
				<img src="images/skincare.jpg" class="b-img">
				<h3 class="heading1">Skincare</h3>
				<p class="blog-heading">Healthy Skin Healthy you</p>
				<p class="text">The two big lifestyle inputs that i feel make the most difference though are water(suprise,suprise!) and exercise(Shocker!!)</p>
				<p class="text">It participates in making me look healthier </p>
				<span class="name">Neha Shah . MAR 21, 2023</span>
		</div>
			</div>
		<div class="col-div-6">
			<div class="lr-box">
			<div class="col-div-6">
				<h3 class="heading1">haircare</h3>
				<p class="blog-heading-1">Love is in the hair!!</p>
				<p class="text"> Washing every few days is a hard habit to build up to , especially if you have oily hairs</p>
				<span class="name">Jeshtha. SEP 21, 2021</span>
			</div>
			<div class="col-div-6">
				<img src="images/haicare.jpg" class="b-img-1">
			</div>
			<div class="clearfix"></div>
			<hr class="line">
			</div>


			<div class="lr-box">
			<div class="col-div-6">
				<h3 class="heading1"> Nails Anatomy</h3>
				<p class="blog-heading-1">Do you Really know it ? </p>
				<p class="text">Our Nails are often the mirror of the general state of health  </p>
				<span class="name">shreya Singh . Apr 21, 2023</span>
			</div>
			<div class="col-div-6">
				<img src="images/nails-anatomy.jpg" class="b-img-1">
			</div>
			<div class="clearfix"></div>
			<hr class="line">
			</div>

			<div class="lr-box">
			<div class="col-div-6">
				<h3 class="heading1">Manicure and Pedicure</h3>
				<p class="blog-heading-1">Benefits of good manicure and pedicure</p>
				<p class="text">It provides the deep clean to your nails ,as well as insures that they look great</p>
				<span class="name">Divya Singh . Dec 21, 2022</span>
			</div>
			<div class="col-div-6">
				<img src="images/manicure-and-pedicure.jpg" class="b-img-1">
			</div>
			<div class="clearfix"></div>
			<hr class="line">
			</div>

		</div>

		<div class="clearfix"></div>
	</div>
</section>

<br><br>


<section>
	<div class="container" style="text-align:center;">
		<h3>Latest stories</h3>
		<br>
		
		<div class="box-2">
			<img src="images/hair-slugging.jpg" class="b-img-1">
			<h3 class="heading1">Hair Slugging</h3>
				<p class="blog-heading-1">Why is this new Trend And Does It Really Work ??</p>
				<p class="text">The idea behind hair slugging is that the oils will penetrate and deeply moisture your hair while you sleep, giving it the hydration it needsto flourish </p>
				<span class="name">Divya Jain . Jan 21, 2023</span>
		</div>

		<div class="box-2">
			<img src="images/tan-removing.jpg" class="b-img-1">
			<h3 class="heading1">Tan Removing</h3>
				<p class="blog-heading-1">Which Face Pack is best for tan removing </p>
				<p class="text">FCL's De tan Face Mask could be the best choice. It contains milk protein,natural AHA's etc </p>
				<span class="name">Divya Jain . SEP 21, 2021</span>
		</div>

		<div class="box-2">
			<img src="images/spf.jpg" class="b-img-1">
			<h3 class="heading1">Knowing SPF</h3>
				<p class="blog-heading-1"> What is SPF</p>
				<p class="text">Sun protection factor is a term commonly used in the cosmetics industry to describe the level of protection againts the UV radiation </p>
				<span class="name">Neha Shah. SEP 21, 2021</span>
		</div>
		
		<div class="clearfix"></div>

		<div class="box-2">
			<img src="images/natural-hair-care.jpg" class="b-img-1">
			<h3 class="heading1">Natural haircare products</h3>
				<p class="blog-heading-1">This is the ultimate guide to buy natural haircare products</p>
				<p class="text">Depending on the hair type ,you may also need hair products that dekiver moisture and help lock in it . </p>
				<span class="name">vijaya. MAR 1, 2023</span>
		</div>

		<div class="box-2">
			<img src="images/wolf-cut.jpg" class="b-img-1">
			<h3 class="heading1">Wolf cut</h3>
				<p class="blog-heading-1">Why the wolf cut is trending </p>
				<p class="text">This new take on the "business at the front ,party at the back" style </p>
				<span class="name">shraddha chavan . dec 21, 2022</span>
		</div>

		<div class="box-2">
			<img src="images/vitamin-c.jpg" class="b-img-1">
			<h3 class="heading1">Vitamin C</h3>
				<p class="blog-heading-1">Myth or truth</p>
				<p class="text">Vitamin C helps your face look firmer and more alastic is because its necessary componants to create collagen</p>
				<span class="name">jaya wagh . SEP 21, 2022</span>
		</div>

		<div class="clearfix"></div>
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
</html>