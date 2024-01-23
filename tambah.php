<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="p-5 bg-image" style="background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');height: 300px;">
  <div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
      <div class="col-md-7 col-lg-5">
        <div class="card shadow-lg">
          <div class="card-body">
            <h2 class="mb-5 mt-3 text-center text-primary">R E G I S T E R</h2>
            <form action="simpan.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>User Id :</label>
				<input type="text" class="form-control" placeholder="Masukkan User Id" name="user_id" required="required">
			</div>
			<div class="form-group">
				<label>Username :</label>
				<input type="text" class="form-control" placeholder="Masukkan Username" name="username" required="required">
			</div>
			<div class="form-group">
				<label>Password :</label>
				<input type="password" class="form-control" placeholder="Masukkan Password" name="password" required="required">
			</div>
			<div class="form-group">
				<label>Email :</label>
				<input type="email" class="form-control" placeholder="Masukkan Nama" name="email" required="required">
			</div>
			<div class="form-group">
				<label>Nama Lengkap :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" required="required">
			</div>
			<div class="form-group">
				<label>Alamat :</label>
				<input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" required="required">
			</div>
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>

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