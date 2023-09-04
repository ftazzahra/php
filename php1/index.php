<?php

require 'functions.php';
$siswa = query("SELECT *FROM siswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Siswa</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nisn</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
</tr>
<?php  foreach( $siswa as $row ) : ?>
<tr>
    <td><?= $row["id"]; ?></td>
    <td>
        <a href="">ubah</a>  |
        <a href="">hapus</a> 
    </td>
    <td><img src="gambar/<?php echo $row ["gambar"];?>" width="50"></td>
</td>
    <td><?= $row["nisn"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<tr>
</tr>
<?php endforeach; ?>
</body>
</html>