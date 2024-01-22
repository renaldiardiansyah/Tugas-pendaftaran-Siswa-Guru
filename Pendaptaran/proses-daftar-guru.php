<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id_guru'];
    $nama = $_POST['nama_guru'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['jenis_kelamin'];
    $NoTelepon= $_POST['no_telepon'];
    $email = $_POST['email'];
    
    



    // buat query
    $sql = "INSERT INTO Guru (id_guru,nama_guru, alamat,jenis_kelamin,no_telepon,email) VALUE ('$id','$nama', '$alamat', '$kelamin','$NoTelepon','$email')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>