<?php
include 'koneksi.php';
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$tanggal = $_POST['tanggal'];
$kehadiran = $_POST['kehadiran'];

$simpan = mysqli_query($koneksi,"INSERT INTO absen VALUES('$nis','$nama','$kelas','$jurusan','$tanggal','$kehadiran')");
if ($simpan) {
    header('location: tampilan.php');
} else {
    echo("Data gagal disimpan");
}

?>