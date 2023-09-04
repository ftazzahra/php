<?php
// koneksi ke DBMS
$reza = mysqli_connect("localhost", "root", "", "phpdasar1");

// cek apakah tombol submit sudah di tekan apa belum
if( isset($_POST["submit"]) ) {
    // ambil data dari tiap elemen dalam form
    $nama = $_POST["nama"];
    $nisn = $_POST["nisn"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // query insert data
    $query = "INSERT INTO siswa
    VALUES
    ('', '$nama', '$nisn', '$email', '$jurusan', '$gambar')
    ";
    mysqli_query($reza, $query);
    
    // cek apakah data berhasil di tambahkan atau tidak
    if( mysqli_affected_rows($reza) > 0 ) {
        echo"berhasil";

    } else {
        echo "gagal";
        echo "<br>";
        echo mysqli_error($reza);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data siswa</title>
</head>
<body>
    <h2>Tambah data siswa</h2>

    <form action="" method="post">
        <ul>
            <br>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <br>
            <li>
            <label for="nisn">Nisn : </label>
                <input type="text" name="nisn" id="nisn">
            </li>
            <br>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <br>
            <li>
            <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <br>
                <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <br>
            <li>
                <button type="submit" name="sumit">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>