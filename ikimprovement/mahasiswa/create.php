




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>

    <title>IKI- Tambah Data</title>
</head>
<body>
    <?php include '../partials/nav.php'; ?>
    <div class="container">
      <div class="row">
      <h1>Tambah Data</h1>
      <hr>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col">
        <form action="store.php" method="post">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <button type="submit"class="btn btn btn-info">Simpan</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>