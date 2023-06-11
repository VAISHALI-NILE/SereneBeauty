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
    </head>
    <body>
        <section class="header-home">
            <nav>
                <a href="index2.php"><img src="images/logo-black.png" alt=""></a>
                <div class="nav-links" id="navlinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="ad_services.php">SERVICES</a></li>
                        <li><a href="ad_blog.php">BLOGS</a></li>
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
        </section>
<div class="admin-panel">
    <h2>Service Management</h2>

    <!-- Add Service Form -->
    <form id="add-service-form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Add Service</h3>
        <input type="text" name="service_name" placeholder="Service Name" required>
        <input type="text" name="service_description" placeholder="Service Description" required>
        <input type="text" name="service_cost" placeholder="Service Cost" required>
        <input type="text" name="service_type" placeholder="Service Type" required>
        <button type="submit">Add Service</button>
    </form>
<!-- ==========================adding services=================================== -->
<?php 
$conn = new mysqli("localhost:3307", "root", "","serenebeauty") or die("Connect failed: %s\n". $conn -> error);
if(isset($_POST['submit'])){


$name = $_POST["service_name"];
$description = $_POST["service_description"];
$cost = $_POST["service_cost"];
$type = $_POST["service_type"];


$sql = "INSERT INTO service (name,description,cost,type) 
VALUES('$name','$description',$cost,'$type')";


if ($conn->query($sql) === TRUE) 
{
  echo "<h1>New record created successfully</h1>";
} 

}


?>
    <!-- Service Table -->
    <table id="service-table">
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Rows will be dynamically added/updated via JavaScript -->
        </tbody>
    </table>
</div>
