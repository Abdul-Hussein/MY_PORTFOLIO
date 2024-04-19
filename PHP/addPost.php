<!DOCTYPE html>
<html lang="en">
<head> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="JS/BlogPage.js"> <!-- Link to your JS file -->
</head>
<body>

<?php include_once("path.php"); ?>
<?php
session_start();

if(isset($_POST["preview"])) {
    // Gather form data for preview
     $title = isset($_POST["title"]) ? $_POST["title"] : '';
    $author = isset($_POST["author"]) ? $_POST["author"] : '';
    $content = isset($_POST["content"]) ? $_POST["content"] : '';

    // Prepare data for preview display (e.g., store in session or pass through URL)
    $_SESSION['preview_data'] = array(
        'title' => $title,
        'author' => $author,
        'content' => $content
    );

    // Redirect to a preview page
    header("Location: preview.php");
    exit();
}

  
if(isset($_POST["submit"])) {
    include(ROOT_PATH."connect.php");
    // Validate form data
    $title = isset($_POST["title"]) ? $_POST["title"] : '';
    $author = isset($_POST["author"]) ? $_POST["author"] : '';
    $content = isset($_POST["content"]) ? $_POST["content"] : '';

    if (empty($title) || empty($author) || empty($content)) {
        echo "<script>alert('Please fill in all fields.')</script>";
        include_once("index.php"); 
        exit();      
    }

    // Prepare and execute SQL query using prepared statements
    $sqlInsert = "INSERT INTO post (date,time, title, author, content) VALUES (?,?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sqlInsert);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $date, $time, $title, $author, $content);
        $date = date("Y/m/d");
        $time = date("h:i:sa");
        if(mysqli_stmt_execute($stmt)) {
         
echo "<script>
    Swal.fire({
        title: 'Post Added',
        text: 'Your post has been added successfully',
        icon: 'success',
        confirmButtonText: 'OK'
    });

    // Delay the redirection for 2 seconds (2000 milliseconds)
    setTimeout(function() {
        // Redirect to index.php
        window.location.href = 'index.php';
    }, 2000); // 2000 milliseconds = 2 seconds

    // Scroll to the desired section after the page loads
    window.addEventListener('DOMContentLoaded', function() {
        // Scroll to the element with id 'view_' (your desired section)
        var section = document.getElementById('view_');
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
";
        } else {
            echo "<script>alert('Error: Unable to add post.')</script>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Error: Unable to prepare statement.')</script>";
    }

    mysqli_close($conn);
}


?>




