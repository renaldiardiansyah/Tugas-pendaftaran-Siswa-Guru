<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>PENDAFTARAN DATA SISWA</h1>
		<h3>DAFTARLAH SEBELUM TERLAMBAT</h3>
	</div>
	<br/>
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="index.php">Daftar Siswa</a></li>
            <li><a href="index1.php">Daftar Guru</a></li>

        </ul>
    </nav>
        <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
    </html>