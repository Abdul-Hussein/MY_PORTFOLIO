
    <div id="post-add" class="post-add">
        <h2 class="title">The wonderful world of Web Programming</h2>
       <i class="fa-solid fa-clock" class="date">2024/04/03</i>
        <p id="author" class="post-meta">By Avijit Singh</p>
        <p class="content">I enjoy developing web applications using HTML, Java Script and PHP.</p>
      <hr class="divider">
    </div>
    

<?php 
include('connect.php');
$sqlSelect = "SELECT * FROM post";
$result = mysqli_query($conn, $sqlSelect);
while($data = mysqli_fetch_array($result)) {
    echo '<div class="post-add">';
    echo '<h2 class="title">' . $data['title'] . '</h2>'; 
    echo '<i class="fa-solid fa-clock"></i><span class="date">' . $data['date'] . '</span>'; // Display date alongside the clock icon
    echo '<p class="post-meta">By ' . $data['author'] . '</p>';
    echo '<p class="content">' . $data['content'] . '</p>';
    echo '<hr class="divider">';
    echo '</div>';
}

?>
