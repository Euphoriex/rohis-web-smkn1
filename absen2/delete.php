<?php
include 'koneksi.php';

if (isset($_GET['nis'])){
    $nis = $_GET['nis'];
    $hapus = mysqli_query($koneksi,"DELETE FROM absen WHERE nis = $nis");
    header('location: tampilan.php');
} else {
    echo "data tidak ada";
}

?>