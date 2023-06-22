<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $title = $_POST['blog_title'];
        $author = $_POST['blog_author'];
        $date = $_POST['blog_date'];
        $content = $_POST['blog_content'];
        $name = $_POST['blog_name'];

        $conn = new mysqli("localhost:3307", "root", "", "serenebeauty") or die("Connect failed: %s\n" . $conn->error);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL query to insert other data into the database
        $stmt = $conn->prepare("INSERT INTO blogs (title, author, date, content, bl_name) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $title, $author, $date, $content, $name);
        $stmt->execute();

        $blogId = $stmt->insert_id; // Retrieve the ID of the inserted blog

        // Process and insert the image data into the database
        $imageColumns = ['blog_image1', 'blog_image2', 'blog_image3'];
        foreach ($imageColumns as $imageColumn) {
            if (isset($_FILES[$imageColumn]) && $_FILES[$imageColumn]['error'] === UPLOAD_ERR_OK) {
                $tempFile = $_FILES[$imageColumn]['tmp_name'];
                $imageData = file_get_contents($tempFile);
                $imageData = base64_encode($imageData);
                $stmt = $conn->prepare("UPDATE blogs SET $imageColumn = ? WHERE bl_id = ?");
                
                $stmt->bind_param("si", $imageData, $blogId);
                $stmt->execute();
            }
        }

        $stmt->close();
        $conn->close();

        header("Location: ad_blog.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewpoint" content="with=device-width, initial-scale=1.0">
    <title>Serene Beauty | Admin-Blogs </title>
    <link rel="stylesheet" href="css\a_blog.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
        <script src="logic.js"></script> -->
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

        <!-- <div class="admin-panel"> -->
        <h2>BLOGS</h2>
        <br>
        <!-- Add Blog Form -->
        <form id="add-blog-form" action="" method="post" enctype="multipart/form-data">
            <h3>Add Blog</h3>
            <input type="text" name="blog_name" placeholder="Blog name" required>
            <input type="text" name="blog_title" placeholder="Blog Title" required>
            <input type="text" name="blog_author" placeholder="Blog Author" required>
            <input type="date" name="blog_date" class="date-input" placeholder="Blog Date" required>
            <textarea name="blog_content" placeholder="Blog Content" required></textarea>
            <input type="file" name="blog_image1" accept="image/*">
            <input type="file" name="blog_image2" accept="image/*">
            <input type="file" name="blog_image3" accept="image/*">
            <button type="submit" name="submit">Add Blog</button>
        </form>
        <br><br><br>
        <!-- Blog Table -->
        </div>
    </section>
    <table id="blog-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Rows will be dynamically added/updated via JavaScript -->
            <?php
            $conn = new mysqli("localhost:3307", "root", "", "serenebeauty") or die("Connect failed: %s\n" . $conn->error);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
                $delete_id = $_POST['delete_id'];
                $sql_delete = "DELETE FROM blogs WHERE bl_id = '$delete_id'";
                if ($conn->query($sql_delete) === TRUE) {
                    header("Location: ad_blog.php");
                    echo "Row deleted successfully.";
                } else {
                    echo "Error deleting row: " . $conn->error;
                }
            }

            $sql2 = "SELECT * FROM blogs";
            $result = $conn->query($sql2);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['bl_id'];
                    $name = $row['bl_name'];
                    $title = $row['title'];
                    $author = $row['author'];
                    $date = $row['date'];
                    echo '<tr>
            <td>', $name, '</td>
            <td class="blog-name">', $title, '</td>
            <td>', $author, '</td>
            <td>', $date, '</td>
            <td>
                <form class="btn-form" method="POST" action="">
                    <input type="hidden" class="delete-button" name="delete_id" value="' . $id . '">
                    
                  <button type="submit" class="delete-button">Delete</button>
                  </form>
                  <br>
                  <form class="btn-form" method="GET" action="readblog.php">
                    <input type="hidden" name="bl_id" value="' . $row['bl_id'] . '">
                    <button type="submit" class="preview-button">Preview</button>
                </form>
            </td>
            </tr>';
                }
            }
            ?>
        </tbody>


        </tbody>
    </table>
</body>

</html>