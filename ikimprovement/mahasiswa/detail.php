<?php
require_once '../koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM db_mahasiswa WHERE id = '$id'");
$mahasiswa = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>

    <title>IKI-Data Mahasiswa</title>
</head>
<body>
    <?php 
    include '../partials/nav.php';

    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Data Mahasiswa no. <?= $mahasiswa['id'] ?></h1>
            </div>
        </div>
        
    <div class="container">
      <div class="row">
        <div class="col">
        <h3>Nama</h3>
        <p><?= $mahasiswa['nama']; ?></p>
        <h3>NIM</h3>
        <p><?= $mahasiswa['nim']; ?></p>
        </div>
      </div>
    </div>
        
    </div>
</body>
</html>