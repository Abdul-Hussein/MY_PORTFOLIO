<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>


<?php include_once("path.php"); ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog Page</title>
  <link rel="stylesheet" href="CSS/BlogForm.css">
  <!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--Font awesome -->
<script src="https://kit.fontawesome.com/1d0680ab81.js" crossorigin="anonymous"></script>
  <!-- Link to Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
  <!-- Link to your CSS files -->
  <link rel="stylesheet" href="CSS/BlogPage.css">
  <link rel="stylesheet" href="CSS/reset.css">  
  <link rel="stylesheet" href="CSS/BlogMenuBar.css">

 
</head>
<body>
<?php include(ROOT_PATH . "header.php"); ?>
  
<main>
  
<?php include(ROOT_PATH . "addEntry.php"); ?>


   
<br><br>
<h1> MY FAVORITE POSTS</h1>
<br><br>
    <!-- First Blog Post -->
    <div class="content">
      <div class="post">
        <img src="Project photos/BlogPost1.png" alt="post-image">
        <div class="post-review">
          <h2><a  href="https://netflixtechblog.com/evolving-from-rule-based-classifier-machine-learning-powered-auto-remediation-in-netflix-data-039d5efd115b" >Evolving from Rule-based Classifier</a></h2>
          <p class="post-meta">By BinBing Hou | March 4, 2024</p>
          <p class="preview-text">This is a brief preview of the first post. It summarizes the content and entices readers to click and read more.</p>
          <a href="single.html">Read more</a>
        </div>
      </div>
    </div>
     
    <!-- Second Blog Post -->
    <div class="content">
      <div class="post">
        <img src="Project photos/BlogPost2.png" alt="post-image">
        <div class="post-review">
          <h2><a href="https://www.uber.com/en-GB/blog/building-scalable-real-time-chat/?uclick_id=df7f4c47-850e-48fb-b2e4-8bd559104843">Building Scalable, Real-Time Chat to Improve Customer Experience</a></h2>
          <p class="post-meta">By Avijit Singh | February 20, 2024</p>
          <p class="preview-text">This is a brief preview of the second post. It summarizes the content and entices readers to click and read more.</p>
          <a href="single.html">Read more</a>
        
        </div>
      </div>
    </div>


<br><br>
    <!-- Other Blog Posts -->
    <!--Any one can add this-->

    <h1 >OTHER BLOG POSTS</h1>
    <br><br>
<?php include(ROOT_PATH . "viewBlog.php"); ?>




      
  </main>
        <footer id="foot">
            <p>Copyright  &copy; Abdirahman Hussein</p>
        </footer>

     
</body>
</html>

