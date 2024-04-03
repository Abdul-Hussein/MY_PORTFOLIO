
    <div class="container">
      <h2>Add New Blog Post</h2>
      <form id="form" action="addPost.php" method="post">
        <label for="title">Title:</label>
        <input id="myTitle" name="title" placeholder="Title" required>

        <label for="author">Author:</label>
        <input id="author" name="author" placeholder="Your name" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" placeholder="Post Content" required></textarea>

        <input type="hidden" name="date" value="<?php echo date("Y/m/d");?>">

        <input class="btn-submit" type="submit" value="Post" name="submit">
        <input class="btn-reset" type="reset" value="Clear">
      </form>
    </div>
  
<script>
  // Define the function to handle clearing and validation
  function clearAndValidate(e) {
    // Get input values
    var title = document.getElementById('myTitle').value;
    var content = document.getElementById('content').value;

    // Check if title or content is empty
    if (title.trim() === '' || content.trim() === '') {
      // Prevent form submission
      e.preventDefault();
      
      // Highlight missing fields using CSS styles
      document.getElementById('myTitle').classList.add('missing-field');
      document.getElementById('content').classList.add('missing-field');
    }
  }

  // Get reference to the clear button
  let clearButton = document.getElementById('clearButton');

  // Add click event listener to the clear button
  clearButton.addEventListener('click', clearAndValidate);
</script>


<style>
  .missing-field {
    border: 1px solid red; /* Example highlighting style */
  }
</style>

