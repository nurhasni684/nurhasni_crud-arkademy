<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Produk</title>
</head>
<body>
<div class="container-fluid">
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Produk</span>
    </nav>

    <form action="proses-simpan.php" method="POST">
        <fieldset>
        <div class="form-group">
            <label for="nama_produk">Nama Produk: </label>
            <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" />
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan: </label>
            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" />
        </div><br>
        
        <div class="form-group">
            <label for="harga">Harga: </label>
            <input type="int" name="harga" class="form-control" placeholder="Harga" />
        </div><br>

        <div class="form-group">
            <label for="jumlah">Jumlah: </label>
            <input type="int" name="jumlah" class="form-control" placeholder="Jumlah" />
        </div><br>
        
            <input type="submit" value="Simpan" name="submit" class="btn btn-success"/>
            <input type="reset" value="reset" class="btn btn-danger"/>

        </fieldset>

    </form>

    </body>
</html>