<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="with=device-width, initial-scale=1.0">
	<title>Serene Beauty | Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/contact_style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="logic.js"></script>
	<style>
		.header-home{
    min-height: 50vh;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/contactus-img.jpg);
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
		<a href="index2.php"><img src="images/logo-white.png" alt=""></a>
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
		<h1>Contact Us</h1>
		<p></p>
	</div>
</section>
     <section class="contact">
     	<div class="content">
     		<h2>Let's Start a Conversation</h2>
     		<p>If you have any queries,you can send me message from here.
				It's my pleasure to help you.</p>
     	</div>
     	<div class="container">
     		<div class="contactInfo">
     			<div class="box">
     				<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
     				</div>
     				<div class="text">
     					<h3>Address</h3>
     					<p>Near Shri Gajanan Maharaj Mandir,
						   Chhatrapati Sambhajinagar,
                           431009</p>
     				</div>
     			</div>
     				<div class="box">
     				<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
     				</div>
     				<div class="text">
     					<h3>Phone</h3>
     					<p>987-765-5432</p>
     				</div>
     			</div>
                 	<div class="box">
     				<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
     				</div>
     				<div class="text">
     					<h3>Email</h3>
     					<p>abc@gmail.com</p>
     				</div>
     			</div>
     		</div>
            <div class="contactForm">
     			<form>
     				<h2>Send Message</h2>
     				<div class="inputBox">
     					<input type="text" name="" required="required">
     					<span>Full Name</span>
     				</div>
     				<div class="inputBox">
     					<input type="text" name="" required="required">
     					<span>Email</span>
     				</div>
     				<div class="inputBox">
     					<textarea required="required"></textarea>
     					<span>Type your Message...</span>
     				</div>
     				<div class="inputBox">
     					<input type="submit" name="" value="Send">	
     				</div>
     			</form>
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
</html>