<?php

include_once 'koneksi.php';

$id = $_POST['id'];
$nama =$_POST['nama'];
$nama_makanan = $_POST['nama_makanan'];
$jumlah = $_POST['jumlah'];


try {
    $koneksi->query("INSERT INTO buah (id, nama, nama_makanan, jumlah) VALUE ('$id', '$nama', '$nama_makanan', '$jumlah')");

    header("location: tampil_data.php");

} catch (Exception $e) {
    echo "tambah data gagal : " . $e->getMessage();
}


?>