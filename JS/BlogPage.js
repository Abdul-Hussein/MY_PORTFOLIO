   document.addEventListener('DOMContentLoaded', function() {
        // Get the form and clear button elements
        const form = document.getElementById('form');
        const clearButton = document.getElementById('clearButton');

        // Add event listener to the clear button
        clearButton.addEventListener('click', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Clear the input fields
            document.getElementById('myTitle').value = '';
            document.getElementById('author').value = '';
            document.getElementById('content').value = '';

            // Remove any existing 'missing-field' class to reset styling
            document.getElementById('myTitle').classList.remove('missing-field');
            document.getElementById('author').classList.remove('missing-field');
            document.getElementById('content').classList.remove('missing-field');
        });

        // Add event listener to the form submission
        form.addEventListener('submit', function(event) {
            // Get input values
            var title = document.getElementById('myTitle').value;
            var content = document.getElementById('content').value;

            // Check if title or content is empty
            if (title.trim() === '' || content.trim() === '') {
                // Prevent form submission
                event.preventDefault();
                
                // Highlight missing fields using CSS styles
                document.getElementById('myTitle').classList.add('missing-field');
                document.getElementById('content').classList.add('missing-field');
                
                // Optionally, show an alert to inform the user about missing fields
                alert('Please fill in all fields.');
            }
        });
    });

  // Define the function to handle form submission validation
  function validateForm(event) {
    // Get input values
    var title = document.getElementById('myTitle').value;
    var content = document.getElementById('content').value;
    var author = document.getElementById('author').value;
  
    if (title.trim() === ''){ // Add this else if block
      event.preventDefault();
      document.getElementById('myTitle').classList.add('missing-field');
    }
  
   else if(author.trim() === ''){ // Add this else if block
    event.preventDefault();
      document.getElementById('author').classList.add('missing-field');
    }
    // Check if title or content is empty
   else if (content.trim() === '') {
      // Prevent form submission
      event.preventDefault();
      // Highlight missing fields using CSS styles
      document.getElementById('content').classList.add('missing-field');
    }
    
  }

  // Get reference to the form
  let form = document.getElementById('form');
  // Add submit event listener to the form
  form.addEventListener('submit', validateForm);