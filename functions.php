<?php
//koneksi ke database
$koneksi= mysqli_connect("localhost", "root", "", "hewan");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $Nama = htmlspecialchars($data ["Nama"]);
    $Kelas =  htmlspecialchars($data ["Kelas"]);
    $Ordo =  htmlspecialchars($data ["Ordo"]);
    $Makanan =  htmlspecialchars($data ["Makanan"]);
    $Gambar =  htmlspecialchars($data ["Gambar"]);

    
    //query insert ke database
    $query = "INSERT INTO dt_hwn
                VALUES
                ('', '$Nama', '$Kelas','$Ordo','$Makanan','$Gambar')
                ";

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM dt_hwn WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function edit($id)
{
    global $koneksi;
    mysqli_query($koneksi, "UPDATE dt_hwn SET Nama = '$_POST[Nama]',Kelas = '$_POST[Kelas]',Ordo = '$_POST[Ordo]',Makanan = '$_POST[Makanan]',Gambar = '$_POST[Gambar]' WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
        $query = "SELECT * FROM dt_hwn
                    WHERE
                        Nama LIKE '%$keyword%' OR
                        Kelas LIKE '%$keyword%' OR
                        Ordo LIKE '%$keyword%' OR
                        Makanan LIKE '%$keyword%' 
      ";

      return query($query);
}