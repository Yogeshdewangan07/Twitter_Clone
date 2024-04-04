<?php
session_start();
include "php/config.php";
if(isset($_SESSION['unique_id'])) {
  header("location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Twitter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container col-6">
    <div class="mt-4 d-flex flex-column align-items-center">
      <i class="fa-brands fa-twitter fa fs-1 fw-bold" style="color: #1d9bf0;"></i>
      <p class="fs-4 fw-bolder">Sign Up to Twitter</p>
    </div>
    <div class="signup">
    <form action="" method="POST" class="form-field">
      <div class="error-text alert alert-danger" style="display: none;"></div>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">image</label>
        <input type="file" name="image" class="form-control">
      </div>
      <button type="submit" class="signup btn btn-primary rounded-pill" style="width: 100%;">Sign Up</button>
    </form>
    </div>
    <div class="mt-2">
      <span>Already have an account <a href='login.php'>Login Here</a></span>
    </div>
  </div>

  <script src="JavaScript/signup.js"></script>
</body>

</html>