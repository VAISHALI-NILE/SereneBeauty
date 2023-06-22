<?php 
if (isset($_POST['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: index2.php"); // Redirect the user to the desired page after logout
    exit();
}
?>
<html>
<head>
  <title>User Info Page</title>
  <link rel="stylesheet" href="css/user_style.css">
  <script>
  function toggleSection(sectionId) {
    var sections = document.getElementsByClassName("content-section");
    for (var i = 0; i < sections.length; i++) {
      sections[i].style.display = "none";
    }
    var section = document.getElementById(sectionId);
    section.style.display = "block";
  }

  // Display the first section by default
  toggleSection('edit-details');
</script>
</head>
<body>
<style>
.header-home{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/user-img-bg.jpg); 
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
    color: white;
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
<!-- ==================fetching data from db=========================== -->
<?php


session_start();
$id = $_SESSION['id'];
$conn = new mysqli("localhost:3307", "root", "", "serenebeauty") or die("Connect failed: %s\n". $conn -> error);
$sql = "SELECT  f_name,l_name,email,mob_no,city,area FROM customer WHERE id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $fname = $row['f_name'];
  $lname = $row['l_name'];
  $email = $row['email'];
  $mob_no = $row['mob_no'];
  $city = $row['city'];
  $area = $row['area'];
} else {
  echo "0 results";
}

if (isset($_POST['submit']))
{
	$id = $_SESSION['id'];
  $conn = new mysqli("localhost:3307", "root", "","serenebeauty") or die("Connect failed: %s\n". $conn -> error);
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$f_name = $_POST["fname"];
	$l_name = $_POST["lname"];
	$email = $_POST["email"];
	$mob_no = $_POST["phone"];
	$city = $_POST["city"];
	$area = $_POST["area"];
	
	$sql = "UPDATE customer SET f_name='$f_name',l_name='$l_name',email='$email',city='$city',area='$area',mob_no=$mob_no WHERE id = $id";
	$r = $conn->query($sql);
	if ($result->num_rows > 0) {
		
	}
   }
}
if (isset($_POST['logout2'])) {
    session_destroy(); // Destroy the session
    header("Location: start.php"); // Redirect the user to the desired page after logout
    exit();
}
?>
<!-- ==========================header======================================== -->
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
                                echo "<li><a href='ad_services.php'>Admin</a></li>"; 
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

  <!-- =================================side menu============================ -->
  <div class="container">
    <div class="menu">
      <ul>
        <li><a href="javascript:void(0);" onclick="toggleSection('edit-details')">Edit User Details</a></li>
        <li><a href="javascript:void(0);" onclick="toggleSection('upcoming-bookings')">Upcoming Bookings</a></li>
        <li><a href="javascript:void(0);" onclick="toggleSection('previous-bookings')">Previous Bookings</a></li>
        <!-- <li><a href="javascript:void(0);" onclick="toggleSection('change-password')">Change Password</a></li> -->
		<li>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <button type="submit" class="logout-btn2" name="logout2">Log Out</button>
          </form>
        </li>
      </ul>
    </div>
<!-- ===========================================user details section=========================================== -->
  <div class="content">
	<section id="edit-details" class="content-section">
	  <h2>Edit User Details</h2>
	  
	  <br>
	  <br>
	  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div style="display: flex;">
		  <div style="flex: 1;">
			<label for="fname">First Name:</label>
			<input type="text" id="t" name="fname" value=<?php echo $fname?>>
		  </div>
		  <div style="flex: 1;">
			<label for="lname">Last Name:</label>
			<input type="text" id="t" name="lname" value=<?php echo $lname?>>
		  </div>
		</div>
		<br>
		<div style="display: flex;">
			<div style="flex: 1;">
				<label for="email">Email:</label>
				<input type="text" id="tl" name="email" value=<?php echo $email?>>
			</div>
			<div style="flex: 1;">
				<label for="city">City:</label>
				<input type="text" id="t" name="city" value=<?php echo $city?>>
			</div>
		</div>
		<br>
		<div style="display: flex;">
		<div style="flex: 1;">
			<label for="area">Area:</label>
			<input type="text" id="t" name="area" value=<?php echo $area?>>
		</div>
		<div style="flex: 1;">
			<label for="phone">Phone No:</label>
			<input type="text" id="tl" name="phone" value=<?php echo $mob_no?>>
		</div>
		</div>


		<br>
		<button type="submit" class="btn" id="edituser" name="submit">Save</button>
	  </form>
<!-- ===============================update user details====================================== -->
	  <?php
	  


	  ?>
	</section>
<!-- ============================================previous bookings=================================================== -->
	<section id="previous-bookings" class="content-section" style="display: none;">
	  <h2>Previous Bookings</h2>
	  <br>
	  <br>
	  <div class="booking-list">
		<div class="booking-item">
			<h3>Haircut </h3><br>
			<table>
			  <tr>
				  <td><b>June 5, 2023</b> 03:15 PM </td>
				  <td id="money"> 190RS</td>
			  </tr>
			</table>

		 Completed
		</div>
		<div class="booking-item">
			<h3>Haircut </h3><br>
			<table>
			  <tr>
				  <td><b>June 5, 2023</b> 03:15 PM </td>
				  <td id="money"> 190RS</td>
			  </tr>
			</table>

		 Completed
		</div>
	  </div>
	</section>
<!-- ===================================upcoming bookings ======================================================= -->
	<section id="upcoming-bookings" class="content-section" style="display: none;">
	  <h2>Upcoming Bookings</h2>
	  <br>
	  <br>
	  <div class="booking-list">
	  <?php


$id = $_SESSION['id'];
$conn = new mysqli("localhost:3307", "root", "", "serenebeauty") or die("Connect failed: %s\n" . $conn->error);


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['booking_id'])) {
    $bookingId = $_POST['booking_id'];

    // Delete the booking from the database
    $deleteSql = "DELETE FROM bookings WHERE b_id ='$bookingId'";

    if ($conn->query($deleteSql) === TRUE) {
       // echo "Booking canceled successfully.",$bookingId;
    } else {
       // echo "Error canceling the booking: " . $conn->error;
    }
}
$sql = "SELECT * FROM bookings WHERE c_id = $id";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $s_id = $row['s_id'];
        $date = $row['date'];
        $time = $row['time'];
		$bookingID = $row['b_id'];

        $sql2 = "SELECT * FROM service WHERE s_id = $s_id";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();

        $cost = $row2['cost'];
        $name = $row2['name'];

        echo '<div class="booking-item">
        <h3>' . $name . '</h3><br>
        <table>
          <tr>
              <td><b>' . $date . '</b> ' . $time . ' </td>
              <td id="money"> ' . $cost . 'RS</td>
          </tr>
        </table>

      </div>';
// 	  <form method="post" action="">
// 	  <input type="hidden" name="booking_id" value="<?php echo $bookingId; ?">
// 	  <button type="submit" class="btn cancel-btn">Cancel</button>
//   </form>
    }
}
?>

<!-- =============================================chnage password======================================= -->
	  
<section id="change-password" class="content-section" style="display: none;">
    <h2>Change Password</h2>
    <br>
    <br>
    <form>
      <label for="current-password">Current Password:</label>
      <input type="password" id="current-password" name="current-password">
      <br>
      <label for="new-password">New Password:</label>
      <input type="password" id="new-password" name="new-password">
      <br>
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password">
      <br>
      <br>
      <input type="submit" class="btn" value="Change Password">
    </form>
  </section>
</div>
<!-- =============================logout=================================== -->
<section id="logout" class="content-section" style="display: none;">
  <h2>Log Out</h2>
  <br>
  <br>
  <form method="post">
    <input type="submit" class="btn" name="logout" value="Log Out">
  </form>
</section>

</body>
</html>