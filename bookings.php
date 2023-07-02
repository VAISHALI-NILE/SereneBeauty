<?php
session_start();
if (isset($_GET['book_now'])) {
  $s_id = $_GET['book_now'];
  if( $_SESSION['id']){
    $c_id = $_SESSION['id'];
  }
  else {
    $_SESSION['bk_flag']=1;
    header("location: signup.html");
  }

}

?>
<html>

<head>
  <title>serene Beauty | Bookings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      /* background-image: url(images/login-img.jpg); */
      padding: 20px;
    }

    body {
      min-height: 30vh;
      width: 100%;
      background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(images/readblog-img.jpg);
      background-position: center;
      background-size: cover;
      position: relative;
      margin: 0px;
      padding: 0px;
    }

    h1 {
      color: #333;
      text-align: center;
    }

    .booking-form {
      max-width: 500px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      opacity: 0.9;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-size: 16px;
      font-weight: 500;
      margin-bottom: 5px;
      color: #333;
    }

    input[type="text"],
    input[type="name"],
    input[type="date"],
    select {
      border: none;
      border-bottom: 2px solid black;
      box-sizing: border-box;
      display: block;
      margin-bottom: 20px;
      padding: 10px;
      width: 100%;
      font-size: 16px;
      font-weight: 500;
      background-color: white;
      color: #333;
    }

    input[type="submit"] {
      background-color: black;
      border: none;
      border-radius: 50px;
      color: #fff;
      cursor: pointer;
      font-size: 16px;
      font-weight: 500;
      padding: 10px;
      width: 100%;
      opacity: 1;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }

    .time-slots {
      display: flex;
      justify-content: space-between;
    }

    .time-slot {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      cursor: pointer;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 10px;
      transition: all 0.3s ease;
      margin: 4px;
    }

    .time-slot:hover {
      background-color: #ecd0cc;
      border-color: #ecd0cc;
    }

    .time-slot.selected {
      background-color: #333;
      color: #fff;
      border-color: #333;
    }

    h1 {
      color: white;
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
      color: white;
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
      color: #fff;
      border: 1px solid #fff;
      padding: 12px 34px;
      font-size: 13px;
      background: transparent;
      position: relative;
      cursor: pointer;
    }

    .hero-btn:hover {
      border: 1px solid #b4b0a6;
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
  </section>
  <h1>Booking Page</h1>
  <?php
$conn = new mysqli("localhost:3307", "root", "", "serenebeauty") or die("Connect failed: %s\n" . $conn->error);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve booked time slots for the selected date
$bookedSlots = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    $sql = "SELECT time FROM bookings WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $bookedSlots[] = $row['time'];
        }
    }
}

// Display the form with available time slots for the selected date
echo '<div class="booking-form">
  <form id="bookingForm" action="" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" onchange="getAvailableTimeSlots()" required>
    </div>

    <select name="time" placeholder="Time slot" required id="timeSlots" disabled>
      <option value="" disabled selected>Select Date First</option>
    </select>

    <div class="form-group">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</div>';

echo '<script>
function getAvailableTimeSlots() {
  var dateInput = document.getElementById("date");
  var selectedDate = dateInput.value;

  if (selectedDate !== "") {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var timeSlots = JSON.parse(this.responseText);
        var timeSelect = document.getElementById("timeSlots");
        timeSelect.innerHTML = "<option value=\'\' disabled selected>Select Time</option>";

        if (timeSlots.length > 0) {
          for (var i = 0; i < timeSlots.length; i++) {
            var option = document.createElement("option");
            option.value = timeSlots[i];
            option.text = timeSlots[i] ;
            timeSelect.appendChild(option);
          }
          timeSelect.disabled = false;
        } else {
          var option = document.createElement("option");
          option.value = "";
          option.disabled = true;
          option.text = "No available time slots";
          timeSelect.appendChild(option);
          timeSelect.disabled = true;
        }
      }
    };
    xhttp.open("GET", "getAvailableTimeSlots.php?date=" + selectedDate, true);
    xhttp.send();
  }
}
</script>';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $selectedDate = $_POST['date'];
    $selectedTime = $_POST['time'];

    if (!empty($selectedDate) && !empty($selectedTime)) {
        // Insert the booking into the database
        $sql = "INSERT INTO bookings (name, c_id, s_id, date, time) VALUES ('$name', $i, $s_id, '$selectedDate', '$selectedTime')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Booking successful");</script>';
        } else {
            echo '<script>alert("Booking unsuccessful");</script>';
        }
    }
}

$conn->close();
?>


</body>

</html>