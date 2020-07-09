<?php
//koneksi DBMS
require "functions.php";

$hewan = query("SELECT * FROM dt_hwn WHERE id=$_GET[id]");

//cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    if(count($hewan) == 0){
        echo "
        <script>
        alert('Data Hewan Tidak Ada');
        document.location.href = 'index.php';
        </script>
        ";
    }
    //cek apakah data berhasil ditambahkan atau tidak?
    if (edit($_POST["Id"]) > 0){
        echo "
        <script>
        alert('Data Berhasil Diperbarui!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diperbarui!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Hewan</h1>
    <form action="" method="POST">
    <input type="hidden" name="Id" value="<?= $hewan[0]['Id'];?>">
        <ul>
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $hewan[0]['Nama'];?>" >
            </li>
            <li>
                <label for="Kelas">Kelas :</label>
                <input type="text" name="Kelas" id="Kelas" required value="<?= $hewan[0]['Kelas'];?>">
            </li>
            <li>
                <label for="Ordo">Ordo :</label>
                <input type="text" name="Ordo" id="Ordo" required value="<?= $hewan[0]['Ordo'];?>">
            </li>
            <li>
                <label for="Makanan">Makanan :</label>
                <input type="text" name="Makanan" id="Makanan" required value="<?= $hewan[0]['Makanan'];?>">
            </li>
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $hewan[0]['Gambar'];?>">
            </li>
            <br>
            <br>
            <li>
            <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>


</body>
</html>