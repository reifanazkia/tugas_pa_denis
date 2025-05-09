<?php

include_once 'koneksi.php';

$id = $_POST['id'];
$nama =$_POST['nama'];
$rasa = $_POST['rasa'];


try {
    $koneksi->query("INSERT INTO buah (id, nama, rasa) VALUE ('$id', '$nama', '$rasa')");

    header("location: tampil_data.php");

} catch (Exception $e) {
    echo "tambah data gagal : " . $e->getMessage();
}


?>