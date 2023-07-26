<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['submit'])) {
    $service_name = $_POST['service_name'];
    $service_description = $_POST['service_description'];
    $service_cost = $_POST['service_cost'];
    $service_type = $_POST['service_type'];

    $conn = new mysqli("sql100.infinityfree.com", "if0_34678114", "943Uw88q1QdrSMC","if0_34678114_serenebeauty") or die("Connect failed: %s\n" . $conn->error);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // Prepare and execute the SQL query to insert service data into the database
    $stmt = $conn->query("INSERT INTO service (name, description, cost, type) VALUES ('$service_name', '$service_description', $service_cost, '$service_type')");
    if (!$stmt) {
      die("Error in preparing statement: " . $conn->error);
    }
    $serviceId = $conn->insert_id; // Retrieve the ID of the inserted service

    // Process and insert the image data into the database
    if (isset($_FILES['service_image']) && $_FILES['service_image']['error'] === UPLOAD_ERR_OK) {
      $tempFile = $_FILES['service_image']['tmp_name'];
      $imageData = file_get_contents($tempFile);
      $imageData = base64_encode($imageData);
      $imageData = mysqli_real_escape_string($conn, $imageData);

      $stmt = $conn->query("UPDATE service SET img = '$imageData' WHERE s_id = $serviceId");
      if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
      }
    }
    $_SESSION['service_added'] = true;
    $conn->close();

    header("Location: ad_services.php");

    // Check if the service was added successfully
    if (isset($_SESSION['service_added'])): ?>
    <script>
      alert("Service added successfully");
    </script>
      <?php unset($_SESSION['service_added']); // Reset the session variable ?>
    <?php endif;
    exit();
  }
}
?>




<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="./images/site_icon.png" type="image/x-icon" />
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
      overflow-x: hidden;
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
      <h2 id="h">SERVICES</h2>
      <br>
      <!-- Add Service Form -->

      <form id="add-service-form" action="" method="post" enctype="multipart/form-data">
        <h3>Add Service</h3>
        <input type="text" name="service_name" placeholder="Service Name" required>
        <input type="text" name="service_description" placeholder="Service Description" required>
        <input type="text" name="service_cost" placeholder="Service Cost" required>
        <select name="service_type" placeholder="Service Type" required>
          <option value="" disabled selected>Select Type</option>
          <option value="hair">Hair</option>
          <option value="skin">skin</option>
          <option value="makeup">Makeup</option>
          <option value="special">Special</option>
        </select>
        <input type="file" id="service_image" name="service_image" accept="image/*" required>
        <p style="color:red">*jpeg images only*</p><br>
        <button type="submit" name="submit">Add Service</button>
      </form>

      <br><br><br>
  </section>
  <!-- ==========================adding services=================================== -->

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
      <?php
      $conn = new mysqli("sql100.infinityfree.com", "if0_34678114", "943Uw88q1QdrSMC","if0_34678114_serenebeauty") or die("Connect failed: %s\n" . $conn->error);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
        $delete_id = $_POST['delete_id'];
        $sql_delete = "DELETE FROM service WHERE s_id = '$delete_id'";
        if ($conn->query($sql_delete) === TRUE) {
          header("Location: ad_services.php");
          echo "Row deleted successfully.";
        } else {
          echo "Error deleting row: " . $conn->error;
        }
      }

      $sql2 = "SELECT * FROM service";
      $result = $conn->query($sql2);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $s_id = $row['s_id'];
          $name = $row['name'];
          $cost = $row['cost'];
          $dis = $row['description'];
          $ty = $row['type'];
          echo '<tr>
            <td class="ser-name">', $name, '</td>
            <td>', $dis, '</td>
            <td>', $cost, '</td>
            <td>', $ty, '</td>
            <td>
                <form method="POST" action="">
                    <input type="hidden" name="delete_id" value="' . $s_id . '">
                    <button type="submit" class="delete-button">Delete</button>
                </form>
            </td>
            </tr>';
        }
      }
      ?>
    </tbody>
  </table>



  <div id="service-details-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 id="ser-name"></h2>
      <p id="discription"></p>
    </div>
  </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Get the modal element
      var modal = document.getElementById("service-details-modal");

      // Get the <span> element that closes the modal
      var closeBtn = document.getElementsByClassName("close")[0];

      // Function to open the modal and display service details
      function openModal(serviceName, serviceDescription) {
        var serviceNameElement = document.getElementById("ser-name");
        var serviceDescriptionElement = document.getElementById("discription");

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
          var serviceDescription = this.parentNode.querySelector("td:nth-child(2)").textContent; // Get the service description
          openModal(serviceName, serviceDescription);
        });
      }

      // Event listener to close the modal when clicking on the close button
      closeBtn.addEventListener("click", closeModal);
    });




  </script>
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