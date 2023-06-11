<!DOCTYPE html>
<html>
    <head>
        <meta name="viewpoint" content="with=device-width, initial-scale=1.0">
        <title>Serene Beauty | Admin-Blogs </title>
        <link rel="stylesheet" href="css\a_blog.css">
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
    <h2>Blog Management</h2>

    <!-- Add Blog Form -->
    <form id="add-blog-form">
        <h3>Add Blog</h3>
        <input type="text" name="blog_title" placeholder="Blog Title" required>
        <textarea name="blog_content" placeholder="Blog Content" required></textarea>
        <input type="file" name="blog_image" accept="image/*" required>
        <button type="submit">Add Blog</button>
    </form>

    <!-- Blog Table -->
    <table id="blog-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Rows will be dynamically added/updated via JavaScript -->
           
        </tbody>
    </table>
</div>

