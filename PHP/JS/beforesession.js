function redirect(e){
  e.preventDefault();
 alert('You have to log in first!');
  window.location.href = 'login.php';
    return false;
}

document.addEventListener('submit',redirect());