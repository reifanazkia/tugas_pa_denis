<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA PELANGGAN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    td {
        padding: 4px 8px; /* Kurangi padding */
        vertical-align: middle;
    }
    td:first-child {
        width: 100px; /* Lebar label */
        white-space: nowrap;
    }
</style>


</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">TAMBAH DAFTAR PELANGGAN</h2>
    <form action="insert.php" method="post" class="border p-4 rounded bg-white shadow-sm">
        <table class="table border-0">
            <tr>
                <td><label for="id" class="form-label">ID:</label></td>
                <td><input type="text" name="id" id="id" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="nama" class="form-label">NAMA:</label></td>
                <td><input type="text" name="nama" id="nama" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="nama_makanan" class="form-label">NAMA MAKANAN:</label></td>
                <td><input type="text" name="nama_makanan" id="nama_makanan" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="jumlah" class="form-label">JUMLAH:</label></td>
                <td><input type="text" name="jumlah" id="jumlah" class="form-control" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="tambah" class="btn btn-primary mt-3">TAMBAH</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
