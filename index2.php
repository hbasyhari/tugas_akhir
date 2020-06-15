<?php
//koneksi ke database
$koneksi= mysqli_connect("localhost", "root", "", "hewan");

//ambil data dari tabel dt_hwn/ query data hewan
$result = mysqli_query($koneksi,"SELECT * FROM dt_hwn");

//ambil data (fetch) dari object result
//mysqli_fetch_row();   //mengembalikan array numeric
//mysqli_fetch_assoc();  //mengembalikan array assosiatif
//mysqli_fetch_array();  //mengembalkan array numeric & array assosiatif
//mysqli_fetch_object(); //mengembalikan sebuah objeck

/* while ($hwn = myqli_fetch_assoc($result)){
    var_dump($hwn);
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Hewan</h1>

    <table border="1" cellpadding="10" cellspacing="0">
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
        <?php while ($row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
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
        <?php endwhile; ?>
    </table>
    
</body>
</html>