<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Inventory Barang</title>
</head>l
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis_barang">Jenis Barang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
    <h1>Data Barang</h1>
    <a href="view_tambah.php" class="btn btn-info"><i class="fa-solid fa-square-plus"></i>Tambah data baru</a>
       <table class="table table-striped table-hover">
        <tr>
            <th>No.</th>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Id Jenis</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Warna</th>
            <th>Aksi</th>
        </tr>
        <?php 
        include '../../config/koneksi.php';
        $query = mysqli_query($conn,"SELECT * FROM barang");
        $no=1;
        if(mysqli_num_rows(result: $query)){
        
            while ($result=mysqli_fetch_assoc(result:$query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_barang'] ?></td>
                    <td><?php echo $result['nama_barang'] ?></td>
                    <td><?php echo $result['id_jenis'] ?></td>
                    <td><?php echo $result['harga'] ?></td>
                    <td><?php echo $result['stok'] ?></td>
                    <td><?php echo $result['warna'] ?></td>
                    <td>
                        <a href="view_edit.php?id_barang=<?php echo $result['id_barang']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Edit </a>
                        <a href="" onclick="return confirm ('kamu yakin mau dihapus?')"
                         class="btn btn-danger"><i class = "fa-solid fa-trash"></i>Hapus </a>
                </tr>
                <?php
                $no++;
            }
        } else{
            echo "Data kosong";
        }
        ?>
       </table>
    </div>
       
</body>
</html>