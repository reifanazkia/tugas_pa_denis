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
    <title>BUAH</title>
</head>
<body>

<a href="from.php">tambah data</a>

    <table border="2">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>rasa</th>
        </tr>

        <?php
        foreach ($data as  $buah) :?>
        <tr>
            <td><?=$buah ["id"] ?></td>
            <td><?=$buah ["nama"] ?></td>
            <td><?=$buah ["rasa"] ?></td>
        </tr>

<?php endforeach?>

    </table>
</body>
</html>