<?php

$id_jenis =$_POST['id_jenis'];
$nama_jenis =$_POST['nama_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO jenis_barang VALUES('$id_jenis','$nama_jenis')");

if($query){
    echo "<script>alert('Tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
else{
    echo "<script>alert('Tambah gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}