<?php 
require "databaseconnect.php";

if (isset($_POST["register"])) {
  $username = filter_input(INPUT_POST, "username");
  $password = $_POST("password");
  $confirm_password = $_POST["confirm password"];
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  if ($password != $confirm_password) {
    echo "<script>alert('Password dengan Confirm Password berbeda!')</script>";
    header("Location: Home.php");
  }

  // tambahkan user baru ke database
  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // insert ke DB
  $sql = "INSERT INTO user (username, email, password) VALUES ('username', 'email, 'password')";

  if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }

  mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Trip&Go</title>
  </head>
  <body>
    <section class="login d-flex">
      <div class="login-left w-50 h-100">
        <div class="row">
          <div class="col-6">
            <img src="img/regsiterimg.jpg" alt="gambar tempat" />
          </div>
        </div>
      </div>

      <div class="login-right w-50 h-100">
        <div class="row align-items-center h-100">
          <div class="col-6">
            <div class="header">
              <h1>Register</h1>
            </div>
            <div class="login-form">
              <form action =  "" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name" />

                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@gmail.com" />
                  <small id="emailHelp" class="form-text text-muted">Pastikan Email belum terdaftar sebelumnya</small>

                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" />
                  <small id="emailHelp" class="form-text text-muted">Pastikan menggunakan huruf dan karakter yang dikombinasikan</small>
                  <button type="submit" class="login"><a href="HomePage.html">Register</a></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>