<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulir Update Pendaftaran produk</title>
</head>

<body>
<div class="container-fluid">
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Update Produk</span>
    </nav>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $produk['id'] ?>" />

        <div class="form-group">
            <label for="nama_produk">Nama Produk: </label>
            <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk lengkap" value="<?php echo $produk['nama_produk'] ?>" />
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan: </label>
            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $produk['keterangan'] ?>" />
        </div>

        <div class="form-group">
            <label for="harga">Harga: </label>
            <input type="text" name="harga" class="form-control" placeholder="Harga" value="<?php echo $produk['harga'] ?>" />
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah: </label>
            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php echo $produk['jumlah'] ?>" />
        </div>
        
            <button type="submit" name="simpan" class="btn btn-success"> Simpan</button>
            
        </fieldset>


    </form>
</div>


    </body>
</html>