<?php
require 'functions.php';
$hewan = query("SELECT * FROM dt_hwn");

//tombol cari ditekan
if(isset($_POST["cari"])){
    $hewan = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Hewan</h1>
    <a href="tambah.php">Tambah Data Hewan</a>
    <br></br>

<form action= "" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
</form>
<br>

    <table class="table" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Ordo</th>
            <th>Makanan</th>           
        </tr>
        
        <?php $i = 1;?>
        <?php foreach ($hewan as $row) { ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="edit.php?id=<?= $row['Id']; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row['Id']; ?>">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['Gambar']?>" width="50">
            </td>
            <td><?= $row['Nama']?></td>
            <td><?= $row['Kelas']?></td>
            <td><?= $row['Ordo']?></td>
            <td><?= $row['Makanan']?></td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    
</body>
</html>