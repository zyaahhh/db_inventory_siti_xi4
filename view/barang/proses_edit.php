<?php 

$id_barang=$_GET['id_barang'];
$id_jenis=$_POST['id_jenis'];
$nama_barang=$_POST['nama_barang'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
$warna=$_POST['warna'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "UPDATE barang SET nama_barang='$nama_barang' 
WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Edit berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
else{
    echo "<script>alert('Edit gagal')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}