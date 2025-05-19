<?php
include "koneksi.php";

// Ambil ID dari parameter URL
$id = $_GET['id'];

// Ambil data dari database
$db = $koneksi->query("SELECT * FROM buah WHERE id = $id");
$buah = $db->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT DAFTAR PEMBELI</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">EDIT DAFTAR PELANGGAN</h2>
    <form action="update.php" method="POST" class="border p-4 rounded bg-white shadow-sm">

        <input type="hidden" name="id" value="<?= $buah['id'] ?>">

        <div class="mb-3">
            <label class="form-label">Nama:</label>
            <input type="text" name="nama" class="form-control" value="<?= ($buah['nama']) ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Makanan:</label>
            <input type="text" name="nama_makanan" class="form-control" value="<?= ($buah['nama_makanan']) ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah:</label>
            <input type="text" name="jumlah" class="form-control" value="<?= ($buah['jumlah']) ?>">
        </div>

        <input type="submit" name="submit" value="Simpan" class="btn btn-success">
    </form>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
