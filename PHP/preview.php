<?php
session_start();
$previewData = isset($_SESSION['preview_data']) ? $_SESSION['preview_data'] : null;
if(!$previewData) {
    // Redirect if no preview data is available
    header("Location: addpost.php"); // Redirect to your addpost page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
    <link rel="stylesheet" href="CSS/BlogPage.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="post-add">
        <h2 class="title"><?php echo $previewData['title']; ?></h2>
        <p class="post-meta">By <?php echo $previewData['author']; ?></p>
        <p class="content"><?php echo $previewData['content']; ?></p>
    </div>
    <form method="post" action="addpost.php"> <!-- Form action points back to the addpost page -->
           <button type="button" onclick="window.history.back();">Edit</button> <!-- Go back to edit -->
    </form>
</body>
</html>
