  document.addEventListener('DOMContentLoaded', function() {
  let form = document.getElementById('form');
  let post = document.getElementById('post-add');

  function add(e) {
    e.preventDefault();

    let titleElement = document.getElementById('myTitle').value;
    let title = document.createElement('h2');
    title.className = 'title';
    title.textContent = titleElement;

    let newPost = document.getElementById('content').value;
    let posts = document.createElement('div');
    posts.className = 'content';
    posts.textContent = newPost;

    let authorElement = document.getElementById('author').value;
    let author = document.createElement('p');
    author.className = 'post-meta';
    author.textContent = authorElement;

    post.appendChild(title);
    post.appendChild(author);
    post.appendChild(posts);
    post.appendChild(document.createElement('hr'));

    Swal.fire({
      title: 'Post Added',
      text: 'Your post has been added successfully',
      icon: 'success',
      confirmButtonText: 'OK'
    });
    
  }

  form.addEventListener('submit', add);
});