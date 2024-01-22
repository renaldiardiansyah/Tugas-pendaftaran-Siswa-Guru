<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id_pendaftaran'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['jenis_kelamin'];
    $agama= $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $NoTelp = $_POST['No_telepon'];
    $email = $_POST['email'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $kodePos = $_POST['kode_pos'];
    



    // buat query
    $sql = "INSERT INTO SiswaNew (id_pendaftaran,nama, alamat,jenis_kelamin,agama,sekolah_asal,tanggal_lahir,No_telepon,email,desa,kecamatan,kabupaten,provinsi,kode_pos) VALUE ('$id','$nama', '$alamat', '$kelamin','$agama','$sekolah_asal','$tanggal_lahir','$NoTelp','$email','$desa','$kecamatan','$kabupaten','$provinsi','$kodePos')";
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