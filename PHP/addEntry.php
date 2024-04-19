<div class="container">
  <h2>Add New Blog Post</h2>
  <form id="form" action="addPost.php" method="post">
    <label for="title">Title:</label>
    <input id="myTitle" name="title" placeholder="Title" >

    <label for="author">Author:</label>
    <input id="author" name="author" placeholder="Your name" >

    <label for="content">Content:</label>
    <textarea id="content" name="content" placeholder="Post Content" ></textarea>

    <input type="hidden" name="date" value="<?php echo date("Y/m/d");?>">

    <input class="btn-submit" type="submit" value="Post" name="submit">
    <button type="submit" class="btn-preview" name="preview">Preview</button>
    <input id="clearButton" class="btn-reset" type="reset" value="Clear"> <!-- Changed type to reset -->
  </form>
</div>




