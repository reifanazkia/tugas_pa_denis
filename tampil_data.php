<?php

include_once 'koneksi.php';

$db = $koneksi->query("SELECT * FROM buah");
$data = $db->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR PELANGAN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">DAFTAR PELANGGAN</h2>

    <a href="from.php" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NAMA MAKANAN</th>
                <th>JUMLAH</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as  $buah) : ?>
            <tr>
                <td><?= $buah["id"] ?></td>
                <td><?= $buah["nama"] ?></td>
                <td><?= $buah["nama_makanan"] ?></td>
                <td><?= $buah["jumlah"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $buah['id'] ?>" class="btn btn-warning btn-sm">EDIT</a>
                    <a href="hapus.php?id=<?= $buah['id'] ?>" class="btn btn-danger btn-sm">HAPUS</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS (optional, hanya jika Anda perlu interaksi JS Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
