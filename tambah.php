<?php
//koneksi DBMS
require "functions.php";

//cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    //cek apakah data berhasil ditambahkan atau tidak?
    if (tambah($_POST) > 0){
        echo "
        <script>
        alert('Data Berhasil Disimpan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Disimpan!');
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
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Halaman Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Hewan</h1>
    <form action="" method="POST">
        <table>
            <tr>
            <td>
                <label for="Nama">Nama </label></td>
                <td>: <input type="text" name="Nama" id="Nama" required></td>
            </tr>
            <tr>
            <td><label for="Kelas">Kelas </label></td>
               <td>: <input type="text" name="Kelas" id="Kelas" required></td>
            </tr>
            <tr>
               <td><label for="Ordo">Ordo </label></td>
               <td>: <input type="text" name="Ordo" id="Ordo" required></td>
            </tr>
            <tr>
            <td><label for="Makanan">Makanan </label></td>
              <td>: <input type="text" name="Makanan" id="Makanan" required></td>
            </tr>
            <tr>
                <td><label for="Gambar">Gambar </label></td>
               <td>: <input type="text" name="Gambar" id="Gambar" required></td>
            </tr>
            <br>
            <br>
            <tr>
            <td>
            <button type="submit" name="submit">Simpan</button></td>
            </tr>
        </table>
    </form>


</body>
</html>