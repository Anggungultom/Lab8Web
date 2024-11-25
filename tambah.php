<?php
require 'koneksi.php';

if(isset($_POST['tambah'])){
    $id_barang =$_POST['id_barang'];
    $kategori =$_POST['kategori'];
    $nama =$_POST['nama'];
    $gambar =$_POST['gambar'];
    $harga_beli =$_POST['harga_beli'];
    $harga_jual =$_POST['harga_jual'];

    $stok =$_POST['stok'];
    $stok ="";
    foreach ($stok as $row) {
        $stok .=$row . ",";
    }
    $query = "INSERT INTO data_barang VALUES('','$id_barang', '$kategori', '$nama', '$gambar', '$harga_beli', '$harga_jual', '$stok')";
    mysqli_query($conn,$query);
    echo
    "
    <script> alert('Data berhasil Disimpan'); </script>
    ";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Barang</title>
</head>
    <style media="screen" >
        label{
            display: block;
        }
    </style>

<body>
    <h1>Tambah Barang</h1>

    <form class="" action="" method="post" autocomplete="off">
        <label for="">Id Barang</label>
        <input type="text" name="id_barang" required value="">
        <label for="">Kategori</label>
            <select class="" name="kategori" required>
                <option value="" selected hidden>Pilih</option>
                <option value="komputer">Komputer</option>
                <option value="smartphone">Smartphone</option> 
            </select>
        <label for="">Nama</label>
        <input type="text" name="nama" required value="">
        <label for="">Gambar</label>
        <input type="text" name="gambar" required value="">
        <label for="">Harga Beli</label>
        <input type="text" name="harga_beli" required value="">
        <label for="">Harga Jual</label>
        <input type="text" name="harga_jual" required value="">
        <label for="">Stok</label>
        <input type="text" name="stok" required value="">
        <br>
        <button type="tambah" name="tambah">Tambah</button>
    </form>

</body>
</html>