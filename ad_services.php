<!DOCTYPE html>
<html>

<head>
  <meta name="viewpoint" content="with=device-width, initial-scale=1.0">
  <title>Serene Beauty | Admin-Services </title>
  <link rel="stylesheet" href="css\a_services.css">
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

    <div class="admin-panel">
      <h2>SERVICES</h2>
      <br>
      <!-- Add Service Form -->
      <form id="add-service-form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Add Service</h3>
        <input type="text" name="service_name" placeholder="Service Name" required>
        <input type="text" name="service_description" placeholder="Service Description" required>
        <input type="text" name="service_cost" placeholder="Service Cost" required>
        <input type="text" name="service_type" placeholder="Service Type" required>
        <input type="file" id="blog_image" name="blog_image" accept="image/*" required>
        <button type="submit">Add Service</button>
      </form>
      <br><br><br>
  </section>
  <!-- ==========================adding services=================================== -->
  <?php
  $conn = $_SESSION['conn'];
  if (isset($_POST['submit'])) {


    $name = $_POST["service_name"];
    $description = $_POST["service_description"];
    $cost = $_POST["service_cost"];
    $type = $_POST["service_type"];


    $sql = "INSERT INTO service (name,description,cost,type) 
VALUES('$name','$description',$cost,'$type')";


    if ($conn->query($sql) === TRUE) {
      echo "<h1>New record created successfully</h1>";
    }

  }


  ?>
  <!-- </div> -->
  <!-- Service Table -->

  <table id="service-table">
    <thead>
      <tr>
        <th>Service Name</th>
        <th>Description</th>
        <th>Cost</th>
        <th>Type</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Rows will be dynamically added/updated via db -->
      <tr>
        <td class="ser-name">Wolfcut</td>
        <td>dvcsvcsdhvcsdmcbsdncbnmc</td>
        <td></td>
        <td></td>
        <td><button class="delete-button">Delete</button> </td>

      </tr>
      <tr>
        <td class="ser-name">Wolfcut</td>
        <td>dvcsvcsdhvcsdmcbsdncbnmc</td>
        <td></td>
        <td></td>
        <td><button class="delete-button">Delete</button> </td>

      </tr>
    </tbody>
  </table>


  <div id="service-details-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 id="ser-name"></h2>
      <p id="user-email"></p>
    </div>
  </div>
  </div>

  <script>
    // Get the modal element
    var modal = document.getElementById("service-details-modal");

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName("close")[0];

    // Function to open the modal and display service details
    function openModal(serviceName, serviceDescription) {
      var serviceNameElement = document.getElementById("ser-name");
      var serviceDescriptionElement = document.getElementById("user-email");

      serviceNameElement.textContent = "Service Name: " + serviceName;
      serviceDescriptionElement.textContent = "Service Description: " + serviceDescription;

      modal.style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
      modal.style.display = "none";
    }

    // Get all the service name elements
    var serviceNames = document.getElementsByClassName("ser-name");

    // Loop through the service name elements and add click event listeners
    for (var i = 0; i < serviceNames.length; i++) {
      serviceNames[i].addEventListener("click", function () {
        var serviceName = this.textContent.trim(); // Get the service name
        var serviceDescription = this.nextElementSibling.textContent; // Get the service description
        openModal(serviceName, serviceDescription);
      });
    }

    // Event listener to close the modal when clicking on the close button
    closeBtn.addEventListener("click", closeModal);
  </script>
</body>

</html>