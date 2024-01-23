<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:login.php');
}
$level = $_SESSION ['level'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Perpus</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color: white; text-decoration: none;">
                    <img src="image/bookshelf.png" alt="" width="30" height="29" class="d-inline-block align-text-top">
                    Perpus Ukyy
                </a>
                        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?page/home" style="color: white; text-decoration: none;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" ?page=buku/index" style="color: white; text-decoration: none;">Buku</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link"  href=" ?page=user/index" style="color: white; text-decoration: none;">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($level=='2'){echo'disabled';} ?>" href=" ?page=kategori_buku/index" style="color: white; text-decoration: none;">Kategori Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" ?page=ulasan/index" style="color: white; text-decoration: none;">Ulasan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" ?page=peminjaman/index" style="color: white; text-decoration: none;">Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php" style="color: white; text-decoration: none;">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div align="right">
        </div>
    </div>
    <?php
    include "isi.php";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>