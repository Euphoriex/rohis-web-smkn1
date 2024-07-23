<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .btn {
        margin-top: 20px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body style="background: #d7d1b4;">
    <main class="container">
        <h1 class="text-center m-5">Absen Kehadiran</h1>
        <div class="bg-white rounded-4 shadow p-5">
<form method="post" enctype="multipart/form-data" action="simpan.php">
<label for="" class="form-label">NIS : </label>
    <input type="text" name="nis" class="form-control mb-3" required>
    <label for="" class="form-label">Nama : </label>
    <input type="text" name="nama" class="form-control mb-3" required>
    <label for="" class="form-label">Kelas : </label>
    <select name="kelas" id="" class="form-control mb-3">
        <option value="">Pilih</option>
        <option value="RPL">10</option>
        <option value="SIJA">11</option>
        <option value="TKJ">12</option>
        <option value="DPIB">13</option>
    </select>   
    <label for="" class="form-label">Jurusan : </label>
    <select name="jurusan" id="" class="form-control mb-3">
        <option value="">Pilih</option>
        <option value="RPL">RPL</option>
        <option value="SIJA">SIJA</option>
        <option value="TKJ">TKJ</option>
        <option value="DPIB">DPIB</option>
        <option value="TKR">TKR</option>
        <option value="TFLM">TFLM</option>
        <option value="TOI">TOI</option>
        <option value="TP">TP</option>
        <option value="TKP">TKP</option>
    </select>   
    <label for="" class="form-label">Tanggal : </label>
    <input type="date" name="tanggal" id="">
    <br>    
    <label for="" class="form-label">Kehadiran : </label>
    <select name="kehadiran" id="" class="form-control mb-3">
        <option value="">Pilih</option>
        <option value="Hadir">Hadir</option>
        <option value="Sakit">Sakit</option>
        <option value="Izin">Izin</option>
    </select>
    
    <a href="tampilan.php" class="btn btn-secondary">Back</a>
    <input type="submit" style="margin-left: 800px;"class="btn btn-primary" name="save" value="Tambah">
    <input type="reset" class="btn btn-danger" name="hapus" value="Hapus">
</form>
        </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>