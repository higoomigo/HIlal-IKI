<?php
include '../koneksi.php';
var_dump($_POST);
$nama = $_POST['nama'];
$nim = $_POST['nim'];

mysqli_query($koneksi, "INSERT INTO db_mahasiswa(nama, nim) VALUES ('$nama', '$nim')");

header('Location: index.php');

?>