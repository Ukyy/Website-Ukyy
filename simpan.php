<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "koneksi.php";
$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$query = mysqli_query($koneksi, "insert into user(user_id,username,password,email,nama_lengkap,alamat) values ('$user_id','$username','$password','$email','$nama_lengkap','$alamat')");

if ($query) {
    echo '<script>
        Swal.fire({
            icon: "success",
            title: "Data berhasil Disimpan",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = "login.php";
        });
    </script>';
} else {
    echo '<script>
        Swal.fire({
            icon: "error",
            title: "Gagal menyimpan data",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = "login.php";
        });
    </script>';
    }   

?>