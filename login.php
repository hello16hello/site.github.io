<?php include('sign.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>user registration system</title>
    <link rel="stylesheet" type="text/css" href="sty.css">
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="header">
      <h2>login</h2>
      </div>
<form  action="login.php" method="POST" class="needs-validation" novalidate>
  <div class="input-group">
    <label>user name</label>
    <input type="text" name="username" required>
    <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="input-group">
    <label>password</label>
    <input type="text" name="password1" required>
    <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="input-group">
    <button type="submit" name="login" class="btn">login</button>
  </div>
  <p> not yet  a member <a href="register.php">sign up</a>
</form>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


  </body>
</html>
