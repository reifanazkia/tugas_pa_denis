<?php
include 'koneksi.php';

$id = $_GET['id'];

try {
    $koneksi->query( "DELETE FROM buah WHERE id=$id");

    header("location:tampil_data.php");
    
} catch (Exception $e) {
    echo "tambah data gagal : " . $e->getMessage();
}


?>
