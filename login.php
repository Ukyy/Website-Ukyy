<?php
include "koneksi.php"
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Login</title>

</head>
 <body>
<div class="p-5 bg-image" style="background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');height: 300px;">
  <div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
      <div class="col-md-7 col-lg-5">
        <div class="card shadow-lg">
          <div class="card-body">
            <h2 class="mb-5 mt-3 text-center text-primary">L O G I N</h2>
            <form action="" method="post">
              <div class="mb-3">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda!">
              </div>
              <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda!">
              </div>
              <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                  </div>
                </div>

                <div class="col">
                  <!-- Simple link -->
                  <a href="#!">Forgot password?</a>
                </div>
              </div>
              <div class="container">
                <div class="d-grid">
                    <button  class="btn btn-primary" name="login">Login</button>
                </div>
              </div>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Not a member? <a href="tambah.php">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
<?php
if (isset($_POST['login'])) {
  //echo "proses";
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = mysqli_query($koneksi, "select * from user where username='$username' AND password='$password'");
  // $data = mysqli_fetch_array($query);
  $cek = mysqli_num_rows($query);

  //echo $cek;
  if ($cek > 0) {
    //berhasil login
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['status'] = "sukses";
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['level'] = $data['level'];
    $_SESSION['user_id'] = $data['user_id'];
   header('location:index.php');
  }
}
?>