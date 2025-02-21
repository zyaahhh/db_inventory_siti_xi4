<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Inventory Barang</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jenis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

<?php
$id_jenis=$_GET['id_jenis'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM jenis_barang WHERE id_jenis='$id_jenis'");
    $result=mysqli_fetch_array($query);
    ?>
    <h1>Data jenis baru </h1>
    <form action="simpan.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id Jenis</label>
            <input type="text" class="form-control" value="<?php echo $result['id_jenis'] ?>"name="id_jenis" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Jenis</label>
            <input type="text" class="form-control" value="<?php echo $result['nama_jenis'] ?>"name="nama_jenis" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
</div>
</div>
</body>
</html>