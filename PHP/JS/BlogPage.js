document.addEventListener('DOMContentLoaded', function() {
  let form = document.getElementById('form');

  function add(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Post Added',
      text: 'Your post has been added successfully',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  }

  form.addEventListener('submit', add);
});
