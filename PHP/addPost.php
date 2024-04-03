
<!DOCTYPE html>
<html lang="en">
<head> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
</head>
<body>

<?php include_once("path.php"); ?>
<?php
session_start();


  
if(isset($_POST["submit"])) {
    include(ROOT_PATH."connect.php");

    // Validate form data
    $title = $_POST["title"];
    $author = $_POST["author"];
    $content = $_POST["content"];

    if (empty($title) || empty($author) || empty($content)) {
        echo "<script>alert('Please fill in all fields.')</script>";
        exit();
    }

    // Prepare and execute SQL query using prepared statements
    $sqlInsert = "INSERT INTO post (date, title, author, content) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sqlInsert);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $date, $title, $author, $content);
        $date = date("Y/m/d");
        if(mysqli_stmt_execute($stmt)) {
            echo "<script>
Swal.fire({
  title: 'Post Added',
  text: 'Your post has been added successfully',
  icon: 'success',
  confirmButtonText: 'OK'
});
sleep(2);
// Redirect to index.php with viewBlog section scrolled into view
window.location.href = 'index.php#viewBlog';

</script>";
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

