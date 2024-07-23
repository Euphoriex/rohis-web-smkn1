<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body style="background: #d7d1b4;">
    <main class="container">
        <h1 class="text-center m-5">Absen Kehadiran</h1>
        <div class="bg-white rounded-4 shadow p-5">
    <table class="table table-stripped">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Tanggal</th>
        <th>Kehadiran</th>
    </tr>

    <?php
            include('koneksi.php');
            $tampil = mysqli_query($koneksi,"SELECT * FROM absen");
            while ($data = mysqli_fetch_array($tampil)) {
            ?>
            <tr>
                <td><?php echo $data['nis'];?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['kelas'];?></td>
                <td><?php echo $data['jurusan'];?></td>
                <td><?php echo $data['tanggal'];?></td>
                <td><?php echo $data['kehadiran'];?></td>
            </tr>
        </tr>
        <?php
            }
            ?>
    </table>
    <a href="http://127.0.0.1:5500/home/home.html" class="btn btn-secondary">Back</a>
    <a href="form.php"  class="btn btn-primary">Tambah</a>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>