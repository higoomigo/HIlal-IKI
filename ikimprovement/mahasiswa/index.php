<?php
require_once '../koneksi.php';

$data = mysqli_query($koneksi, 'SELECT * FROM db_mahasiswa');


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
                <h1>Data Mahasiswa</h1>
                <a href="create.php"class="btn btn btn-info mb-2">Tambah Data</a>
            </div>
        </div>
        
        <div class="col">
            <div class="col-md-8">
                <div class="table-responsive">
                <table class="table align-middle table-bordered table-hover">
                <thead>
                    <th><center>No</center></th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    // <?php echo -> ?=
                    $no = 1; 
                    while($mahasiswa = mysqli_fetch_assoc($data)) : ?>
                        
                    <tr class="align-top">
                        <td><center><?= $no ?></center></td>  
                        <td><?php echo $mahasiswa['nama']?></td>
                        <td><?php echo $mahasiswa['nim']?></td>
                        <td>
                            <a href="detail.php?id=<?php echo $mahasiswa['id'] ?> "class="btn btn-sm btn-info">Detail</a>
                            <a href="edit.php?id=<?php echo $mahasiswa['id'] ?> " class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $mahasiswa['id']?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    
                    </tr>
                    <?php 
                    $no++;
                    endwhile; ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>