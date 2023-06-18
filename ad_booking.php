<!DOCTYPE html>
<html>

<head>
  <meta name="viewpoint" content="with=device-width, initial-scale=1.0">
  <title>Serene Beauty | Admin-Services </title>
  <link rel="stylesheet" href="css\a_booking.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <script src="logic.js"></script>
  <style>
        .header-home {
            min-height: 100vh;
            width: 101%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(images/ad_ser.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
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
          <li><a href="ad_services.php">SERVICES</a></li>
          <li><a href="ad_blog.php">BLOGS</a></li>
          <li><a href="ad_booking.php">BOOKINGS</a></li>
          <?php
          session_start();
          if ($_SESSION['flag'] === 0) {
            echo "<li><a href='signUp.html'>SIGN UP</a></li>";
            echo "<li><a href='login.html'>LOG IN</a></li>";
          } else {
            echo "<li><a href='user_pannel.php'>USER</a></li>";
          }
          ?>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

  <h1>BOOKINGS</h1>

  <div class="container">
    <div class="menu">
      <ul>
        <li><a class="active" href="#" id="previous-btn">Previous Bookings</a></li>
        <li><a href="#" id="upcoming-btn">Upcoming Bookings</a></li>
      </ul>
    </div>
    <div id="user-details-modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>User Details</h2>
        <p id="user-name"></p>
        <p id="user-email"></p>
        <!-- Add more user details as needed -->
      </div>
    </div>
    <div id="previous-bookings">
      <h4>Previous Bookings</h4>
      <table>
        <tr>
          <th>Date</th>
          <th>Time</th>
          <th>Customer Name</th>
          <th>Service</th>
          <th>Status</th>

        </tr>
        <tr>
          <td>June 10, 2023</td>
          <td>10:00 AM</td>
          <td class="user-name">John Doe</td>
          <td>Haircut</td>
          <td>Completed</td>

        </tr>
        <tr>
          <td>June 15, 2023</td>
          <td>2:30 PM</td>
          <td class="user-name">Jane Smith</td>
          <td>Manicure</td>
          <td>Completed</td>

        </tr>
        <!-- Add more rows for previous bookings here -->
      </table>
    </div>

    <div id="upcoming-bookings" style="display: none;">
      <h4>Upcoming Bookings</h4>
      <table>
        <tr>
          <th>Date</th>
          <th>Time</th>
          <th>Customer Name</th>
          <th>Service</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>June 20, 2023</td>
          <td>9:30 AM</td>
          <td class="user-name">Michael Johnson</td>
          <td>Facial</td>
          <td>Pending</td>
          <td><button class="cancel-button">Cancel</button> <button class="confirm-button">Confirm</button></td>
        </tr>
        <tr>
          <td>June 25, 2023</td>
          <td>3:00 PM</td>
          <td class="user-name">Sarah Williams</td>
          <td>Pedicure</td>
          <td>Pending</td>
          <td><button class="cancel-button">Cancel</button> <button class="confirm-button">Confirm</button></td>
        </tr>
        <!-- Add more rows for upcoming bookings here -->
      </table>
    </div>
  </div>
  </section>
  <script>
    // JavaScript code for switching between previous and upcoming bookings
    var previousBtn = document.getElementById("previous-btn");
    var upcomingBtn = document.getElementById("upcoming-btn");
    var previousBookings = document.getElementById("previous-bookings");
    var upcomingBookings = document.getElementById("upcoming-bookings");

    previousBtn.addEventListener("click", function () {
      previousBtn.classList.add("active");
      upcomingBtn.classList.remove("active");
      previousBookings.style.display = "block";
      upcomingBookings.style.display = "none";
    });

    upcomingBtn.addEventListener("click", function () {
      upcomingBtn.classList.add("active");
      previousBtn.classList.remove("active");
      previousBookings.style.display = "none";
      upcomingBookings.style.display = "block";
    });

    // JavaScript code for canceling bookings
    var cancelButtons = document.getElementsByClassName("cancel-button");
    for (var i = 0; i < cancelButtons.length; i++) {
      cancelButtons[i].addEventListener("click", function () {
        // Perform cancellation logic here
        var row = this.parentNode.parentNode;
        row.parentNode.removeChild(row);
      });
    }
    // Add this JavaScript code for dialog box

    // Get the modal element
    var modal = document.getElementById("user-details-modal");

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName("close")[0];

    // Function to open the modal and display user details
    function openModal(userName, userEmail) {
      var userNameElement = document.getElementById("user-name");
      var userEmailElement = document.getElementById("user-email");

      userNameElement.textContent = "Name: " + userName;
      userEmailElement.textContent = "Email: " + userEmail;

      modal.style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
      modal.style.display = "none";
    }

    // Get all the user name elements
    var userNames = document.getElementsByClassName("user-name");

    // Loop through the user name elements and add click event listeners
    for (var i = 0; i < userNames.length; i++) {
      userNames[i].addEventListener("click", function () {
        var userName = this.textContent.trim(); // Get the user name
        var userEmail = this.dataset.email; // Get the user email from the data-email attribute
        openModal(userName, userEmail);
      });
    }


    closeBtn.addEventListener("click", closeModal);


  </script>
</body>

</html>