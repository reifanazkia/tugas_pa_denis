<?php

include_once 'koneksi.php';

$id = $_POST['id'];
$nama =$_POST['nama'];
$nama_makanan = $_POST['nama_makanan'];
$jumlah = $_POST['jumlah'];


try {
        $koneksi->query("UPDATE buah SET nama='$nama', nama_makanan='$nama_makanan', jumlah='$jumlah' WHERE id='$id'");

        header("location: tampil_data.php");

} catch (Exception $e) {
    echo "update data gagal : " . $e->getMessage();
}

?>